<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\ShareFilter;
use App\Requests\V1\StoreShareRequest;
use App\Models\Share;
use App\Http\Resources\ShareCollection;
use App\Http\Resources\ShareResource;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ShareFilter();

        $filterItems = $filter->transform($request);

        $shares = Share::where($filterItems);

        if($request->query('includeLiker')) {
            $shares->with('includeLiker');
        }

        return new ShareCollection($shares);
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
