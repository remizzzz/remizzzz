<?php

use PHPUnit\Framework\TestCase;
use Remizov\MyLog;

class MyLogTest extends TestCase
{

    function testLogFileContent() {
        $expectedString = "TEST SOME BULLSHIT";
        $logTime = time();
        $logFileDir = __DIR__ . "/logs/$logTime.log";

        MyLog::log($expectedString);
        MyLog::write();

        $logFileContent = file_get_contents($logFileDir);

        $this->assertEquals($expectedString, $logFileContent);
        $this->expectOutputString($expectedString);
    }

    function testCheckLogFileExist() {
        MyLog::log(__DIR__);

        $logsCounter = 0;

        foreach (glob(__DIR__ . "/logs/*.log") as $filename) {
            $logsCounter += 1;
        }

        MyLog::log($logsCounter);

        MyLog::write();

        foreach (glob(__DIR__ . "/logs/*.log") as $filename) {
            $logsCounter -= 1;
        }

        $this->assertEquals(0, $logsCounter);
    }
	
}