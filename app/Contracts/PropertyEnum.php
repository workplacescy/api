<?php

declare(strict_types=1);

namespace App\Contracts;

interface PropertyEnum
{
    public static function default(): self;


    /** @return array<string> */
    public static function values(): array;


    /** @return array<string> */
    public static function casesValues(): array;


    /** Value from 1 to 5 */
    public function coefficient(): int;
}
