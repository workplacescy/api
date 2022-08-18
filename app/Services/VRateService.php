<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\PropertyEnum;
use App\Models\Place;

use function array_reduce;
use function round;

final class VRateService
{
    public function __invoke(Place $place): float
    {
        $attributes = [$place->type, $place->city, $place->sockets, $place->size, $place->location, $place->busyness, $place->view];

        return $this->rateTotal($attributes);
    }


    private function rateOne(PropertyEnum $attribute): float
    {
        return $attribute::WEIGHT * $attribute->coefficient();
    }


    /** @param PropertyEnum[] $attributes */
    private function rateSummary(array $attributes): float
    {
        return array_reduce($attributes, function (mixed $carry, PropertyEnum $attribute): float {
            return $carry + $this->rateOne($attribute);
        });
    }


    /** @param PropertyEnum[] $attributes */
    private function weightSummary(array $attributes): float
    {
        return array_reduce($attributes, static function (mixed $carry, PropertyEnum $attribute): float {
            return $carry + $attribute::WEIGHT;
        });
    }


    /** @param PropertyEnum[] $attributes */
    private function rateTotal(array $attributes): float
    {
        return round($this->rateSummary($attributes) / $this->weightSummary($attributes), 1);
    }
}
