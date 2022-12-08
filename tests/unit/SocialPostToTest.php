<?php

namespace Tests\unit;

use SocialPost\Dto\SocialPostTo;
use PHPUnit\Framework\TestCase;

class SocialPostToTest extends TestCase
{

    //Test
    public function testSetId()
    {
        $social_posts = new SocialPostTo();
        $val = 123;
        $social_posts->setId($val);
        $this->assertEquals($val, $social_posts->getId());
    }

    public function testSetDate()
    {
        $social_posts = new SocialPostTo();
        $val = new \DateTime();
        $social_posts->setDate($val);
        $this->assertEquals($val, $social_posts->getDate());
    }

    public function testSetText()
    {
        $social_posts = new SocialPostTo();
        $val = 'Hello';
        $social_posts->setText($val);
        $this->assertEquals($val, $social_posts->getText());
    }

    public function testSetAuthorId()
    {
        $social_posts = new SocialPostTo();
        $val = 'user_1';
        $social_posts->setAuthorId($val);
        $this->assertEquals($val, $social_posts->getAuthorId());
    }

    public function testSetAuthorName()
    {
        $social_posts = new SocialPostTo();
        $val = 'John Smith';
        $social_posts->setAuthorName($val);
        $this->assertEquals($val, $social_posts->getAuthorName());
    }

    public function testSetType()
    {
        $social_posts = new SocialPostTo();
        $val = 'test';
        $social_posts->setType($val);
        $this->assertEquals($val, $social_posts->getType());
    }

}
