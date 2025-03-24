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
            'receiverId' => $this->receiver_id,
            'content' => $this->content,
            'status' => $this->status,
            'updateAt' => $this->update_at
        ];
    }
}
