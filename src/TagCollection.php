<?php

namespace Mihaeu\Blog;

class TagCollection
{
    private $tags = [];

    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;
    }

    public function tags() : array
    {
        return $this->tags;
    }
}