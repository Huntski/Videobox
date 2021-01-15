<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UploadVideoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_uplokad_a_video_with_correct_data()
    {
        $this->withExceptionHandling();

        $response = $this->json('post', '/video/create', [
            'title' => 'How to make a egg',
            'video' => UploadedFile::fake()->image('test.mp4')
        ]);

        $response->dump();

        $response->assertStatus(200);
    }
}
