<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum Location: string implements PropertyEnum
{
    use EnumValues;

    case Convenient = 'Convenient';
    case Unhandy = 'Unhandy';

    public const WEIGHT = 2;


    public static function default(): self
    {
        return self::Convenient;
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::Unhandy => 1,
            self::Convenient => 5,
        };
    }
}
