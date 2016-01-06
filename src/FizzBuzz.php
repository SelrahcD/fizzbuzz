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
        $result = '';

        /**
         * @var Sayer $sayer
         */
        foreach($this->sayers as $sayer)
        {
            $result .= $sayer->say($value, $result);
        }

        return $result;
    }
}