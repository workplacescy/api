<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum Busyness: string implements PropertyEnum
{
    use EnumValues;

    case Low = 'Low';
    case Average = 'Average';
    case High = 'High';

    public const WEIGHT = 2;


    public static function default(): self
    {
        return self::Average;
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::High => 1,
            self::Average => 3,
            self::Low => 5,
        };
    }
}
