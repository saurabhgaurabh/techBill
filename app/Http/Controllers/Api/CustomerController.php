<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $validated  = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|max:20',
            'amount' => 'required|numeric|min:0',
        ]);

        $customers = Customers::create($validated );
        return response()->json([
            'status' => 'success',
            'message' => 'Customer created successfully',
            'data' => $customers
        ], 201);
    }
}

?>