<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;
use Illuminate\Http\Response;
use Tests\Feature\Posts\UpdatePostTest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    public function index()
    {
        $posts = $this->post->paginate(5);
        // $postResource = PostResource::collection($posts)->response()->getData(true);

        // return response()->json([
        //     'data' => $postResource

        // ], Response::HTTP_OK);
        // //

        $postCollection = new PostCollection($posts);

        //     return response()->json([
        //     'data' => $postCollection

        // ], Response::HTTP_OK);
        // //

        return $this->sentSuccessRespone($postCollection, 'success', Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $dataCreate = $request->all();
        $post = $this->post->create($dataCreate);

        $postResource = new PostResource($post);
        //     return response()->json([
        //     'data' => $postResource

        // ], Response::HTTP_OK);
        //
        return $this->sentSuccessRespone($postResource, 'success', Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = $this->post->findOrFail($id);
        $postResource = new PostResource($post);

        $postResource = new PostResource($post);
        //     return response()->json([
        //     'data' => $postResource

        // ], Response::HTTP_OK);
        return $this->sentSuccessRespone($postResource, 'success', Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        $post = $this->post->findOrFail($id); //Tìm kiếm theo ID nếu có lỗi thì trả về 404
        $dataUpdate = $request->all();

        $post->update($dataUpdate);

        $postResource = new PostResource($post);

        $postResource = new PostResource($post);
        //     return response()->json([
        //     'data' => $postResource

        // ], Response::HTTP_OK);
        return $this->sentSuccessRespone($postResource, 'success', Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = $this->post->findOrFail($id);

        $post->delete();

        $postResource = new PostResource($post);

        $postResource = new PostResource($post);
        //     return response()->json([
        //     'data' => $postResource,
        //     'Messeage' => 'Delete success'
        // ], Response::HTTP_OK);
        return $this->sentSuccessRespone($postResource, 'success', Response::HTTP_OK);
    }
}
