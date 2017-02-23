<?php

namespace FizzBuzz;


class FizzBuzzNumberCollection implements \Iterator, \Countable
{
	protected $numbers;

	protected $index;

	public function __construct(int $max = 100, int $min = 0)
	{
		$this->initialize($max, $min);
		$this->index = 0;
	}

	public function addNumber(FizzBuzzNumber $fizzBuzzNumber)
	{
		$this->numbers[] = $fizzBuzzNumber;
	}

	protected function initialize(int $max, int $min)
	{
		$this->numbers = [];
		for ($number = $min; $number <= $max; $number++) {
			$this->numbers[] = new FizzBuzzNumber($number);
		}
	}

	public function next()
	{
		$this->index++;
	}

	public function current(): FizzBuzzNumber
	{
		return $this->numbers[$this->index];
	}

	public function key()
	{
		return $this->index;
	}

	public function valid(): bool
	{
		return isset($this->numbers[$this->key()]);
	}

	public function rewind()
	{
		$this->index = 0;
	}

	public function count()
	{
		return count($this->numbers);
	}
}