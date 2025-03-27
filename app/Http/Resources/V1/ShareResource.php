<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShareResource extends JsonResource
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
            'userShareId' => $this->user_share_id,
            'UserShare' => new UserResource($this->whenLoaded('includeSharer'))

        ];
    }
}
