<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use OpenApi\Attributes as OA;

use function array_walk;

#[OA\Schema(required: ['id', 'title', 'description', 'type', 'city', 'placeId', 'address', 'position', 'url', 'sockets', 'noise', 'size', 'busyness', 'view', 'cuisine', 'vRate', 'wifi'], properties: [
    new OA\Property(property: 'id', type: 'integer'),
    new OA\Property(property: 'title', type: 'string'),
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
    new OA\Property(property: 'wifi', required: ['name', 'password'], properties: [
        new OA\Property(property: 'name', type: 'string', nullable: true),
        new OA\Property(property: 'password', type: 'string', nullable: true),
    ], type: 'object'),
], type: 'object')]
final class PlaceResource extends JsonResource
{
    private function removeFields(array $array, array|string|int|float $keys): array
    {
        return Arr::map(
            $array,
            static fn (array $item): array => Arr::map(
                $item,
                static fn (array $fields): array => Arr::except(
                    $fields,
                    $keys
                )
            )
        );
    }


    private function replaceFields(array $array, array $replacements): array
    {
        return Arr::map(
            $array,
            static function (array $item) use ($replacements): array {
                array_walk($replacements, static function (string|int|float $value, string $key) use (&$item): void {
                    Arr::set($item, $key, $value);
                });

                return $item;
            }
        );
    }


    /**
     * @inheritDoc
     * @param Request $request
     * @return array{id: int, type: string, properties: array{title: string, description: string, placeId: string}, geometry: array{type: string, coordinates: array{float}}}
     */
    public function toArray($request): array
    {
        $photos = $this->imagesAsArraysWithCrops('photos', ['thumb' => config('twill.imgix.thumb_params')]);
        $photos = $this->removeFields($photos, ['video']);
        $photos = $this->replaceFields($photos, ['thumb.width' => config('twill.imgix.thumb_params.w'), 'thumb.height' => config('twill.imgix.thumb_params.h')]);

        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'type' => $this->type,
            'city' => $this->city,
            'placeId' => $this->place_id,
            'address' => $this->address,
            'position' => [
                'lat' => (float) $this->latitude,
                'lng' => (float) $this->longitude,
            ],
            'url' => $this->url,
            'sockets' => $this->sockets,
            'noise' => $this->noise,
            'size' => $this->size,
            'busyness' => $this->busyness,
            'view' => $this->view,
            'cuisine' => $this->cuisine,
            'vRate' => $this->v_rate,
            'wifi' => [
                'name' => $this->wifi_name,
                'password' => $this->wifi_password,
            ],
            'photos' => $photos,
        ];
    }
}
