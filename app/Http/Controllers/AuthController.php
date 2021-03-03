<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Hash;
use Auth;
use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function sendLoginRequest(Request $request, User $user){
        $email = $request->email;
        $pass = $request->password;

        $data =  $user::where('email', $email)->first();
        // dd($data);
        if($data){
            if(Hash::check($pass, $data->password)){
                Session::put('name', $data->name);
                Session::put('email', $data->email);
                Session::put('login', TRUE);
                
                return redirect()->route('dashboard');
            }else{
                return redirect()->back()->with('error', 'Invalid Email address or Password');
            }
        }else{
            return redirect()->back()->with('error', 'No Data Found');
        }
    }
}