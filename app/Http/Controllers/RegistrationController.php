<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create () {
        return view('registration.create');
    }

    public function store (Request $request) {
        $this->validate(request(), [
            'name' => 'required|min:2|max:30',
            'email' => 'required|email|min:2|max:30',
            'password' => 'required|min:8|confirmed',
        ]);
        
        $user = User::create([
            'name' => request('name'), 
            'email' => request('email'), 
            'password' => bcrypt(request('password'))
            ]);

        auth()->login($user);

        return redirect()->home();
    }
}
