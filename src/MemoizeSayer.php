<?php
namespace SelrahcD\FizzBuzz;

final class MemoizeSayer implements Sayer
{
    private $successor;

    private $cache = [];

    /**
     * MemoizeSayer constructor.
     * @param Sayer $successor
     */
    public function __construct(Sayer $successor)
    {
        $this->successor = $successor;
    }


    public function say($value)
    {
        if(!isset($this->cache[$value]))
        {
            $this->cache[$value] = $this->successor->say($value);
        }

        return $this->cache[$value];
    }
}