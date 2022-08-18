<?php

declare(strict_types=1);

namespace App\Services;

use App\Dto\GooglePlaceDetails;
use App\Models\Place;
use GoogleMaps\GoogleMaps;
use RuntimeException;

use function json_decode;

use function print_r;

use const JSON_THROW_ON_ERROR;

final class GooglePlacesService
{
    public function __construct(private readonly GoogleMaps $googleMaps)
    {
    }


    public function findGooglePlaceId(Place $place): string
    {
        $query = "{$place->name},{$place->city->value}";
        $response = json_decode($this->googleMaps->load('textsearch')->setParam(['query' => $query])->get(), false, 512, JSON_THROW_ON_ERROR);

        if ($response->status !== 'OK') {
            throw new RuntimeException('place_id not found for query '.$query.\PHP_EOL.'Response: '.print_r($response, true));
        }

        return $response->results[0]->place_id;
    }


    public function findGooglePlaceDetails(Place $place): GooglePlaceDetails
    {
        $response = json_decode(
            $this->googleMaps->load('placedetails')->setParam([
                'placeid' => $place->place_id,
                'fields' => 'formatted_address,geometry/location,name,url',
            ])->get(),
            false,
            512,
            JSON_THROW_ON_ERROR
        );

        if ($response->status !== 'OK') {
            throw new RuntimeException('Place details not found for place_id '.$place->place_id);
        }

        return new GooglePlaceDetails(
            $response->result->formatted_address, (string)$response->result->geometry->location->lat, (string)$response->result->geometry->location->lng, $response->result->url
        );
    }
}
