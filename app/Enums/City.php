<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum City: string implements PropertyEnum
{
    use EnumValues;

    case AyiaNapa = 'Ayia Napa';
    case Larnaca = 'Larnaca';
    case Limassol = 'Limassol';
    case Nicosia = 'Nicosia';
    case Paphos = 'Paphos';
    case Protaras = 'Protaras';

    public const WEIGHT = 1;


    /** @inheritDoc */
    public function coefficient(): int
    {
        return 5;
    }
}
