<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Http\Resources\PlaceCollection;
use App\Models\Place;
use OpenApi\Attributes as OA;

/** Search places */
#[OA\Get(path: '/search', parameters: [
    new OA\Parameter(ref: '#/components/parameters/q'),
], responses: [
    new OA\Response(ref: '#/components/responses/PlaceCollectionResponse', response: 200),
    new OA\Response(ref: '#/components/responses/BadRequestError', response: 400),
    new OA\Response(ref: '#/components/responses/NotFoundError', response: 404),
    new OA\Response(ref: '#/components/responses/ServerError', response: 500),
])]
final class SearchController extends Controller
{
    public function __invoke(SearchRequest $request): PlaceCollection
    {
        $q = $request->safe(['q'])['q'];

        return new PlaceCollection(Place::search($q)->get());
    }
}
