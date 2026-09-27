<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $query = Customers::query();
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('mobile', 'like', '%' . $request->search . '%')
                ->orWhere('company_name', 'like', '%' . $request->search . '%');
        }
        $customers = $query->paginate(10);
        return view('admin.customers.index', compact('customers'));
    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'name' => ['required','regex:/^[a-zA-Z\s]+$/'],
            'company_name' => 'nullable',
            'mobile' => ['required', 'digits:10' ],
            'email'=>'nullable|email|unique:vendors,email',
            'gstin' => 'required',
            'pan' => 'required',
            'address_line1' => 'nullable',
            'address_line2' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'pincode' => 'nullable',
            'notes' => 'nullable',
        ]);
        try{
            $customers = Customers::create($validated );
            return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
            }catch(\Exception $e){
                dd($e->getMessage());
            }
    }

    public function create(Request $request)
    {
        return view('admin.customers.create');
    }
    public function store2(Request $request)
    {
        $validated = $request->validate([
             'name'=>'required',
            'mobile'=>'required',
        ]);
        $non_register = Customers::create($validated);
        return redirect()->back()->with('success', 'Customer created successfully.');
    }
}

?>