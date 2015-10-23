<?php

namespace Mihaeu\Blog;

class Article
{
    private $headline;
    private $body;
    private $tags;

    public function __construct(\string $headline, \string $body, \string $tags)
    {
        $this->headline = $headline;
        $this->body = $body;
        $this->tags = $tags;
    }

    public function headline() : \string
    {
        return $this->headline;
    }
}