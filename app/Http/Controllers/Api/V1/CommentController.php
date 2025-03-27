<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\CommentFilter;
use App\Models\Comment;
use App\Http\Resources\V1\CommentCollection;
use App\Http\Requests\V1\StoreCommentRequest;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new CommentFilter();

        $filterItems = $filter->transform($request);

        $comments = Comment::where($filterItems);

        $includes = ['includeCommenter',
                    'includeReplies'];

        foreach ($includes as $include) {
            if($request->query($include)) {
                $comments = $comments->with($include);
            }
        }

        return new CommentCollection($comments->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        return new StoreCommentRequest(Comment::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return new CommentResource($comment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCommentRequest $request, Comment $comment)
    {
        return new CommentResource($comment->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        return $comment->delete();
    }
}
