<?php

namespace SelrahcD\FizzBuzz;

final class BuzzSayer implements Sayer
{
    public function say($value, $currentSay)
    {
        return $value % 5 === 0 ? 'Buzz' : '';
    }
}