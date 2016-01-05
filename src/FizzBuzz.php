<?php
namespace SelrahcD\FizzBuzz;

final class FizzBuzz
{
    private $sayers;
    private $defaultSayer;

    /**
     * FizzBuzz constructor.
     * @param array $sayers
     * @param Sayer $defaultSayer
     */
    public function __construct(array $sayers = array(), Sayer $defaultSayer)
    {
        $this->sayers = $sayers;
        $this->defaultSayer = $defaultSayer;
    }

    public function say($value)
    {
        $result = '';

        /**
         * @var Sayer $sayer
         */
        foreach($this->sayers as $sayer)
        {
            if($sayer->canHandle($value))
            {
                $result .= $sayer->say($value);
            }
        }

        if($result === '')
        {
            return $this->defaultSayer->say($value);
        }

        return $result;
    }
}