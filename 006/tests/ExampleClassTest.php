<?php

use PHPUnit\Framework\TestCase;

class ExampleClassTest extends TestCase
{
    public function testAdd()
    {
        $instance = new ExampleClass();
        $this->assertTrue(is_int($instance->add(1, 3)));
    }
}
