<?php

namespace Tests\Feature\Posts;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class DeletePostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    /** @test */
    public function user_can_delete_post_if_data_is_valid()
    {
        $post = Post::factory()->create();
        $postCountBeforeDelete = Post::count();
        $respone = $this->json('DELETE', route('posts.destroy', $post->id));

        $respone->assertStatus(Response::HTTP_OK);

        $respone->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                'data',
                fn (AssertableJson $json)
                => $json->where('id', $post->id)
                    ->etc()
            )->etc()
        );
    }

    /** @test */
    public function user_can_not_delete_post_if_data_is_not_valid(){
        $postId = -1;

        $respone = $this->json('DELETE', route('posts.destroy', $postId));

        $respone->assertStatus(Response::HTTP_NOT_FOUND);
    }

}
