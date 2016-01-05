<?php namespace SelrahcD\FizzBuzz;

interface Sayer
{
    public function canHandle($value);

    public function say($value);
}