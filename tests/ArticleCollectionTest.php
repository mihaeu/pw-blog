<?php

namespace Mihaeu\Blog;

class ArticleCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testAddsNewArticles()
    {
        $collection = new ArticleCollection();
        $collection->addArticle(new Article('test', 'body'));

        /** @var $article Article */
        foreach ($collection as $article) {
            $this->assertEquals('test', $article->headline());
        }
    }
}
