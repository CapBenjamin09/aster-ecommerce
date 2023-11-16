<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //Finalizar la sesion del usuario
    public function store()
    {
        auth()->logout();
        return redirect()->route('session.index');
    }
}
