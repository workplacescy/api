<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;

use function array_map;

enum Type: string implements PropertyEnum
{
    case Cafe = 'Cafe';
    case Coworking = 'Coworking';

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
