<?php

namespace SelrahcD\FizzBuzz;

final class IdentitySayer implements Sayer
{
    public function __construct(Sayer $successor)
    {
        $this->successor = $successor;
    }

    public function say($value)
    {
        $currentSay = $this->successor->say($value);

        return $currentSay === '' ? $value : $currentSay;
    }
}