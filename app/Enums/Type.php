<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum Type: string implements PropertyEnum
{
    use EnumValues;

    case Cafe = 'Cafe';
    case Coworking = 'Coworking';

    public const WEIGHT = 1;


    public static function default(): self
    {
        return self::Cafe;
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return 5;
    }
}
