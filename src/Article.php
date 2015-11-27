<?php

namespace Mihaeu\Blog;

class Article
{
    private $headline;
    private $body;

    /** @var TagCollection */
    private $tagCollection;

    public function __construct(string $headline, string $body)
    {
        $this->headline = $headline;
        $this->body = $body;
        $this->tagCollection = new TagCollection();
    }

    public function headline() : string
    {
        return $this->headline;
    }

    public function body() : string
    {
        return $this->body;
    }

    public function addTag(Tag $tag)
    {
        $this->tagCollection->addTag($tag);
    }

    public function tags() : TagCollection
    {
        return $this->tagCollection;
    }
}