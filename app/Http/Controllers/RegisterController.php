<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.clients.register');
    }

    //Metodo para registrar un nuevo usuario
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email', 'unique:users', 'max:100'],
            'password' => ['required', 'confirmed', 'min:3', 'max:15'],
            'phone' => ['required','min:8', 'max:15'],
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => strtolower($request->email),
            'password' => $request->password,
            'phone' => $request->phone,
            'role' => 'client'
        ]);

        //opcion 1 para autenticar

//        auth()->attempt([
//            'email'=>$request->email,
//            'password'=>$request->password
//        ]);

        //opcion 2 para autenticar

        auth()->attempt($request->only('email', 'password'));

            if ('admin' == auth()->user()->role){
                return redirect()->route('dashboard');
            }

        return redirect()->route('home');
    }
}
