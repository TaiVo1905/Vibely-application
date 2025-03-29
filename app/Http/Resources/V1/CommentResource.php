<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'postId' => $this->post_id,
            'content' => $this->content,
            'commenterId' => $this->commenter_id,
            'commenter' => new UserResource($this->whenLoaded('commenter')),
            'postReplies' => ReplyResource::collection($this->whenLoaded('replies'))
        ];
    }
}
