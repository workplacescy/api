<?php

declare(strict_types=1);

namespace App\Dto;

class GooglePlaceDetails
{
    public function __construct(
        public readonly string $address,
        public readonly string $latitude,
        public readonly string $longitude,
        public readonly string $url,
    ) {
    }
}
