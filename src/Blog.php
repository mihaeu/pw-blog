<?php

namespace Mihaeu\Blog;

class Blog
{
    private $articleCollection;
    private $name;

    public function __construct(\string $name)
    {
        $this->name = $name;
        $this->articleCollection = new ArticleCollection();
    }

    public function publishArticleFromUser(Article $article, User $user)
    {
        if ($user->canPublish()) {
            $this->articleCollection->addArticle($article);
        } else {
            throw new \Exception('No access');
        }
    }

    public function articleCollection() : ArticleCollection
    {
        return $this->articleCollection;
    }
}