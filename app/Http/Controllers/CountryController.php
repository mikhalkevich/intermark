<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CountryResource;
use App\Models\Country;

class CountryController extends Controller
{
    public function getAlpha2($alpha2 = null){
        $country = Country::where('alpha2', $alpha2)->first();
        dd($country->item);
        return CountryResource::make($country);
    }
}
