<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Location;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use App\Services\RankService;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

final class Place extends Model
{
    use Filterable;
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    private readonly RankService $rankService;

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
    }


    protected static function booting(): void
    {
        self::saving(static function (self $place): void {
            $place->rank = ($place->rankService)($place);
        });
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
            'sockets' => $this->sockets,
            'size' => $this->size,
            'location' => $this->location,
            'busyness' => $this->busyness,
            'view' => $this->view,
        ];
    }
}