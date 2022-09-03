<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum View: string implements PropertyEnum
{
    use EnumValues;

    case Garden = 'Garden';
    case Sea = 'Sea';
    case Street = 'Street';

    public const WEIGHT = 1;


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::Street => 1,
            self::Garden => 3,
            self::Sea => 5,
        };
    }
}
