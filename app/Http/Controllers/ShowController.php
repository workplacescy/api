<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\PlaceResource;
use App\Models\Place;
use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\Response;

use function abort_unless;

/** Show place */
#[OA\Get(path: '/{place}', parameters: [
    new OA\Parameter(name: 'place', in: 'path', required: true, allowEmptyValue: false, schema: new OA\Schema(type: 'integer')),
], responses: [
    new OA\Response(ref: '#/components/responses/PlaceResourceResponse', response: 200),
    new OA\Response(ref: '#/components/responses/BadRequestError', response: 400),
    new OA\Response(ref: '#/components/responses/NotFoundError', response: 404),
    new OA\Response(ref: '#/components/responses/ServerError', response: 500),
])]
final class ShowController extends Controller
{
    public function __invoke(Place $place): PlaceResource
    {
        abort_unless($place->published, Response::HTTP_NOT_FOUND);

        return new PlaceResource($place);
    }
}
