<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Location;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use OpenApi\Attributes as OA;

#[OA\Parameter(name: 'busyness', in: 'query', schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'city', in: 'query', schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'location', in: 'query', schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'size', in: 'query', schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'sockets', in: 'query', schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'type', in: 'query', schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'view', in: 'query', schema: new OA\Schema(type: 'string'))]
#[OA\Parameter(name: 'vRate', in: 'query', schema: new OA\Schema(type: 'integer'))]
final class IndexRequest extends FormRequest
{
    /** @return array{busyness: string, city: string, location: string, size: string, sockets: string, type: string, view: string} */
    public function rules(): array
    {
        return [
            'busyness' => ['sometimes', 'required', new Enum(Busyness::class)],
            'city' => ['sometimes', 'required', new Enum(City::class)],
            'location' => ['sometimes', 'required', new Enum(Location::class)],
            'size' => ['sometimes', 'required', new Enum(Size::class)],
            'sockets' => ['sometimes', 'required', new Enum(Sockets::class)],
            'type' => ['sometimes', 'required', new Enum(Type::class)],
            'view' => ['sometimes', 'required', new Enum(View::class)],
            'vRate' => ['sometimes', 'required', 'integer', 'numeric', 'between:0,255'],
        ];
    }
}
