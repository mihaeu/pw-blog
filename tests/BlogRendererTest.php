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

        $owner = new User('owner@blog.de');
        $blog = new Blog('My Blog', $owner);

        $blog->publishArticleFromUser($article1, $owner);

        $this->blogRenderer->render($blog);

        $expected =
            'My Blog'.PHP_EOL
            .PHP_EOL
            .'Test Headline!'.PHP_EOL
            .'Tag1, Tag2'.PHP_EOL
            .'Bla ....'.PHP_EOL;
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