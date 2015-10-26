<?php

namespace Mihaeu\Blog;

class ArticleTest extends \PHPUnit_Framework_TestCase
{
    public function testReadsHeadline()
    {
        $article = new Article('test', 'test');
        $this->assertEquals('test', $article->headline());
    }
}
