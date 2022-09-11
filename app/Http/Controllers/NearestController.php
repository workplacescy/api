<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\NearestRequest;
use App\Http\Resources\PlaceResource;
use App\Models\Place;
use OpenApi\Attributes as OA;

/** Lookup nearest place */
#[OA\Get(path: '/nearest', parameters: [
    new OA\Parameter(ref: '#/components/parameters/latitude'),
    new OA\Parameter(ref: '#/components/parameters/longitude'),
], responses: [
    new OA\Response(ref: '#/components/responses/PlaceResourceResponse', response: 200),
    new OA\Response(ref: '#/components/responses/BadRequestError', response: 400),
    new OA\Response(ref: '#/components/responses/NotFoundError', response: 404),
    new OA\Response(ref: '#/components/responses/ServerError', response: 500),
])]
final class NearestController extends Controller
{
    public function __invoke(NearestRequest $request): PlaceResource
    {
        $validated = $request->safe(['latitude', 'longitude']);
        [$latitude, $longitude] = [$validated['latitude'], $validated['longitude']];

        return new PlaceResource(Place::published()->orderByRaw('(latitude - ?) * (latitude - ?) + (longitude - ?) * (longitude - ?)', [$latitude, $latitude, $longitude, $longitude])->first());
    }
}
