<?php

namespace Mihaeu\Blog;

class Blog
{
    private $articles;
    private $name;

    public function __construct(\string $name, array $articles)
    {
        $this->name = $name;
        $this->articles = $articles;
    }

    public function articles() : array
    {
        return $this->articles;
    }
}