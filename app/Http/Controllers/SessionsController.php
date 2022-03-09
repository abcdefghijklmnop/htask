<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view("sessions.create",[]);
    }

    public function store()
    {

        $attributes = request()->validate([
            'email'=>'required|email|min:3',
            'password'=>'required'
        ]);

        if (!auth()->attempt($attributes))
        {
            throw ValidationException::withMessages(['email'=>'Your provided credentials could not be verified.']);
            // return back()
            //     ->withInput()
            //     ->withErrors(['email'=>'Your provided credentials could not be verified.']);
        }

        //againt session fixation
        session()->regenerate();
        return redirect("/")->with('success','You are logged In!');

    }

    public function destroy()
    {
        auth()->logout();
        return \redirect("/")->with('success','Goodbye!');
    }
}
