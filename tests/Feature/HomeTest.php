<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * Index page request test
     *
     * @return void
     */
    public function testHomeIndexShouldSuccess() {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Contact page request test
     *
     * @return void
     */
    public function testHomeContactShouldSuccess() {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    /**
     * About page request test
     *
     * @return void
     */
    public function testHomeAboutShouldSuccess() {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
