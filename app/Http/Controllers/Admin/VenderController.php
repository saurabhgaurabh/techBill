<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\VendersModal;

// use App\Models\Vender;

class VenderController extends Controller
{
    public function index()
    {
        // return view('admin.venders.index'); // only show the index page
        //   $venders = VendersModal::latest()->get(); // to get the all data
        // $venders = VendersModal::orderBy('vendor_id', 'asc')->get(); // to get the 
        $venders = VendersModal::orderBy('vendor_id', 'asc')->paginate(10); // 10 records per page 
        return view('admin.venders.index', compact('venders'));
    }

    public function create()
    {
        return view('admin.venders.create');
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
        try {
            $venders = VendersModal::create($validated);
            // return redirect()->back()->with('success', 'Customer created successfully.');
            return redirect()->route('venders.index')->with('success', 'Vender Created Successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
    // public function update(Request $request, $id)
    // {
    //     $request->validae([
    //         'name' => 'required',
    //         'company_name' => 'required',
    //         'mobile' => 'required',
    //     ]);
    //     $vender = VendersModal::findOrFail($id);
    //     $vender->update([
    //         'name' => $request->name,
    //         'company_name' => $request->company_name,
    //         'mobile' => $request->mobile,
    //     ]);
    //      return redirect()
    //     ->route('venders.index')
    //     ->with('success', 'Vendor updated successfully.');

    // }
    public function destroy($vendor_id)
    {
        $vender = VendersModal::findOrFail($vendor_id);

        $vender->delete();

        return response()->json([
            'status' => true,
            'message' => 'Vendor deleted successfully.'
        ]);
    }
}
