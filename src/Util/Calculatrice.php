<?php

namespace App\Util;


use InvalidArgumentException;

class Calculatrice
{
    public function carre($number)
    {
        if(!is_int($number)) {
            throw new InvalidArgumentException('Le paramètre $number doit être un entier');
        }

        return $number*$number;
    }
}