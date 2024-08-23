<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return Item::all();
    }

    public function store(Request $request)
    {

//        $validatedData = $request->validate([
//            'name' => 'required|string|max:255',
//        ]);

        $name = $request->input('name');


        $item = Item::create([
           'name'=> $name,
        ]);

        return response()->json(['success' => true, 'item' => $item], 200);
    }

    public function show($id)
    {
        $item = Item::where('id', $id)->first();

        if (!$item){
            return response()->json(['success' => false, 'message' => 'Item not found'], 404);
        }
        return response()->json(['success' => true, 'item' => $item], 200);
    }

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        return response()->json(['success' => true, 'item' => $item], 200);
    }

    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return response()->json(['message' => 'Item deleted successfully']);
    }
}
