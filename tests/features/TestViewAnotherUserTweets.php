<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestViewAnotherUserTweets extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     *
     *
     */

    use DatabaseMigrations;
    public function testViewAnotherTweets()
    {
        $user = factory(User::class->create(['username' => 'johndoe']));
        $tweet = factory(Tweet::class->create(['body' => 'My first tweet']));
        $user-tweets()->save($tweet);

        $this->visit('/johndoe')
             ->see('My firts Tweet');
    }
}
