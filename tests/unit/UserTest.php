<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testAUserCanBeFounfByUsername()
    {
        $createdUser = factory(User::class)->create(['username' => 'janedoe']);

        $foundUser = User::findByUsername('janedoe');

        $this->assetEquals($createdUser->id, $foundUser->id);
        $this->assetEquals($createdUser->username, $foundUser->username);
    }
}
