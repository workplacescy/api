<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\PlaceResource;
use App\Models\Place;
use OpenApi\Attributes as OA;

/** Get random place */
#[OA\Get(path: '/random', responses: [
    new OA\Response(ref: '#/components/responses/PlaceResourceResponse', response: 200),
    new OA\Response(ref: '#/components/responses/BadRequestError', response: 400),
    new OA\Response(ref: '#/components/responses/NotFoundError', response: 404),
    new OA\Response(ref: '#/components/responses/ServerError', response: 500),
])]
final class RandomController extends Controller
{
    public function __invoke(): PlaceResource
    {
        return new PlaceResource(Place::inRandomOrder()->first());
    }
}
