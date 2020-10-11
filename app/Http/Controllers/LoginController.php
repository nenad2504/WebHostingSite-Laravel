<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function create()
    {
        return view('pages.login');
    }

    public function store(Request $request)
    {
        if (auth()->attempt(request(['name', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect('/users');
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/users');
    }

}