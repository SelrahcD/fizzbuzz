<?php
namespace SelrahcD\FizzBuzz;

final class FizzBuzz
{
    /**
     * @var Sayer
     */
    private $sayer;

    /**
     * FizzBuzz constructor.
     * @param Sayer $sayer
     */
    public function __construct(Sayer $sayer)
    {
        $this->sayer = $sayer;
    }

    public function say($value)
    {
        return $this->sayer->say($value, '');
    }
}