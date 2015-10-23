<?php

namespace Mihaeu\Blog;

class BlogRendererTest extends \PHPUnit_Framework_TestCase
{
    public function testRendersAllBlogArticles()
    {
        $article1 = new Article('Lorem Ipsum', 'Bla ....', 'stuff,text');
        $article2 = new Article('Lorem Ipsum2', 'Bla2 ....', 'stuff,text');
        $article3 = new Article('Lorem Ipsum3', 'Bla3 ....', 'stuff,text');

        $console = new MockConsole();
        $blogRenderer = new BlogRenderer($console);
        $blog = new Blog('My blog', [$article1, $article2, $article3]);
        $blogRenderer->render($blog);

        $this->assertEquals("Lorem Ipsum\nLorem Ipsum2\nLorem Ipsum3\n", $console->output);
    }
}

class MockConsole extends Console
{
    public $output = '';

    public function printLine(\string $line)
    {
        $this->output .= $line . PHP_EOL;
    }
}