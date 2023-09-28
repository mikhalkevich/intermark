<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function getIndex(){
        $items = Item::all();
        return view('welcome', compact('items'));
    }
    public function getUrl($url = null){
        return view('item', compact('url'));
    }
}
