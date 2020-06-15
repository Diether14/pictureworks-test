<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class AppendTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $arr = [
            'id'        => 1,
            'comments'  => 'test comment',
            'password'  => 'password'
        ];
        $response = $this->postJson('/api/append-user-comments', $arr);

        $response->assertStatus(200);
    }
}
