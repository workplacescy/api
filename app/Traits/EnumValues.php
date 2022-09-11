<?php

declare(strict_types=1);

namespace App\Traits;

use function array_map;
use function array_reduce;

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
    public static function casesValues(): array
    {
        return array_reduce(self::cases(), static fn(mixed $carry, self $case): array => $carry + [$case->value => $case->value], []);
    }


    /** @return string[] */
    public static function valuesLabels(): array
    {
        return array_map(static fn(self $case): array => ['label' => $case->value, 'value' => $case->value], self::cases());
    }
}
