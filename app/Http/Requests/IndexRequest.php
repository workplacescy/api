<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Cuisine;
use App\Enums\Noise;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use OpenApi\Attributes as OA;

#[OA\Parameter(name: 'busyness', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'city', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'size', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'sockets', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'noise', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'type', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'view', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'cuisine', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'vRate', in: 'query', allowEmptyValue: false, schema: new OA\Schema(type: 'string', format: 'float', maximum: 0, minimum: 5))]
final class IndexRequest extends FormRequest
{
    /** @return array{busyness: string, city: string, size: string, sockets: string, noise: string, type: string, view: string} */
    public function rules(): array
    {
        return [
            'busyness' => ['sometimes', 'required', new Enum(Busyness::class)],
            'city' => ['sometimes', 'required', new Enum(City::class)],
            'size' => ['sometimes', 'required', new Enum(Size::class)],
            'sockets' => ['sometimes', 'required', new Enum(Sockets::class)],
            'noise' => ['sometimes', 'required', new Enum(Noise::class)],
            'type' => ['sometimes', 'required', new Enum(Type::class)],
            'view' => ['sometimes', 'required', new Enum(View::class)],
            'cuisine' => ['sometimes', 'required', new Enum(Cuisine::class)],
            'vRate' => ['sometimes', 'required', 'float', 'numeric', 'between:0,5'],
        ];
    }
}
