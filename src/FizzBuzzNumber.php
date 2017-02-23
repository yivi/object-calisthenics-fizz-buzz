<?php

namespace FizzBuzz;

class FizzBuzzNumber
{
	protected $number;

	public function __construct($number)
	{
		$this->number = $number;
	}

	public function fizzbuzz(): string
	{
		if ($this->isFizzBuzz()) {
			return "FizzBuzz";
		}

		if ($this->isFizz()) {
			return "Fizz";
		}

		if ($this->isBuzz()) {
			return "Buzz";
		}

		return (string) $this->number;
	}

	private function isFizz()
	{
		return $this->number % 3 === 0;
	}

	private function isBuzz()
	{
		return $this->number % 5 === 0;
	}

	private function isFizzBuzz()
	{
		return $this->number % 15 === 0;
	}


}