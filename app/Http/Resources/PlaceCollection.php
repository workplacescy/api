<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Collection;
use OpenApi\Attributes as OA;

#[OA\Schema(required: ['type', 'features'], properties: [
    new OA\Property(property: 'type', type: 'string', enum: ['FeatureCollection']),
    new OA\Property(property: 'features', type: 'array', items: new OA\Items(ref: '#/components/schemas/PlaceResource')),
], type: 'object')]
final class PlaceCollection extends ResourceCollection
{
    /**
     * @param Request $request
     * @return array{type: string, features: Collection}
     */
    public function toArray($request): array
    {
        return [
            'type' => 'FeatureCollection',
            'features' => $this->collection,
        ];
    }
}
