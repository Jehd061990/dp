<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Storey;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function show_register_admin()
    {
        return view('register_admin');
    }

    public function register_admin(Request $r)
    {
        $user = new User;
        $user->first_name = $r->input('first_name');
        $user->last_name = $r->input('last_name');
        $user->email = $r->input('email');
        $user->password = Hash::make($r->input('pw'));
        $user->account_type = 'admin';
        $user->save();

        return redirect("/admin/accounts");
    }

    public function superadmin_dashboard()
    {
        return view('superadmin_dashboard');
    }

    public function admin_show_products()
    {
        // $product = Product::query()
        //     ->select('*')
        //     ->get();
        $product = DB::table('products')
            // ->select('products.*')
            ->join('storey', 'storey.storey_id', '=', 'products.storey_id')
            ->select('products.*', 'storey.*')
            ->get();

        return view('admin_products', compact('product'));
    }

    public function delete_product(string $id)
    {
        $product = Product::where('product_id', '=', $id)
            ->delete();

        return redirect('admin/products');
    }

    public function register_admin_show()
    {
        $total_admin = User::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->where('account_type', '=', 'admin')
            ->get()
            ->first();

        $admin = User::query()
            ->select('*')
            ->where('account_type', '=', 'admin')
            ->get();

        return view('admin_show', compact('total_admin', 'admin'));
    }

    public function delete_admin(string $id)
    {
        $user = User::where('user_id', '=', $id)
            ->delete();

        return redirect('admin/accounts');
    }

    public function show_admin(string $id)
    {
        $user = User::query()
            ->select('*')
            ->where('user_id', '=', $id)
            ->get()
            ->first();

        return view('show_admin_account', compact('user'));
    }
}
