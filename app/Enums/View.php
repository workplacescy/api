<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;

use function array_map;

enum View: string implements PropertyEnum
{
    case Garden = 'Garden';
    case Sea = 'Sea';
    case Street = 'Street';

    public const WEIGHT = 1;


    /** @return string[] */
    public static function values(): array
    {
        return array_map(static fn(self $case): string => $case->value, self::cases());
    }


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
