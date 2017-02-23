<?php


namespace FizzBuzz;


class FizzBuzzStringCollection implements \Iterator, \Countable
{

	public    $strings = [];
	protected $index;

	public function next()
	{
		$this->index++;
	}

	public function current()
	{
		return $this->strings[$this->index];
	}

	public function key()
	{
		return $this->index;
	}

	public function valid()
	{
		return isset($this->strings[$this->key()]);
	}

	public function rewind()
	{
		$this->index = 0;
	}

	public function addItem(FizzBuzzString $fizzBuzz)
	{
		$this->strings[] = $fizzBuzz;
	}

	public function count()
	{
		return count($this->strings);
	}
}