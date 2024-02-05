<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Storey;
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
        $product->storey_id = $r->input('storey_id');
        $product->design = $r->input('design');
        $product->description = $r->input('description');
        $product->lot_area = $r->input('lot_area');
        $product->title = $r->input('title');
        if ($r->file('image_3d')) {
            $file = $r->file('image_3d');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $product->image_3d = $filename;
        }
        if ($r->file('floor_plan_image')) {
            $file = $r->file('floor_plan_image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $product->floor_plan_image = $filename;
        }
        if ($r->file('interior_image')) {
            $file = $r->file('interior_image');
            $filename = date('YmdHiu') . $file->getClientOriginalName();
            $file->move(public_path('img/products'), $filename);
            $product->interior_image = $filename;
        }

        $product->save();

        return redirect("admin/products");

        //return view('faculty', compact('faculties', 'faculties_dept', 'faculties_points'));

    }

    public function add_product_form()
    {
        return view('product_create');
    }
}
