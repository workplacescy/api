<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use OpenApi\Attributes as OA;

#[OA\Schema(required: ['id', 'name', 'description', 'type', 'city', 'placeId', 'address', 'position', 'url', 'sockets', 'noise', 'size', 'busyness', 'view', 'cuisine', 'vRate'], properties: [
    new OA\Property(property: 'id', type: 'integer'),
    new OA\Property(property: 'name', type: 'string'),
    new OA\Property(property: 'description', type: 'string', nullable: true),
    new OA\Property(property: 'type', type: 'string'),
    new OA\Property(property: 'city', type: 'string'),
    new OA\Property(property: 'placeId', type: 'string', nullable: true),
    new OA\Property(property: 'address', type: 'string', nullable: true),
    new OA\Property(property: 'position', required: ['lat', 'lng'], properties: [
        new OA\Property(property: 'lat', type: 'float', nullable: true),
        new OA\Property(property: 'lng', type: 'float', nullable: true),
    ], type: 'object'),
    new OA\Property(property: 'url', type: 'string', nullable: true),
    new OA\Property(property: 'sockets', type: 'string'),
    new OA\Property(property: 'noise', type: 'string'),
    new OA\Property(property: 'size', type: 'string'),
    new OA\Property(property: 'busyness', type: 'string'),
    new OA\Property(property: 'view', type: 'string'),
    new OA\Property(property: 'cuisine', type: 'string'),
    new OA\Property(property: 'vRate', type: 'float', nullable: true),
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
            'noise' => $this->noise,
            'size' => $this->size,
            'busyness' => $this->busyness,
            'view' => $this->view,
            'cuisine' => $this->cuisine,
            'vRate' => $this->v_rate,
        ];
    }
}
