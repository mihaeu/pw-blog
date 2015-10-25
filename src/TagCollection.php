<?php

namespace Mihaeu\Blog;

class TagCollection implements \IteratorAggregate
{
    private $tags = [];

    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->tags);
    }
}