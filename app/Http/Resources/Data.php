<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Data extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'user_image' => $this->user_image,
            'progress' => $this->progress,
        ];
    }
    
}