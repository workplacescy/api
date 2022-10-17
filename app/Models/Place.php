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
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

final class Place extends Model
{
    use Filterable;
    use HasFactory;
    use HasMedias;
    use Searchable;

    /** @inheritdoc */
    protected $casts = [
        'type' => Type::class,
        'city' => City::class,
        'sockets' => Sockets::class,
        'noise' => Noise::class,
        'size' => Size::class,
        'busyness' => Busyness::class,
        'view' => View::class,
        'cuisine' => Cuisine::class,
    ];

    /** @inheritdoc */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /** @inheritdoc */
    protected $fillable = [
        'title',
        'type',
        'city',
        'place_id',
        'address',
        'latitude',
        'longitude',
        'url',
        'sockets',
        'noise',
        'size',
        'busyness',
        'view',
        'cuisine',
        'v_rate',
        'published',
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'address' => $this->address,
        ];
    }
}
