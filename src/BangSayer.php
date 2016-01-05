<?php

namespace SelrahcD\FizzBuzz;

final class BangSayer implements Sayer
{
    public function canHandle($value)
    {
        return $value % 7 === 0;
    }

    public function say($value)
    {
        return 'Bang';
    }
}