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
    //   $venders = VendersModal::latest()->get();
    $venders = VendersModal::orderBy('vendor_id', 'asc')->get();
    return view('admin.venders.index', compact('venders'));

    }

    public function store(Request $request)
    {
        $validated  = $request->validate([
            'name'=>'required',
            'company_name'=>'required',
            'mobile'=>'required',
            
        ]);

        $customers = VendersModal::create($validated );
        return redirect()->back()->with('success', 'Customer created successfully.');
    }
}

?>