<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            //'id' => $this->id
            'body' => $this->body,
            'lang' => $this->lang,
            'name' => $this->name,
            'name_en' => $this->name_en,
        ];
    }
}
