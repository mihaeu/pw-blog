<?php

namespace Mihaeu\Blog;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testCanPublishWithPermission()
    {
        $user = new User('test@test.com', true);
        $this->assertTrue($user->canPublish());
    }

    public function testCanNotPublishByDefault()
    {
        $user = new User('test@test.com');
        $this->assertFalse($user->canPublish());
    }
}
