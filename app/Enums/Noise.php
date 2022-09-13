<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;
use App\Traits\EnumValues;

enum Noise: string implements PropertyEnum
{
    use EnumValues;

    case Quite = 'Quite';
    case Medium = 'Medium';
    case Noisy = 'Noisy';

    public const WEIGHT = 2;


    public static function default(): self
    {
        return self::Medium;
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::Noisy => 1,
            self::Medium => 3,
            self::Quite => 5,
        };
    }
}
