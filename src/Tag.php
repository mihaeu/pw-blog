<?php

namespace Mihaeu\Blog;

class Tag
{
    private $tagName;

    public function __construct($tagName)
    {
        $this->tagName = $tagName;
    }

    public function name() : string
    {
        return $this->tagName;
    }
}