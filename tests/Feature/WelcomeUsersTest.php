<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    function test_it_welcomes_users_with_nickname()
    {
        $this->get('saludo/juan/fermin')
            ->assertStatus(200)
            ->assertSee('Bienvenido Juan, tu apodo es fermin');
    }

    function test_it_welcomes_users_without_nickname()
    {
        $this->get('saludo/juan')
            ->assertStatus(200)
            ->assertSee('Bienvenido Juan');
    }
}
