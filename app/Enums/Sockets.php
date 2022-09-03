<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum Sockets: string implements PropertyEnum
{
    use EnumValues;

    case None = 'None';
    case Few = 'Few';
    case Many = 'Many';

    public const WEIGHT = 3;


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::None => 1,
            self::Few => 3,
            self::Many => 5,
        };
    }
}
