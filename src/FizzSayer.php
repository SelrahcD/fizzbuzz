<?php

namespace SelrahcD\FizzBuzz;

final class FizzSayer implements Sayer
{
    public function say($value, $currentSay)
    {
        return $value % 3 === 0 ? 'Fizz' : '';
    }
}