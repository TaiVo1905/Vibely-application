<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\PostFilter;
use App\Models\Post;
use App\Http\Resources\V1\PostCollection;
use App\Http\Requests\V1\StorePostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new PostFilter();

        $filterItems = $filter->transform($request);

        $posts = Post::where($filterItems);

        $includes = ['includePoster',
                    'includeLikes',
                    'includeShares',
                    'includePostImages',
                    'includeComments',];

        foreach ($includes as $include) {
            if($request->query($include)) {
                $posts = $posts->with($include);
            }
        }

        return new PostCollection($posts->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        return new StorePostRequest(Post::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $Post)
    {
        return new PostResource($Post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $Post)
    {
        return new PostResource($Post->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $Post)
    {
        return $Post->delete();
    }
}
