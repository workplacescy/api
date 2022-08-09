<?php

declare(strict_types=1);

namespace App\Enums;

use App\Contracts\PropertyEnum;

use function array_map;

enum Sockets: string implements PropertyEnum
{
    case Few = 'Few';
    case Many = 'Many';

    public const WEIGHT = 3;


    /** @return string[] */
    public static function values(): array
    {
        return array_map(static fn(self $case): string => $case->value, self::cases());
    }


    /** @inheritDoc */
    public function coefficient(): int
    {
        return match ($this) {
            self::Few => 1,
            self::Many => 3,
        };
    }
}
