<?php

namespace SelrahcD\FizzBuzz;

final class IdentitySayer implements Sayer
{
    public function canHandle($value)
    {
        return true;
    }

    public function say($value)
    {
        return $value;
    }
}