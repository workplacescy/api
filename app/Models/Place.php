<?php

declare(strict_types=1);

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;
use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Cuisine;
use App\Enums\Noise;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Scout\Searchable;

final class Place extends Model
{
    use Filterable;
    use HasMedias;
    use Searchable;

    /** @inheritdoc */
    protected $casts = [
        'busyness' => Busyness::class,
        'city' => City::class,
        'cuisine' => Cuisine::class,
        'noise' => Noise::class,
        'size' => Size::class,
        'sockets' => Sockets::class,
        'type' => Type::class,
        'view' => View::class,
    ];

    /** @inheritdoc */
    protected $hidden = [
        'created_at',
        'deleted_at',
        'updated_at',
    ];

    /** @inheritdoc */
    protected $fillable = [
        'address',
        'busyness',
        'city',
        'cuisine',
        'description',
        'latitude',
        'longitude',
        'noise',
        'place_id',
        'published',
        'size',
        'sockets',
        'title',
        'type',
        'url',
        'v_rate',
        'view',
        'wifi_name',
        'wifi_password',
    ];

    /** @inheritdoc */
    protected $with = ['medias'];


    /** @inheritdoc */
    protected static function boot(): void
    {
        parent::boot();

        self::addGlobalScope('order', static function (Builder $builder): void {
            $builder->orderByDesc('v_rate')->orderBy('title');
        });
    }


    /** @inheritDoc */
    public function toSearchableArray(): array
    {
        return [
            'address' => $this->address,
            'description' => $this->description,
            'id' => $this->id,
            'title' => $this->title,
        ];
    }
}
