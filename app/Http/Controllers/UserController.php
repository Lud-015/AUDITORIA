<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {
        $user = User::find($id);
     
        return view('profile')->with('user', $user); 
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = new User;
        // $user->name = $request->name;
        // $user->lastname = $request->lastname;
        // $user->lastname1 = $request->lastname1;
        // $user->email = $request->email;
        // $user->CI = $request->CI;
        // $user->fechaNacimiento = $request->fechaNac;
        // $user->role_id = 3;
        // $user->password = bcrypt($request->password);

        $this->validate(request(), [
            'name' => 'required',
            'lastname'=>'required',
            'lastname1'=>'required',
            'email' => 'required|email',
            'CI' => 'required',
            'fechaNac' => 'required',
            'password' => 'required|confirmed'
        ]);
        
        $user = User::create(request(['name','lastname','lastname1','email','CI','fechaNac','role_id','password']));

      

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
