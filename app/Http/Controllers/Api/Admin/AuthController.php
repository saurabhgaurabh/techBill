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

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),
            ],422);
        }
        if(!Auth::attempt($request->only('email', 'password'))){
            return response()->json([
                'status' => false,
                'message' => 'Invalid email or password',
            ],401);
        }
        return response()->json([
            'status' => 'true',
            'message' => 'Login Successful',
            'user' => Auth::user(),
        ],200);
    }
}


?>