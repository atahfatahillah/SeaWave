<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * Login with POST method test.
     *
     * @return void
     */
    public function testLoginShouldFail() {
        $response = $this->post('/login');

        $response
            ->assertStatus(200)
            ->assertJson(['status' => 'failed']);
    }

    /**
     * Logout with POST method test.
     *
     * @return void
     */
    public function testLogoutShouldFail() {
        $response = $this->post('/logout');

        $response
            ->assertStatus(200)
            ->assertJson(['status' => 'failed']);
    }
}
