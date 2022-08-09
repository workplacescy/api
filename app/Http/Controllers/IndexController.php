<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
use App\Http\Resources\PlaceCollection;
use App\Models\Place;
use OpenApi\Attributes as OA;

/** List places */
#[OA\Get(path: '/', parameters: [
    new OA\Parameter(ref: '#/components/parameters/busyness'),
    new OA\Parameter(ref: '#/components/parameters/city'),
    new OA\Parameter(ref: '#/components/parameters/location'),
    new OA\Parameter(ref: '#/components/parameters/size'),
    new OA\Parameter(ref: '#/components/parameters/sockets'),
    new OA\Parameter(ref: '#/components/parameters/type'),
    new OA\Parameter(ref: '#/components/parameters/view'),
], responses: [
    new OA\Response(ref: '#/components/responses/PlaceCollectionResponse', response: 200),
    new OA\Response(ref: '#/components/responses/BadRequestError', response: 400),
    new OA\Response(ref: '#/components/responses/NotFoundError', response: 404),
    new OA\Response(ref: '#/components/responses/ServerError', response: 500),
])]
final class IndexController extends Controller
{
    public function __invoke(IndexRequest $request): PlaceCollection
    {
        return new PlaceCollection(Place::filter($request->all())->get());
    }
}
