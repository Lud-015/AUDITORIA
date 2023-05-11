<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('login');

    }

    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {

        
            return redirect(route('home'));
            

        }
 
        return back()->withErrors([
            'email' => 'Error en la contraseña o email.',
        ])->onlyInput('email');

    }






}
