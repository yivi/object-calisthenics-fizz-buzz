<?php

require __DIR__ . '/vendor/autoload.php';

$control = new \FizzBuzz\Controller();

$fizzbuzzes = $control->fizzBuzzAction(100);

var_dump($fizzbuzzes);