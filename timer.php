<?php
use SelrahcD\FizzBuzz\BangSayer;
use SelrahcD\FizzBuzz\BuzzSayer;
use SelrahcD\FizzBuzz\FizzBuzz;
use SelrahcD\FizzBuzz\FizzSayer;
use SelrahcD\FizzBuzz\IdentitySayer;

require './vendor/autoload.php';

$fizzBuzz = new FizzBuzz([
    new FizzSayer,
    new BuzzSayer,
    new BangSayer
], new IdentitySayer);

$start = microtime(true);

for($i = 0; $i < 10000; $i++)
{
    for($j = 0; $j < 100; $j++)
    {
        $fizzBuzz->say($j);
    }
}


echo microtime(true) - $start;