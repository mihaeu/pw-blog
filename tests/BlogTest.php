<?php

namespace Mihaeu\Blog;

class BlogTest extends \PHPUnit_Framework_TestCase
{
    public function testNormalUserCanNotPublish()
    {
        $user = new User('test@email.com');
        $blog = new Blog('My Blog');
        $article = new Article('Test', 'Bla');

        $this->setExpectedException('Exception', 'No access');
        $blog->publishArticleFromUser($article, $user);
    }

    public function testOwnerCanPublish()
    {
        $owner = new User('test@email.com', true);
        $blog = new Blog('My Blog');
        $article = new Article('Test', 'Bla');

        $blog->publishArticleFromUser($article, $owner);
        $this->assertEquals(1, count($blog->articleCollection()));
    }
}
