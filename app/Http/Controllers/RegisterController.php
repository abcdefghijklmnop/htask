<?php

namespace App\Http\Controllers;

//use session;
use App\Models\User;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create', []);
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'=>'required|email|max:255|unique:users,email',
            'emailagain'=>'same:email',
            'password'=>'required|max:255|min:7',
        ]);

        unset($attributes['emailagain']);

        $user = User::create($attributes);

        //auth()->login($user);

        //session()->flash('success','Your account has been created.');
        return \redirect('/login')->with('success', 'Your account has been created.');
    }
}
