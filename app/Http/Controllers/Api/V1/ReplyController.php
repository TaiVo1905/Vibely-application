<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $replies = Reply::where([['comment_id', '=', $request->comment]]);

        return new ReplyCollection($replies->paginate()->with('repliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplyRequest $request)
    {
        return new ReplyResource(Reply::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reply $Reply)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreReplyRequest $request, Reply $Reply)
    {
        return $Reply->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $Reply)
    {
        return $Reply->delete();
    }
}
