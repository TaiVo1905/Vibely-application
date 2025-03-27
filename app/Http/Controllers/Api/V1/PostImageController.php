<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\PostImageFilter;
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
        $filter = new PostImageFilter();

        $filterItems = $filter->transform($request);

        $postImages = PostImage::where($filterItems);

        return new PostImageCollection($postImages->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostImageRequest $request)
    {
        return new StorePostImageRequest(PostImage::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(PostImage $postImage)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostImageRequest $request, PostImage $postImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostImage $postImage)
    {
        $postImage->delete();
    }
}
