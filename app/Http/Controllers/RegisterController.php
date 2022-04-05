<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('dashboard.register.index',[
            'title' => 'Register',
            "active" => "register",
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successful, please Login!');
        return redirect('/add/user')->with('success', 'New User Has been Added!');
    }
}
