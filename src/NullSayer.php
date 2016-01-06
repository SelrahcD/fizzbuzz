<?php

namespace SelrahcD\FizzBuzz;

final class NullSayer implements Sayer
{
    public function say($value)
    {
        return '';
    }
}