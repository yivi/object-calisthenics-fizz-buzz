<?php

namespace FizzBuzz\tests;


use FizzBuzz\FizzBuzzNumberCollection;
use PHPUnit\Framework\TestCase;


class FizzBuzzNumberCollectionTest extends TestCase
{

	public function testConstruction()
	{
		$fizzNumberCollection = new FizzBuzzNumberCollection(40, 20);

		$this->assertEquals(count($fizzNumberCollection), 21);
	}
}
