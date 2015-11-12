<?php

namespace Mihaeu\Blog;

class BlogTest extends \PHPUnit_Framework_TestCase
{
    public function testNormalUserCanNotPublish()
    {
        $owner = new User(new Email('owner@test.com'));
        $user = new User(new Email('test@email.com'));
        $blog = new Blog('My Blog', $owner);
        $article = new Article('Test', 'Bla');

        $this->setExpectedException('Exception', 'No access');
        $blog->publishArticleFromUser($article, $user);
    }

    public function testOwnerCanPublish()
    {
        $owner = new User(new Email('test@email.com'));
        $blog = new Blog('My Blog', $owner);
        $article = new Article('Test', 'Bla');

        $blog->publishArticleFromUser($article, $owner);
        $this->assertEquals(1, count($blog->articles()));
    }

    public function testAuthorCanPublish()
    {
        $owner = new User(new Email('test@email.com'));
        $author = new User(new Email('author@gmail.com'), true);
        $blog = new Blog('My Blog', $owner);
        $article = new Article('Test', 'Bla');

        $blog->publishArticleFromUser($article, $author);
        $this->assertEquals(1, count($blog->articles()));
    }
}
