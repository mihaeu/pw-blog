<?php

namespace Mihaeu\Blog;

class Article
{
    private $headline;
    private $body;

    /**
     * @var TagCollection
     */
    private $tagCollection;

    public function __construct(\string $headline, \string $body)
    {
        $this->headline = $headline;
        $this->body = $body;
    }

    public function headline() : \string
    {
        return $this->headline;
    }

    public function addTag(Tag $tag)
    {
        $this->tagCollection->addTag($tag);
    }
}