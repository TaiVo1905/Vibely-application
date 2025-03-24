<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\MessageFilter;
use App\Models\Message;
use App\Http\Resources\V1\MessageCollection;
use App\Http\Requests\V1\StoreMessageRequest;


class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new MessageFilter();

        $filterItems = $filter->transform($request);

        $messages = Message::where($filterItems);

        return new MessageCollection($messages->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        return new StoreMessageRequest(Message::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
    }
}
