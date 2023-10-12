<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function getIndex(){
        $items = Item::all();
        //$geojson = file_get_contents(resource_path('/geojson/monuments.geojson'));
        $features = [];

            $features[] = [
                "type"=>"Feature",
                "properties" => [
                    "name" => "Париж, Эйфелева башня",
                    "image" => "https://en.wikipedia.org/wiki/Eiffel_Tower#/media/File:Tour_Eiffel_Wikimedia_Commons.jpg"
                ],
                "geometry" => [
                    "type" => "Point",
                    "coordinates" => [2.2944960089681175, 48.85824068679814]
                ]
            ];

        $json = [
            "type" => "FeatureCollection",
            "features" => $features
        ];
        $geojson = json_encode($json);
        return view('dashboard', ['geojson' => $geojson]);
    }
}
