<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\LikeFilter;
use App\Requests\V1\StoreLikeRequest;
use App\Models\Like;
use App\Http\Resources\LikeCollection;
use App\Http\Resources\LikeResource;

class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new LikeFilter();

        $filterItems = $filter->transform($request);

        $likes = Like::where($filterItems);

        if($request->query('includeLiker')) {
            $likes->with('includeLiker');
        }

        return new LikeCollection($likes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLikeRequest $request)
    {
        return new LikeResource(User::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        return new LikeResource($like);
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
