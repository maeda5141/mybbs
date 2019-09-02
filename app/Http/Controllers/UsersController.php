<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

// use Illuminate\Contracts\Encryption\DecryptException;


class UsersController extends Controller
{

    public function show( User $user) {
        return view('Users.show', ['user'=>$user]);
    }
    public function edit( User $user) {
        return view('Users.edit', ['user'=>$user]);
    }
    public function update( Request $request, User $user) {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request['password']);
            $user->save();
            return redirect('/');
    }
    //
}
