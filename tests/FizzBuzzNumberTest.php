<?php

namespace FizzBuzz\Tests;

use FizzBuzz\FizzBuzzNumber;
use PHPUnit\Framework\TestCase;

class FizzBuzzNumberTest extends TestCase
{
   public function testFizz() {

   	    $fizz = new FizzBuzzNumber(3);

   	    $this->assertEquals($fizz->fizzbuzz(), 'Fizz');
   }


	public function testBuzz() {

		$fizz = new FizzBuzzNumber(25);

		$this->assertEquals($fizz->fizzbuzz(), 'Buzz');
	}

	public function testFizzBuzz() {

		$fizz = new FizzBuzzNumber(45);

		$this->assertEquals($fizz->fizzbuzz(), 'FizzBuzz');
	}

}
