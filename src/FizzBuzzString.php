<?php

namespace FizzBuzz;

class FizzBuzzString
{
	protected $fizz;

	public function __construct(string $value)
	{
		$this->fizz = $value;
	}

	public function value()
	{
		return $this->fizz;
	}

}
