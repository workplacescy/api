<?php

declare(strict_types=1);

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

final class PlaceFilter extends ModelFilter
{
    /**
     * @inheritdoc
     * @var array<string>
     */
    protected $blacklist = [
        'id',
        'createdAt',
        'updatedAt',
        'deletedAt',
        'title',
        'description',
        'place',
        'latitude',
        'longitude',
    ];


    public function busyness(string $busyness): PlaceFilter
    {
        return $this->where('busyness', $busyness);
    }


    public function city(string $city): PlaceFilter
    {
        return $this->where('city', $city);
    }


    public function vRate(float $vRate): PlaceFilter
    {
        return $this->where('v_rate', '>=', $vRate);
    }


    public function size(string $size): PlaceFilter
    {
        return $this->where('size', $size);
    }


    public function sockets(string $sockets): PlaceFilter
    {
        return $this->where('sockets', $sockets);
    }


    public function noise(string $noise): PlaceFilter
    {
        return $this->where('noise', $noise);
    }


    public function type(string $type): PlaceFilter
    {
        return $this->where('type', $type);
    }


    public function view(string $view): PlaceFilter
    {
        return $this->where('view', $view);
    }


    public function cuisine(string $cuisine): PlaceFilter
    {
        return $this->where('cuisine', $cuisine);
    }
}
