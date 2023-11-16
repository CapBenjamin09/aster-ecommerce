<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('auth.session');
    }
    public function store(Request $request)
    {
        $this->validate($request, [

            'email' => ['required', 'email'],
            'password' => ['required']
        ]);



        if (!auth()->attempt($request->only('email', 'password')))
        {
            return back()->with('status', 'Datos Incorrectos, por favor verifique');
        }
//
        auth()->attempt($request->only('email', 'password'));
        return redirect()->route('home');
    }
}
