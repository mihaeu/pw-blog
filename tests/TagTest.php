<?php

namespace Mihaeu\Blog;

class TagTest extends \PHPUnit_Framework_TestCase
{
    public function testReadsTag()
    {
        $tag = new Tag('test');
        $this->assertEquals('test', $tag->name());
    }
}
