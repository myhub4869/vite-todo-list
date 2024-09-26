<?php

namespace App\Enums;

enum TodoStatus: int
{
    case NOT_COMPLATED  = 0;
    case COMPLATED      = 1;

    public function inversion()
    {
        return match($this) {
            self::COMPLATED     => self::NOT_COMPLATED,
            self::NOT_COMPLATED => self::COMPLATED,
        };
    }
}
