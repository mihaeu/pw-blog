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

    public function testRendersAnArticle()
    {
        $article1 = new Article('Test Headline!', 'Bla ....');
        $article1->addTag(new Tag("Tag1"));
        $article1->addTag(new Tag("Tag2"));

        $blog = new Blog('My blog');
        $owner = new User('owner@blog.de', true);

        $blog->publishArticleFromUser($article1, $owner);

        $this->blogRenderer->render($blog);

        $expected = "Test Headline!\nTag1, Tag2\nBla ....\n";
        $this->assertEquals($expected, $this->mockConsole->output);
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