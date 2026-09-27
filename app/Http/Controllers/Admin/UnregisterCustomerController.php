<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UnregisterCustomerController extends Controller
{

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required','regex:/^[a-zA-Z\s]+$/'],
            'mobile' => ['required', 'digits:10' ]
        ]);
        try {
            $customers = Customers::create($validated);
            return redirect()->route('customers.index')->with('success', 'Customers Created Successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}


?>