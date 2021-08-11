<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertSame;

/** @covers FizzBuzz */
class FizzBuzzTest extends TestCase {
    public function testStep() {
        $fizz_buzz = new FizzBuzz();
        assertSame('1', $fizz_buzz->step(1));
        assertSame('Fizz', $fizz_buzz->step(3));
        assertSame('Buzz', $fizz_buzz->step(5));
        assertSame('FizzBuzz', $fizz_buzz->step(15));
    }
}
