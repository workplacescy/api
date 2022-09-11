<?php

declare(strict_types=1);

namespace App\Contracts;

interface PropertyEnum
{
    public static function default(): self;


    /** @return string[] */
    public static function values(): array;


    /** Value from 1 to 5 */
    public function coefficient(): int;
}
