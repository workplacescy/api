<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum Size: string implements PropertyEnum
{
    use EnumValues;

    case Average = 'Average';
    case Big = 'Big';
    case Small = 'Small';

    public const WEIGHT = 2;


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::Small => 1,
            self::Average => 3,
            self::Big => 5,
        };
    }
}
