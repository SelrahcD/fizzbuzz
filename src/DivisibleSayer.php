<?php


namespace SelrahcD\FizzBuzz;


final class DivisibleSayer implements Sayer
{

    private $toSay;
    private $divisor;

    /**
     * DivisibleSayer constructor.
     * @param $divisor
     * @param $toSay
     */
    public function __construct($divisor, $toSay)
    {
        $this->divisor = $divisor;
        $this->toSay = $toSay;
    }

    public function say($value)
    {
        return $value % $this->divisor === 0 ? $this->toSay : '';
    }
}