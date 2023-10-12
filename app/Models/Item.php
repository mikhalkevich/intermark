<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'body', 'country_id', 'square', 'price', 'type', 'status', 'location', 'rooms', 'location_id'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function locations(){
        return $this->belongsTo(Location::class, 'location_id');
    }
}
