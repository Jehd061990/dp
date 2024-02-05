<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Product;


class ProductController extends Controller
{
    public function products(){

        // $products = Product::query()
        //     -select('*')
        //     ->get();

        return view('product');
    }
}