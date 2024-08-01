<?php

namespace Tests\Feature\Posts;

use App\Models\Post;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetListPostTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    /** @test */
    public function user_can_get_list_posts()
    {
        $respone = $this->getJson(route("posts.index"));
        $postCount = Post::count();
        $respone->assertStatus(HttpResponse::HTTP_OK);


        $respone->assertJson(
            fn (AssertableJson $json) =>
            $json->has(
                'data',
                fn (AssertableJson $json) =>
                $json->has('data')
                    ->has('meta', fn (AssertableJson $json) =>
                    $json->where('total', $postCount))
                    ->etc()
            )
                ->has('message')
        );
    }
}
