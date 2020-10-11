<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function showAllUsers()
    {
        $users = User::all();
        return view('pages.users')->with([
            'users' =>$users
        ]);
    }


    public function create()
    {
        return view('pages.registration');
    }


    public function insertNewUser(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();
        auth()->login($users);
        return redirect()->action('RegisterController@create');
        // return redirect()->action('RegisterController@index');
    }

    
}
