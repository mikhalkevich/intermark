<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        dd($this->items);
        return [
            'name' => $this->name,
            'aplpha2' => $this->alpha2,
            'flag' => $this->when($this->flag, $this->flag),
            //'items_count' => optional($this->items)->count()
            'items' => ItemResource::collection($this->items)
        ];
    }
}
