<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'body', 'country_id', 'square', 'price', 'type', 'status', 'location', 'rooms'];
}
