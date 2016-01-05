<?php

namespace SelrahcD\FizzBuzz;

final class FizzSayer implements Sayer
{
    public function canHandle($value)
    {
        return $value % 3 === 0;
    }

    public function say($value)
    {
        return 'Fizz';
    }
}