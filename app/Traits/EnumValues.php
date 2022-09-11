<?php

declare(strict_types=1);

namespace App\Traits;

use function array_map;

trait EnumValues
{
    public static function defaultValue(): string
    {
        return self::default()->value;
    }


    /** @return string[] */
    public static function values(): array
    {
        return array_map(static fn(self $case): string => $case->value, self::cases());
    }


    /** @return string[] */
    public static function valuesLabels(): array
    {
        return array_map(static fn(self $case): array => ['label' => $case->value, 'value' => $case->value], self::cases());
    }
}
