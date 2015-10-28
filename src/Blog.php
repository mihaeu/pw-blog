<?php

namespace Mihaeu\Blog;

class Blog
{
    private $articleCollection;
    private $name;
    private $owner;

    public function __construct(\string $name, User $owner)
    {
        $this->name = $name;
        $this->owner = $owner;
        $this->articleCollection = new ArticleCollection();
    }

    public function publishArticleFromUser(Article $article, User $user)
    {
        if ($user->canPublish() || $user === $this->owner) {
            $this->articleCollection->addArticle($article);
        } else {
            throw new \Exception('No access');
        }
    }

    public function articles() : ArticleCollection
    {
        return $this->articleCollection;
    }

    public function name() : \string
    {
        return $this->name;
    }
}