<?php

class FizzBuzz
{
    public function step(int $n): string
    {
        if ($n % 30 === 0) {
            return 'BuzzFizz';
        }
        if ($n % 15 === 0) {
            return 'FizzBuzz';
        }
        if ($n % 3 === 0) {
            return 'Fizz';
        }
        if ($n % 5 === 0) {
            return 'Buzz';
        }
        return (string)$n;
    }
}
