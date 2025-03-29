<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\PostFilter;
use App\Models\Post;
use App\Http\Resources\V1\PostResource;
use App\Http\Resources\V1\PostCollection;
use App\Http\Requests\V1\StorePostRequest;
use App\Http\Requests\V1\UpdatePostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new PostFilter();

        $filterItems = $filter->transform($request);

        if($request->user) {
            $filterItems[] = ['poster_id', '=', $request->user];
        }

        $posts = Post::where($filterItems);

        return new PostCollection($posts->with('poster')->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        return new PostResource((Post::create($request->all())->load('poster')));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return new PostResource($post->load('poster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        return $post->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return $post->delete();
    }

    public function interactions(Request $request) {
        $filter = new PostFilter();

        $filterItems = $filter->transform($request);

        if($request->post) {
            $filterItems[] = ['poster_id', '=', $request->post];
        }

        $posts = Post::where($filterItems);

        return new PostCollection($posts->with(['poster', 'likers', 'sharers', 'commenters'])->paginate());
    }
}
