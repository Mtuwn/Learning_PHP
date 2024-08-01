<?php

namespace Tests\Feature\Posts;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    /** @test */
    public function user_can_create_post_if_data_is_valid()
    {
        $datacreate = [
            "name" => $this->faker->name,
            "body" => $this->faker->text
        ];

        $respose = $this->json("POST", route("posts.store"), $datacreate);
        $respose->assertStatus(Response::HTTP_OK);

        $respose->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                "data",
                fn (AssertableJson $json) =>
                $json->where("name", $datacreate["name"])
                    ->etc()
            )->etc()
        );

        $this->assertDatabaseHas("abc", [
            "name" => $datacreate["name"],
            "body" => $datacreate["body"],
        ]);
    }

    /** @test */
    public function user_can_not_create_post_if_name_is_null()
    {
        $datacreate = [
            "name" => "",
            "body" => $this->faker->text
        ];

        $response = $this->postJson(route("posts.store"), $datacreate);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $response->assertJson((fn (AssertableJson $json) =>
            $json->has(
                'error',
                fn (AssertableJson $json) =>
                $json->has("name")
                    ->etc()
            )->etc()
            )
        );
    }

    /** @test */
    public function user_can_not_create_post_if_body_is_null()
    {
        $dataCreate = [
            "name" => $this->faker->name(),
            "body" => ""
        ];

        $response = $this->postJson(route("posts.store"), $dataCreate);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $response->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                "error",
                fn (AssertableJson $json)
                => $json->has("body")
                    ->etc()
            )->etc()
        );
    }

    /** @test */

    public function user_can_not_create_post_if_name_and_body_is_null()
    {
        $dataCreate = [
            "name" => "",
            "body" => ""
        ];

        $response = $this->postJson(route("posts.store"), $dataCreate);

        $response->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

        $response->assertJson(
            fn (AssertableJson $json)
            => $json->has(
                "error",
                fn (AssertableJson $json)
                => $json->has("body")
                    ->has('name')
                    ->etc()
            )->etc()
        );
    }
}
