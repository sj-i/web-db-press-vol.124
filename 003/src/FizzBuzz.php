<?php

class FizzBuzz
{
    public function step(int $n): string
    {
        if ($n % 15 === 0) {
            return 'FizzBuzz';
        }
        if ($n % 3 === 0) {
            return 'Fuzz'; // 本来はFizz
        }
        if ($n % 5 === 0) {
            return 'Buzz';
        }
        return (string)$n;
    }
}
