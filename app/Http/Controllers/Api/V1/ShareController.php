<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Requests\V1\StoreShareRequest;
use App\Models\Share;
use App\Http\Resources\V1\ShareCollection;
use App\Http\Resources\V1\ShareResource;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $shares = Share::where([['post_id', '=', $request->post]]);

        $shares->with('user');


        return new ShareCollection($shares->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShareRequest $request)
    {
        return new ShareResource(User::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Share $share)
    {

        return new ShareResource($share);
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
    public function destroy(Share $share)
    {
        return $share->delete();
    }
}
