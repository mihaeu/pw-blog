<?php

namespace Mihaeu\Blog;

class ArticleCollection
{
    private $articles = [];

    public function articles()
    {
        return $this->articles;
    }

    public function addArticle(Article $article)
    {
        $this->articles[] = $article;
    }
}