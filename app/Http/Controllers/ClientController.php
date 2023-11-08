<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){

        $search = trim($request->search);
        $clients = User::where('name', 'LIKE', '%' . $search . '%')->where('role', '=', 'client')->orderBy('name', 'asc')->paginate(5);

        return view('admin.clients.index', compact('clients', 'search'));
    }
}
