<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\VendersModal;

class UnregisterVendorController extends Controller
{

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required','regex:/^[a-zA-Z\s]+$/'],
            'mobile' => ['required', 'digits:10' ]
        ]);
        try {
            $venders = VendersModal::create($validated);
            return redirect()->route('venders.index')->with('success', 'Vender Created Successfully.');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}


?>