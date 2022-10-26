<?php

declare(strict_types=1);

namespace App\Actions;

use A17\Twill\Models\Contracts\TwillModelContract;
use App\Models\Place;
use App\Services\GooglePlacesService;

final class UpdateDetails
{
    public function __construct(private readonly GooglePlacesService $googlePlacesService)
    {
    }


    public function __invoke(Place|TwillModelContract $place): void
    {
        $placeDetails = ($this->googlePlacesService)($place);

        $place->place_id = $placeDetails->place_id;
        $place->address = $placeDetails->address;
        $place->latitude = $placeDetails->latitude;
        $place->longitude = $placeDetails->longitude;
        $place->url = $placeDetails->url;

        $place->save();
    }
}
