<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testLogin()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('Login');
        $res = $this->json('POST', '/login', ['username' => 'hoangtuyb96', 'password' => '863991']);
        $res->assertStatus(302);
        $res->assertRedirect('hoangtuyb96/my_page');
        $this->followRedirects($res)->assertSee('Profile');
    }

    public function testSignup()
    {
        $response = $this->get('/signup');
        $response->assertStatus(200);
        $response->assertSee('Signup');
        $res = $this->json('POST', '/signup', [
            'username' => 'test2',
            'email'    => 'test2@gmail.com',
            'password' => '863991',
            'password_confirmation' => '863991',
            'fullname' => 'test',
            'purpose'  => 1
            ]);
        $res->assertStatus(302);
        $res->assertRedirect('/');
        $this->followRedirects($res)->assertSee('Home');
    }
}
