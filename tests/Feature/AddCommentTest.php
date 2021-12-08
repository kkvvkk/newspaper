<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddCommentTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_add_comment()
    {
        //$faker = Faker::create();

        $name = $this->faker->name;
        $text = $this->faker->text(100);
        
        $response = $this->postJson('/api/comments/add', [
            'name' => $name,
            'text' => $text,
            'articleId' => 1,
        ]);

        $response->assertJson(['success' => 'Comment added']);
    }
}
