<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testStatusCode(): void
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }

    public function testBody(): void
    {
        $response = $this->get('/home');
        $response->assertSeeText('こんにちは！');
    }
}
