<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;

use function array_map;

enum Busyness: string implements PropertyEnum
{
    case Average = 'Average';
    case High = 'High';
    case Low = 'Low';

    public const WEIGHT = 2;


    /** @return string[] */
    public static function values(): array
    {
        return array_map(static fn(self $case): string => $case->value, self::cases());
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::Low => 5,
            self::Average => 3,
            self::High => 1,
        };
    }
}
