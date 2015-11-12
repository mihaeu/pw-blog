<?php

namespace Mihaeu\Blog;

class ArticleCollection implements \IteratorAggregate, \Countable
{
    /** @var Article[] */
    private $articles = [];

    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->articles);
    }

    public function count()
    {
        return count($this->articles);
    }
}