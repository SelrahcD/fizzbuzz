<?php

namespace SelrahcD\FizzBuzz;

final class DivisibleSayer implements Sayer
{

    private $toSay;
    private $divisor;
    /**
     * @var Sayer
     */
    private $successor;

    /**
     * DivisibleSayer constructor.
     * @param $divisor
     * @param $toSay
     * @param Sayer $successor
     */
    public function __construct($divisor, $toSay, Sayer $successor)
    {
        $this->divisor = $divisor;
        $this->toSay = $toSay;
        $this->successor = $successor;
    }

    public function say($value)
    {
        return ($value % $this->divisor === 0 ? $this->toSay : '') . $this->successor->say($value);
    }
}