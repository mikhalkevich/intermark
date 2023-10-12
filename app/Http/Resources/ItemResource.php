<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'status' => $this->status,
            'square' => $this->square,
            'type' => $this->type,
            'rooms' => $this->rooms,
            'country_name' => optional($this->country)->name,
            'location_name' => optional($this->locations)->name,
            'country' => CountryResource::make($this->country),
            'place' =>  LocationResource::make($this->locations),
        ];
    }
}
