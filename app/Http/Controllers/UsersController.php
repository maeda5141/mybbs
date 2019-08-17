<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{

    public function show( User $user) {
        return view('Users.show', ['user'=>$user]);
    }
    public function edit( User $user) {
        return view('Users.edit', ['user'=>$user]);
    }
    public function update( Request $request, User $user) {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/');
    }
    //
}
