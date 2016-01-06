<?php

use SelrahcD\FizzBuzz\DivisibleSayer;
use SelrahcD\FizzBuzz\FizzBuzz;
use SelrahcD\FizzBuzz\IdentitySayer;

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var FizzBuzz
     */
    private $fizzBuzz;

    protected function setUp()
    {
        $this->fizzBuzz = new FizzBuzz([
            new DivisibleSayer(3, 'Fizz'),
            new DivisibleSayer(5, 'Buzz'),
            new DivisibleSayer(7, 'Bang'),
            new IdentitySayer
        ]);
    }

    /**
     * @test
     */
    public function it_says_the_number()
    {
        $this->assertEquals(1, $this->fizzBuzz->say(1));
        $this->assertEquals(2, $this->fizzBuzz->say(2));
    }

    /**
     * @test
     */
    public function it_says_Fizz_when_a_number_is_a_multiple_of_3()
    {
        $this->assertEquals('Fizz', $this->fizzBuzz->say(3));
        $this->assertEquals('Fizz', $this->fizzBuzz->say(6));
    }

    /**
     * @test
     */
    public function it_says_buzz_when_a_number_is_a_multiple_of_5()
    {
        $this->assertEquals('Buzz', $this->fizzBuzz->say(5));
        $this->assertEquals('Buzz', $this->fizzBuzz->say(10));
    }

    /**
     * @test
     */
    public function it_says_FizzBuzz_when_a_number_is_a_multiple_of_3_and_5()
    {
        $this->assertEquals('FizzBuzz', $this->fizzBuzz->say(3 * 5));
    }

    /**
     * @test
     */
    public function it_says_Bang_when_a_number_is_a_multiple_of_7()
    {
        $this->assertEquals('Bang', $this->fizzBuzz->say(7));
        $this->assertEquals('Bang', $this->fizzBuzz->say(14));
    }

    /**
     * @test
     */
    public function it_says_FizzBang_when_a_number_is_a_multiple_of_3_and_7()
    {
        $this->assertEquals('FizzBang', $this->fizzBuzz->say(3 * 7));
    }

    /**
     * @test
     */
    public function it_says_BuzzBang_when_a_number_is_a_multiple_of_5_and_7()
    {
        $this->assertEquals('BuzzBang', $this->fizzBuzz->say(5 * 7));
    }

    /**
     * @test
     */
    public function it_says_FizzBuzzBang_when_a_number_is_a_multiple_of_3_5_and_7()
    {
        $this->assertEquals('FizzBuzzBang' ,$this->fizzBuzz->say(3 * 5 * 7));
    }
}
