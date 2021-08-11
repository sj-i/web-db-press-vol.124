<?php

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase {
    // テストケースは「test〜」から始まるメソッド
    public function testStep() {
        $fizz_buzz = new FizzBuzz();
        var_dump($fizz_buzz->step(1));
        var_dump($fizz_buzz->step(3));
        var_dump($fizz_buzz->step(5));
        var_dump($fizz_buzz->step(15));
    }
}
