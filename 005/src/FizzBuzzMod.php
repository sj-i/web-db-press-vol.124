<?php

class ResultWriter {
    public function write(string $content): void {
        sendToExternalSystem($content);
    }
}

class RangeProvider {
    public function __construct(
        private int $current = 0,
        private int $span = 100,
    ) {
    }

    public function getNext(): array {
        return range(
            $this->current,
            ($this->current += $this->span) - 1
        );
    }
}

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

class FizzBuzzMod {
    public function __construct(
        private ResultWriter $result_writer,
        private RangeProvider $range_provider,
        private FizzBuzz $fizz_buzz,
    ) {
    }

    // 利用コード側でもともとのnewの代わりに使える
    public static function createDefault(): self {
        return new self(
            new ResultWriter(),
            new RangeProvider(0, 100),
            new FizzBuzz(),
        );
    }

    public function run(): void {
        $range = $this->range_provider->getNext();
        foreach ($range as $n) {
            $this->result_writer(
                $this->fizz_buzz->step($n)
            );
        }
    }
}
