<?php

namespace Mihaeu\Blog;

class ArticleTest extends \PHPUnit_Framework_TestCase
{
    public function testReadsHeadline()
    {
        $article = new Article('test', 'test');
        $this->assertEquals('test', $article->headline());
    }

    public function testAddTagsToArticle()
    {
        $article = new Article('test', 'test');
        $article->addTag(new Tag('test'));
        /** @var Tag $tag */
        foreach ($article->tags() as $tag) {
            $this->assertEquals('test', $tag->name());
        }
    }
}
