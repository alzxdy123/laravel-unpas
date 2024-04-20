<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index() {
        return view('register.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

public function store(Request $request)
     {
        $validate =  $request->validate([
            'name' =>'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validate['password'] = bcrypt($validate['password']);
        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);
        // dd($validate);

        // $request->flash('success', 'registration Success');
        return redirect('/login')->with('status', 'Registration Success');;
    }
}
