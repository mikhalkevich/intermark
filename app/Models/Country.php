<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'flag', 'alpha2'];
    public function item(){
        $this->hasMany(Item::class, 'country_id');
    }

}
