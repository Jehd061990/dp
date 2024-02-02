<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show_register()
    {
        return view('register');
    }

    public function register(Request $r)
    {
        $this->validate($r, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|unique:users,email',
            'pw' => 'required|min:6',
            'con_pw' => 'required|same:pw',
        ], [], [
            'pw' => 'password',
            'con_pw' => 'password confirmation',
        ]);

        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->account_type = 'user';
        $user->save();

        return redirect("/register")->with('success', 'New user added!');
    }
}
