<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'sendId' => $this->send_id,
            'sender' => new UserResource($this->whenLoaded('sender')),
            'receiverId' => $this->receiver_id,
            'receiver' => new UserResource($this->whenLoaded('receiver')),
            'content' => $this->content,
            'status' => $this->status,
            'updateAt' => $this->update_at
        ];
    }
}
