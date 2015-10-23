<?php

namespace Mihaeu\Blog;

class BlogRendererTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ArticleCollection
     */
    private $articleCollection;

    /**
     * @var BlogRenderer
     */
    private $blogRenderer;

    /**
     * @var MockConsole
     */
    private $mockConsole;

    public function setUp()
    {
        $this->mockConsole = new MockConsole();
        $this->articleCollection = new ArticleCollection();
        $this->blogRenderer = new BlogRenderer($this->mockConsole);
    }

    public function testRendersAllBlogArticles()
    {
        $article1 = new Article('Lorem Ipsum', 'Bla ....', 'stuff,text');
        $article2 = new Article('Lorem Ipsum2', 'Bla2 ....', 'stuff,text');
        $article3 = new Article('Lorem Ipsum3', 'Bla3 ....', 'stuff,text');

        $blog = new Blog('My blog');
        $owner = new User('owner@blog.de', true);

        $blog->publishArticleFromUser($article1, $owner);
        $blog->publishArticleFromUser($article2, $owner);
        $blog->publishArticleFromUser($article3, $owner);

        $this->blogRenderer->render($blog);

        $this->assertEquals("Lorem Ipsum\nLorem Ipsum2\nLorem Ipsum3\n", $this->mockConsole->output);
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