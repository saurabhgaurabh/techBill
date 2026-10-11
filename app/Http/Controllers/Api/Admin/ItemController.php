<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    private function validation(Request $request)
    {
        return $request->validate([

            'item_name' => 'required|string|max:150',

            'hsn_code' => 'nullable|string|max:10',

            'gst_percent' => 'required|numeric',

            'new_mrp' => 'required|numeric',

            'old_mrp' => 'nullable|numeric',

            'max_stock' => 'nullable|integer',

            'min_stock' => 'nullable|integer',

            'opening_balance' => 'nullable|numeric',

            'closing_balance' => 'nullable|numeric',

            'status' => 'nullable|boolean'

        ]);
    }

    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Item::orderBy('item_id', 'desc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validation($request);

        $item = Item::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Item Created Successfully',
            'data' => $item
        ], 201);
    }

    // public function show($id)
    // {
    //     $item = Item::findOrFail($id);

    //     return response()->json([
    //         'success' => true,
    //         'data' => $item
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $item = Item::findOrFail($id);

    //     $data = $this->validation($request);

    //     $item->update($data);

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Item Updated Successfully',
    //         'data' => $item
    //     ]);
    // }

    // public function destroy($id)
    // {
    //     Item::findOrFail($id)->delete();

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Item Deleted Successfully'
    //     ]);
    // }
}