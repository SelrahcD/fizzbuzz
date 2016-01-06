<?php
namespace SelrahcD\FizzBuzz;

final class FizzBuzz
{
    private $sayers;

    /**
     * FizzBuzz constructor.
     * @param array $sayers
     */
    public function __construct(array $sayers = array())
    {
        $this->sayers = $sayers;
    }

    public function say($value)
    {
        return array_reduce($this->sayers, function($carry, $sayer) use($value){
            return $carry . $sayer->say($value, $carry);
        }, '');
    }
}