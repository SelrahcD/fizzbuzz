<?php

namespace SelrahcD\FizzBuzz;

final class IdentitySayer implements Sayer
{
    public function say($value)
    {
        return $value;
    }
}