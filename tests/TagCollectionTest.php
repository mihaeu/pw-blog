<?php

namespace Mihaeu\Blog;

class TagCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testAddsNewTagsToCollection()
    {
        $collection = new TagCollection();
        $collection->addTag(new Tag("test"));
        /** @var $tag Tag */
        foreach ($collection as $tag) {
            $this->assertEquals('test', $tag->name());
        }
    }
}
