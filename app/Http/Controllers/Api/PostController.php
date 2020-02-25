<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\Post as PostResource;
use App\Http\Resources\PostCollection;

class PostController extends Controller
{
    /**
     * @return PostCollection
     */
    public function index()
    {
        return new PostCollection(Post::paginate(13));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return PostResource
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->post_content = $request->post_content;
        $post->email = $request->email;
        $post->author = $request->author;
        $post->save();

        return new PostResource($post);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return PostResource
     */
    public function show($id)
    {
        return new PostResource(Post::FindOrFail($id));
    }

    /**
     * @param Request $request
     * @param $id
     * @return PostResource
     */
    public function update(Request $request, $id)
    {
        //I am doing validation here
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->post_content = $request->post_content;
        $post->email = $request->email;
        $post->author = $request->author;
        $post->save();

        return new PostResource($post);
    }

    /**
     * @param $id
     * @return PostResource
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return new PostResource($post);
    }
}
