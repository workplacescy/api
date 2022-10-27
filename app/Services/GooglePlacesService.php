<?php

declare(strict_types=1);

namespace App\Services;

use App\Dto\GooglePlaceDetails;
use App\Models\Place;
use GoogleMaps\GoogleMaps;
use RuntimeException;
use stdClass;

use function json_decode;
use function print_r;

use const JSON_THROW_ON_ERROR;

final class GooglePlacesService
{
    public function __construct(private readonly GoogleMaps $googleMaps)
    {
    }


    public function __invoke(Place $place): GooglePlaceDetails
    {
        $commonDetails = $this->getCommonDetails($place);
        $placeDetails = $this->getPlaceDetails($commonDetails->place_id);

        return new GooglePlaceDetails(
            $placeDetails->formatted_address,
            (string)$commonDetails->geometry->location->lat,
            (string)$commonDetails->geometry->location->lng,
            $commonDetails->place_id,
            $placeDetails->url,
        );
    }


    private function getCommonDetails(Place $place): stdClass
    {
        $query = "{$place->title},{$place->city->value},Cyprus";
        $response = json_decode($this->googleMaps->load('textsearch')->setParam(['query' => $query])->get(), false, 512, JSON_THROW_ON_ERROR);

        if ($response->status !== 'OK') {
            throw new RuntimeException('Common details not found for query '.$query.\PHP_EOL.'Response: '.print_r($response, true));
        }

        return $response->results[0];
    }


    private function getPlaceDetails(string $place_id): stdClass
    {
        $response = json_decode(
            $this->googleMaps->load('placedetails')->setParam([
                'placeid' => $place_id,
                'fields' => 'formatted_address,url',
            ])->get(),
            false,
            512,
            JSON_THROW_ON_ERROR
        );

        if ($response->status !== 'OK') {
            throw new RuntimeException('Place details not found for place_id '.$place_id->place_id);
        }

        return $response->result;
    }
}
