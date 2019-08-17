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
    //
}
