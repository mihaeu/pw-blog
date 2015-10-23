<?php

namespace Mihaeu\Blog;

class User
{
    private $email;
    private $canPublish;

    public function __construct(\string $email, \bool $canPublish = false)
    {
        $this->email = $email;
        $this->canPublish = $canPublish;
    }

    public function canPublish() : bool
    {
        return $this->canPublish;
    }
}