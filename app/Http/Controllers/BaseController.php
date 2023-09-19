<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex(){
        return view('welcome');
    }
    public function getUrl($url = null){
        return view('item', compact('url'));
    }
}
