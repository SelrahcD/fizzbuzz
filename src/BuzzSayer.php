<?php

namespace SelrahcD\FizzBuzz;

final class BuzzSayer implements Sayer
{
    public function canHandle($value)
    {
        return $value % 5 === 0;
    }

    public function say($value)
    {
        return 'Buzz';
    }
}