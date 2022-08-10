<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\PropertyEnum;
use App\Models\Place;

use function array_reduce;

final class RankService
{
    public function __invoke(Place $place): int
    {
        $rankAttributes = [$place->type, $place->city, $place->sockets, $place->size, $place->location, $place->busyness, $place->view];

        return array_reduce($rankAttributes, static function (mixed $carry, PropertyEnum $attribute): int {
            return $carry + $attribute::WEIGHT * $attribute->coefficient();
        });
    }
}