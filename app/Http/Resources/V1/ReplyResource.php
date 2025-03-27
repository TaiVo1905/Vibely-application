<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'commentId' => $this->comment_id,
            'replierId' => $this->replier_id,
            'replier' => new UserResource($this->whenLoaded('includeReplier')),
            'content' => $this->content
        ];
    }
}
