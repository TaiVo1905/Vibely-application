<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\ReplyFilter;
use App\Models\Reply;
use App\Http\Resources\V1\ReplyCollection;
use App\Http\Requests\V1\StoreReplyRequest;


class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ReplyFilter();

        $filterItems = $filter->transform($request);

        $replies = Reply::where($filterItems);

        if($request->query('includeReplier')) {
            $replies = $replies->with('includeReplier');
        }

        return new ReplyCollection($replies->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplyRequest $request)
    {
        return new StoreReplyRequest(Reply::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reply $Reply)
    {
        return new ReplyResource($Reply);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReplyRequest $request, Reply $Reply)
    {
        return new ReplyResource($Reply->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $Reply)
    {
        return $Reply->delete();
    }
}
