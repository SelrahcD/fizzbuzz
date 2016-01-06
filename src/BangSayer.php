<?php

namespace SelrahcD\FizzBuzz;

final class BangSayer implements Sayer
{
    public function say($value, $currentSay)
    {
        return $value % 7 === 0 ? 'Bang' : '';
    }
}