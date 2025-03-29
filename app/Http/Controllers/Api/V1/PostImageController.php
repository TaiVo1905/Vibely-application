<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostImage;
use App\Http\Resources\V1\PostImageCollection;
use App\Http\Requests\V1\StorePostImageRequest;


class PostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $postImages = PostImage::where([['post_id', '=', $request->post]]);

        return new PostImageCollection($postImages->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostImageRequest $request)
    {
        return new PostImageResource(PostImage::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(PostImage $postImage)
    {
        return new PostImageResource($postImage);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostImageRequest $request, PostImage $postImage)
    {
        return $postImage->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostImage $postImage)
    {
        $postImage->delete();
    }
}
