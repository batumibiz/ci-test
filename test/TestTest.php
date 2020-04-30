<?php

use Test\Test;
use PHPUnit\Framework\TestCase;

class TestTest extends TestCase
{
    public function testFoo ()
    {
        $instance = new Test();
        $this->assertIsString($instance->foo());
    }
}
