<?php

use PHPUnit\Framework\TestCase;

/** @covers FizzBuzzMod */
class FizzBuzzModTest extends TestCase {
    public function testRun() {
        // ResultWriterのモックを生成
        $result_writer = $this->createMock(
            ResultWriter::class
        );
        // writeが一度だけ引数'0'で呼ばれるのを期待
        // アサーションとして扱われる
        $result_writer
            ->expects($this->once())
            ->method('write')
            ->with('0')
        ;

        $runner = new FizzBuzzMod(
            $result_writer,
            new RangeProvider(0, 1),
            new FizzBuzz()
        );

        $runner->run();
    }
}

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
