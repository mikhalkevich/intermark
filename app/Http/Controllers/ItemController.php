<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Resources\ItemResource;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Item::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort_if(!$request->name, '404', 'Нет названия');
        $item = Item::create($request->all());
        return response()->json($item);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Item::find($id);
        return response()->json($item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        $item->update($request->all());
        return response()->json($item);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Item::find($id);
        $item->delete();
        return response()->json(['message'=>'Item deleted']);
        //Item::destroy($id);
    }
    public function getMainPublic(){
        $items = Item::orderBy('id','DESC')->paginate(5);
        return ItemResource::collection($items);
    }
}
