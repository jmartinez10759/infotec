<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ImageTest extends TestCase
{

    use HasFactory;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_images_all()
    {
        $response = $this->getJson('/api/images');
        $response
            ->assertStatus(200);
    }

    public function test_images_show()
    {
        $this->assertTrue(true);
    }

    public function test_images_store()
    {
        $response = $this->postJson('/api/images', ['description' => 'TDD']);
        $response
            ->assertStatus(201)
            ->assertJson([
                'created' => true,
            ]);
    }

    public function test_images_update()
    {
        $response = $this->putJson('/api/images', ['description' => 'TDD']);
        $response
            ->assertStatus(200)
            ->assertJson([
                'created' => true,
            ]);
    }

    public function test_images_destroy()
    {
        $this->assertTrue(true);
    }

    public function test_images_upload()
    {
        $this->assertTrue(true);
    }
}
