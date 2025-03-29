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
            'posterId' => $this->poster_id,
            'poster' => new UserResource($this->whenLoaded('poster')),
            'content' => $this->content,
            'status' => $this->status,
            'updateAt' => $this->update_at,
            'postImages' => PostImageResource::collection($this->whenLoaded('postImages')),
            'likers' => UserResource::collection($this->whenLoaded('likers')),
            'sharers' =>UserResource::collection($this->whenLoaded('sharers')),
            'commenters' => UserResource::collection($this->whenLoaded('commenters')),
        ];
    }
}
