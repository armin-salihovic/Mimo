<?php

namespace App\Enums;

enum ArtStatus: int
{
    case AVAILABLE = 1;
    case NOT_AVAILABLE = 2;
    case SOLD = 3;

    public static function fromName(string $name): int
    {
        foreach (self::cases() as $status) {
            if($name === $status->name){
                return $status->value;
            }
        }
        throw new \ValueError("$name is not a valid backing value for enum " . self::class );
    }
}
