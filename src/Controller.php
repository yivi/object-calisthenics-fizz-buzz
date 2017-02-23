<?php

namespace FizzBuzz;

class Controller
{
	public function fizzBuzzAction(int $max = 100, int $min = 0): FizzBuzzStringCollection
	{
		$numbers = new FizzBuzzNumberCollection($max, $min);
		$fizzes  = new FizzBuzzStringCollection();

		/** @var FizzBuzzNumber $number */
		foreach ($numbers as $number) {
			$fizzbuzz = new FizzBuzzString($number->fizzbuzz());
			$fizzes->addItem($fizzbuzz);
		}

		return $fizzes;
	}
}