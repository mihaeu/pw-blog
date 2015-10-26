<?php

namespace Mihaeu\Blog;

class TagCollection implements \IteratorAggregate
{
    /** @var array Tag[] */
    private $tags = [];

    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->tags);
    }
}