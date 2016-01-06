<?php
use SelrahcD\FizzBuzz\DivisibleSayer;
use SelrahcD\FizzBuzz\FizzBuzz;
use SelrahcD\FizzBuzz\IdentitySayer;
use SelrahcD\FizzBuzz\MemoizeSayer;
use SelrahcD\FizzBuzz\NullSayer;

require './vendor/autoload.php';

$fizzBuzz = new FizzBuzz(
    new MemoizeSayer(
        new IdentitySayer(
            new DivisibleSayer(3, 'Fizz',
                new DivisibleSayer(5, 'Buzz',
                    new DivisibleSayer(7, 'Bang',
                        new NullSayer
                    )
                )
            )
        )
    )
);

$start = microtime(true);

for($i = 0; $i < 10000; $i++)
{
    for($j = 0; $j < 100; $j++)
    {
        $fizzBuzz->say($j);
    }
}


echo microtime(true) - $start;