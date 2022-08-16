<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use OpenApi\Attributes as OA;

#[OA\Schema(type: 'array', items: new OA\Items(ref: '#/components/schemas/PlaceResource'))]
final class PlaceCollection extends ResourceCollection
{
}
