<?php

declare(strict_types=1);

namespace App\Models;

use App\Dto\GooglePlaceDetails;
use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Location;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use App\Services\GooglePlacesService;
use App\Services\RankService;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

use function resolve;

final class Place extends Model
{
    use Filterable;
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    private readonly RankService $rankService;

    private readonly GooglePlacesService $googlePlacesService;

    /** @inheritdoc */
    protected $casts = [
        'type' => Type::class,
        'city' => City::class,
        'sockets' => Sockets::class,
        'size' => Size::class,
        'location' => Location::class,
        'busyness' => Busyness::class,
        'view' => View::class,
    ];

    /** @inheritdoc */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->rankService = resolve(RankService::class);
        $this->googlePlacesService = resolve(GooglePlacesService::class);
    }


    protected static function booting(): void
    {
        self::saving(static function (self $place): void {
            $place->rank = ($place->rankService)($place);

            $placeId = $place->googlePlacesService->findGooglePlaceId($place);

            $place->place_id = $placeId;

            $placeDetails = $place->googlePlacesService->findGooglePlaceDetails($place);

            $place->appendGooglePlaceDetails($placeDetails);
        });
    }


    private function appendGooglePlaceDetails(GooglePlaceDetails $googlePlaceDetails): void
    {
        $this->address = $googlePlaceDetails->address;
        $this->latitude = $googlePlaceDetails->latitude;
        $this->longitude = $googlePlaceDetails->longitude;
        $this->url = $googlePlaceDetails->url;
    }


    /** @inheritDoc */
    public function toSearchableArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'city' => $this->city,
            'place_id' => $this->place_id,
            'url' => $this->url,
            'address' => $this->address,
            'sockets' => $this->sockets,
            'size' => $this->size,
            'location' => $this->location,
            'busyness' => $this->busyness,
            'view' => $this->view,
        ];
    }
}
