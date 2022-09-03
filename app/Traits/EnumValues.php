<?php

declare(strict_types=1);

namespace App\Traits;

use function array_map;

trait EnumValues
{
    /** @return string[] */
    public static function values(): array
    {
        return array_map(static fn(self $case): string => $case->value, self::cases());
    }

}
