<?php

namespace App\Http\Controllers\Api\Admin;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


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


       $user = User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);

        // return redirect()
        // ->route('admin.auth.signin')
        // ->with('success','Account Created Successfully.');
        return response()->json([
             'status'=>true,
            'message'=>'User Created Successfully',
            'user'=>$user
        ],201);

    }

    public function webLogin(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ]))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email'=>'Invalid email or password'
        ]);
        // dd([
        //     'id'=>Auth::id(),
        //     'user'=>Auth::user()
        // ]);
    }
}


?>