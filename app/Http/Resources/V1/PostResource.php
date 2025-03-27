<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'userPostId' => $this->user_post_id,
            'poster' => new UserResource($this->whenLoaded('includePoster')),
            'content' => $this->content,
            'status' => $this->status,
            'updateAt' => $this->update_at,
            'likes' => LikeResource::collection($this->whenLoaded('includeLikes')),
            'shares' => ShareResource::collection($this->whenLoaded('includeShares')),
            'postImages' => PostImageResource::collection($this->whenLoaded('includePostImages')),
            'comments' => CommentResource::collection($this->whenLoaded('includeComments')),
        ];
    }
}
