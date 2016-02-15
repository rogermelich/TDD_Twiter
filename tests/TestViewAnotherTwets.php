<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestViewAnotherTwets extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $user = function testViewAnotherTwets($tweet){
        $user = factory(User::class->create());
        $user = factory(Tweet::class->create());
        $user-tweets()->save($tweet);
        }

        $this->visit('/')
             ->see('Laravel 5');
    }
}
