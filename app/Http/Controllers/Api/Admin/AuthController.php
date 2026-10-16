<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function showSignUp()
    {
        return view('admin.auth.signup');
    }


    public function store(Request $request)
    {

        $data = $request->validate([

            'name'=>'required',

            'email'=>'required|email|unique:users',

            'password'=>'required|min:8'

        ]);


        User::create([

            'name'=>$data['name'],

            'email'=>$data['email'],

            'password'=>Hash::make($data['password'])

        ]);


        return redirect()
        ->route('admin.auth.signin')
        ->with('success','Account Created Successfully.');

    }
}


?>