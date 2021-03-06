<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'reply' => $this->body,
            'question_title' => $this->question->title,
            'user_id' => $this->user_id,
            'username' => $this->user->name,
            'created_at' => $this->created_at->diffForHumans(),

        ];
    }
}
