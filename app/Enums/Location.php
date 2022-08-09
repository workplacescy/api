<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;

use function array_map;

enum Location: string implements PropertyEnum
{
    case Convenient = 'Convenient';
    case Unhandy = 'Unhandy';

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
            self::Convenient => 5,
            self::Unhandy => 1,
        };
    }
}
