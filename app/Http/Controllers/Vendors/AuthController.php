<?php

namespace App\Http\Controllers\Api\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendersModal;
use Illuminate\Support\Str;


class AuthController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);


        $vendor = VendersModal::where('email',$request->email)
                    ->first();


        if(!$vendor || $request->password != $vendor->password)
        {
            return response()->json([
                'status'=>false,
                'message'=>'Invalid Email or Password'
            ],401);
        }


        return response()->json([

            'status'=>true,

            'message'=>'Login Successfully',

            'vendor'=>[
                'id'=>$vendor->vendor_id,
                'name'=>$vendor->name,
                'email'=>$vendor->email
            ],

            // temporary token
            // 'token'=>Str::random(60)

        ],200);

    }


}