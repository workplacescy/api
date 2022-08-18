<?php

declare(strict_types=1);

namespace App\Actions;

use App\Models\Place;
use App\Services\GooglePlacesService;

class UpdateDetails
{
    public function __construct(private readonly GooglePlacesService $googlePlacesService)
    {
    }


    public function __invoke(Place $place): void
    {
        $placeId = $this->googlePlacesService->findGooglePlaceId($place);

        $place->place_id = $placeId;

        $placeDetails = $this->googlePlacesService->findGooglePlaceDetails($place);

        $place->address = $placeDetails->address;
        $place->latitude = $placeDetails->latitude;
        $place->longitude = $placeDetails->longitude;
        $place->url = $placeDetails->url;

        $place->save();
    }
}
