<?php

declare(strict_types=1);

namespace App\Contracts;

interface PropertyEnum
{
    /** @return string[] */
    public static function values(): array;


    /** Value from 1 to 5 */
    public function coefficient(): int;
}
