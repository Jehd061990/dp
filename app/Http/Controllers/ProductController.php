<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\ProductType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Product;


class ProductController extends Controller
{
    public function products()
    {
        return view('product');
    }

    public function add_product(Request $r)
    {
        $product = new Product;
        $product->storey = $r->input('storey');
        $product->design = $r->input('design');
        $product->description = $r->input('description');
        $product->lot_area = $r->input('lot_area');
        $product->title = $r->input('title');
        // $product->product_name = $r->input('product_name');
        $product->save();

        // $product_type = new ProductType;
        // $product_type->product_id = $product->product_id;
        // $product_type->save();

        $product_type = Product::query()
            ->select('*')
            ->join('faculties_educ', 'faculties.faculty_id', '=', 'faculties_educ.faculty_id')
            ->where('academe_points', '>=', 1200)
            ->orderBy('last_name')
            ->limit(5)
            ->get();

        return redirect("admin/products");

        //return view('faculty', compact('faculties', 'faculties_dept', 'faculties_points'));

    }

    public function add_product_form()
    {
        return view('product_create');
    }
}
