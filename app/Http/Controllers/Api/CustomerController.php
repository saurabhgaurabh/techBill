<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index()
    {
        $Customers = Customers::all();
        return view('admin.customers', compact('Customers'));
    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required|email|unique:customers,email'
        ]);

        $customers = Customers::create($validated );
        return redirect()->back()->with('success', 'Customer created successfully.');
    }
}

?>