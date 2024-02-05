<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function show_login()
    {
        return view('login');
    }

    public function login(Request $r)
    {
        $user = User::where("email", "=", $r->email)
            ->first();

        if ($user) {
            if (Hash::check($r->pw, $user->password)) {
                Session::put('user_id', $user->user_id);
                Session::put('first_name', $user->first_name);
                Session::put('last_name', $user->last_name);
                Session::put('email', $user->email);
                Session::put('account_type', $user->account_type);
                if (Session::get('account_type') == 'admin') {
                    return redirect('/admin/dashboard');
                } else if (Session::get('account_type') == 'user') {
                    return redirect('/');
                } else if (Session::get('account_type') == 'superadmin') {
                    return redirect('/admin/dashboard');
                }
            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        if (Session::has('user_id')) {
            Session::flush();
        }

        return redirect('login');
    }

    public function user_profile()
    {
        return view('profile');
    }

    public function show_register()
    {
        return view('register');
    }

    public function register(Request $r)
    {
        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->account_type = 'user';
        $user->save();

        return redirect("/login");
    }
}
