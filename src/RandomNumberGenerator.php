<?php declare(strict_types=1);

class RandomNumberGenerator
{
    public static function generate(): int
    {
        return rand(1, 10);
    }
}
