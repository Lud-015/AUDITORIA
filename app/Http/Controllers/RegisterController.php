<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        
        return view('register');
    }


    public function register(Request $request)
    {
       
        $user = new User;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->lastname1 = $request->lastname1;
        $user->email = $request->email;
        $user->CI = $request->CI;
        $user->fechaNacimiento = $request->fechaNac;
        $user->role_id = 3;
        $user->password = bcrypt($request->password);

        $user->save();

        auth()->login($user);

        
        return redirect()->route('home');
        
    }



}
