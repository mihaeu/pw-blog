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
        foreach ($blog->articles() as $article) {
            $this->console->printLine($article->headline());
            $tags = [];
            /** @var Tag $tag */
            foreach ($article->tags() as $tag) {
                $tags[] = $tag->name();
            }
            $this->console->printLine(implode(', ', $tags));
            $this->console->printLine($article->body());
        }
    }
}