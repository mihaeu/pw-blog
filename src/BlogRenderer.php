<?php

namespace Mihaeu\Blog;

class BlogRenderer
{
    private $console;

    public function __construct(Console $console)
    {
        $this->console = $console;
    }

    public function render(Blog $blog)
    {
        /** @var Article $article */
        foreach ($blog->articleCollection() as $article) {
            $this->console->printLine($article->headline());
        }
    }
}