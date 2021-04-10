<?php

use PHPUnit\Framework\TestCase;
use Remizov\MyLog;

class MyLogTest extends TestCase
{

    public function testLog() {
        $this->expectOutputString("text\n");
        MyLog::log("text");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
	
}