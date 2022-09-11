<?php

declare(strict_types=1);

namespace App\Models;

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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

final class Place extends Model
{
    use Filterable;
    use HasFactory;
    use Searchable;
    use SoftDeletes;

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
