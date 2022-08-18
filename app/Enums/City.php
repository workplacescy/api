<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;

use function array_map;

enum City: string implements PropertyEnum
{
    case AyiaNapa = 'Ayia Napa';
    case Larnaca = 'Larnaca';
    case Limassol = 'Limassol';
    case Nicosia = 'Nicosia';
    case Paphos = 'Paphos';

    public const WEIGHT = 1;


    /** @return string[] */
    public static function values(): array
    {
        return array_map(static fn(self $case): string => $case->value, self::cases());
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return 5;
    }
}
