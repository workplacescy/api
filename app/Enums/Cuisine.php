<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum Cuisine: string implements PropertyEnum
{
    use EnumValues;

    case Coffee = 'Coffee & snacks';
    case Full = 'Full';

    public const WEIGHT = 1;


    public static function default(): self
    {
        return self::Coffee;
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::Coffee => 1,
            self::Full => 5,
        };
    }
}
