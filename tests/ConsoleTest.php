<?php

namespace Mihaeu\Blog;

class ConsoleTest extends \PHPUnit_Framework_TestCase
{
    public function testWritesToStandardOut()
    {
        $console = new Console();
        ob_start();
        $console->printLine('test');
        $output = ob_get_clean();
        $this->assertEquals('test'.PHP_EOL, $output);
    }
}
