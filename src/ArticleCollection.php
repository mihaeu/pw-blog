<?php

namespace Mihaeu\Blog;

class ArticleCollection implements \IteratorAggregate
{
    private $articles = [];

    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->articles);
    }
}