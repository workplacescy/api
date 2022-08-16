<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

#[OA\Schema(required: ['id', 'name', 'description', 'type', 'city', 'placeId', 'address', 'position', 'url', 'sockets', 'size', 'location', 'busyness', 'view', 'rank'], properties: [
    new OA\Property(property: 'id', type: 'integer'),
    new OA\Property(property: 'name', type: 'string'),
    new OA\Property(property: 'description', type: 'string'),
    new OA\Property(property: 'type', type: 'string'),
    new OA\Property(property: 'city', type: 'string'),
    new OA\Property(property: 'placeId', type: 'string'),
    new OA\Property(property: 'address', type: 'string'),
    new OA\Property(property: 'position', required: ['lat', 'lng'], properties: [
        new OA\Property(property: 'lat', type: 'number', format: 'float'),
        new OA\Property(property: 'lng', type: 'number', format: 'float'),
    ], type: 'object'),
    new OA\Property(property: 'url', type: 'string'),
    new OA\Property(property: 'sockets', type: 'string'),
    new OA\Property(property: 'size', type: 'string'),
    new OA\Property(property: 'location', type: 'string'),
    new OA\Property(property: 'busyness', type: 'string'),
    new OA\Property(property: 'view', type: 'string'),
    new OA\Property(property: 'rank', type: 'integer'),
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
            'name' => $this->name,
            'description' => $this->description,
            'type' => $this->type,
            'city' => $this->city,
            'placeId' => $this->place_id,
            'address' => $this->address,
            'position' => [
                'lat' => (float)$this->latitude,
                'lng' => (float)$this->longitude,
            ],
            'url' => $this->url,
            'sockets' => $this->sockets,
            'size' => $this->size,
            'location' => $this->location,
            'busyness' => $this->busyness,
            'view' => $this->view,
            'rank' => $this->rank,
        ];
    }
}
