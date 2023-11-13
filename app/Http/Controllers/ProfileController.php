<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($id)
    {

        $users = User::whereId($id)->first();

//        return view('user.profile', compact('users', $users));
        return view('client.profile.index', compact( 'users'));
    }


    public function edit(User $user)
    {
        return view('client.profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email', 'max:100'],
            'phone' => ['min:8', 'max:15'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;



        if (isset($request->password)){
            $user->password = $request->password;
        }


        $user->update();
        return redirect()->route('profile.index', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('eliminar', 'El usuario ha sido eliminado.');
    }
}
