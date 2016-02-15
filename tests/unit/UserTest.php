<?php

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
        $this->visit('/')
            ->see('Laravel 5');
    }
}
