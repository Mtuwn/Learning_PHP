<?php

namespace Tests\Feature\Posts;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;
use LDAP\Result;

class UpdatePostTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    /** @test*/

    public function it_can_update_the_post_if_post_exist_and_data_is_valid()
    {
        $post = post::factory()->create();
        $dataUpdate = [
            "name" => $this->faker->name,
            "body" => $this->faker->text
        ];

        $response = $this->json('PUT', route("posts.update", $post->id), $dataUpdate);

        $response->assertStatus(Response::HTTP_OK);

        $response->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                'data',
                fn (AssertableJson $json)
                => $json->where('name', $dataUpdate['name'])
                    ->etc()
            )->etc()
        );

        $this->assertDatabaseHas('abc', [
            'name' => $dataUpdate['name'],
            'body' => $dataUpdate['body']
        ]);
    }

    /** @test*/

    public function it_can_not_update_the_post_if_post_exist_and_name_is_null()
    {
        $post = post::factory()->create();
        $dataUpdate = [
            "name" => "",
            "body" => $this->faker->text
        ];

        $response = $this->json('PUT', route("posts.update", $post->id), $dataUpdate);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $response->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                'error',
                fn (AssertableJson $json)
                => $json->has('name')
                    ->etc()
            )->etc()
        );
    }

    /** @test */
    public function it_can_not_update_the_post_if_post_exist_and_body_is_null()
    {
        $post = post::factory()->create();
        $dataUpdate = [
            "name" => $this->faker->name(),
            "body" => ""
        ];

        $response = $this->json('PUT', route("posts.update", $post->id), $dataUpdate);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $response->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                'error',
                fn (AssertableJson $json)
                => $json->has('body')
                    ->etc()
            )->etc()
        );
    }

    /** @test */
    public function it_can_not_update_the_post_if_post_exist_and_data_is_not_valid()
    {
        $post = post::factory()->create();
        $dataUpdate = [
            "name" => "",
            "body" => ""
        ];

        $response = $this->json('PUT', route("posts.update", $post->id), $dataUpdate);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $response->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                'error',
                fn (AssertableJson $json)
                => $json->has('body')
                    ->has('name')
                    ->etc()
            )->etc()
        );
    }

    /** @test */
    public function it_can_not_update_the_post_if_post_not_exist_and_data_is_valid()
    {
        $post = post::factory()->create();
        $postId = -1;
        $dataUpdate = [
            "name" => $this->faker->name,
            "body" => $this->faker->text
        ];

        $response = $this->json('PUT', route("posts.update", $postId), $dataUpdate);

        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }
}
