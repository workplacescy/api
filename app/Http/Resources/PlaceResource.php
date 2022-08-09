<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

#[OA\Schema(required: ['id', 'type', 'properties'], properties: [
    new OA\Property(property: 'id', type: 'integer'),
    new OA\Property(property: 'type', type: 'string', enum: ['Feature']),
    new OA\Property(property: 'properties', required: ['name', 'description', 'type', 'placeId', 'city', 'sockets', 'size', 'location', 'busyness', 'view', 'rank'], properties: [
        new OA\Property(property: 'name', type: 'string'),
        new OA\Property(property: 'description', type: 'string'),
        new OA\Property(property: 'type', type: 'string'),
        new OA\Property(property: 'placeId', type: 'string'),
        new OA\Property(property: 'city', type: 'string'),
        new OA\Property(property: 'sockets', type: 'string'),
        new OA\Property(property: 'size', type: 'string'),
        new OA\Property(property: 'location', type: 'string'),
        new OA\Property(property: 'busyness', type: 'string'),
        new OA\Property(property: 'view', type: 'string'),
        new OA\Property(property: 'rank', type: 'integer'),
    ], type: 'object'),
    new OA\Property(property: 'geometry', required: ['type', 'coordinates'], properties: [
        new OA\Property(property: 'type', type: 'string', enum: ['Point']),
        new OA\Property(property: 'coordinates', type: 'array', items: new OA\Items(type: 'number', format: 'float')),
    ], type: 'object'),
], type: 'object')]
final class PlaceResource extends JsonResource
{
    /**
     * @inheritDoc
     * @param Request $request
     * @return array{id: int, type: string, properties: array{name: string, description: string, placeId: string}, geometry: array{type: string, coordinates: float[]}}
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'type' => 'Feature',
            'properties' => [
                'name' => $this->name,
                'description' => $this->description,
                'type' => $this->type,
                'placeId' => $this->place_id,
                'city' => $this->city,
                'sockets' => $this->sockets,
                'size' => $this->size,
                'location' => $this->location,
                'busyness' => $this->busyness,
                'view' => $this->view,
                'rank' => $this->rank,
            ],
            'geometry' => [
                'type' => 'Point',
                'coordinates' => [
                    (float)$this->longitude,
                    (float)$this->latitude,
                ],
            ],
        ];
    }
}
