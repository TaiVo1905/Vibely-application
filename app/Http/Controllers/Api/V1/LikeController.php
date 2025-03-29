<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Requests\V1\StoreLikeRequest;
use App\Models\Like;
use App\Http\Resources\V1\LikeCollection;
use App\Http\Resources\V1\LikeResource;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $likes = Like::where([['post_id', '=', $request->post]]);

        $likes->with('liker');

        return new LikeCollection($likes->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLikeRequest $request)
    {
        return new LikeResource(Like::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Like $like)
    {
        return $like->delete();
    }
}
