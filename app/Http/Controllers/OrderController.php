<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function place_order(Request $r)
    {
        $order = new Order;
        $order->user_id = Session::get('user_id');
        $order->save();

        $menu = Product::query()
            ->select('*')
            ->where('stock', '>', '0')
            ->get();

        $order_products = [];
        for ($i = 0; $i < count($menu); $i++) {
            $num_ordered = $r->input('order_' . $menu[$i]->product_id);
            if ($num_ordered > 0) {
                $op = new OrderProduct;
                $op->order_id = $order->order_id;
                $op->product_id = $menu[$i]->product_id;
                $op->quantity = $num_ordered;
                $op->save();
                array_push($order_products, $op);
            }
        }

        $receipt = Order::query()
            ->select('name', 'price')
            ->join('orders_products', 'orders.order_id', '=', 'orders_products.order_id')
            ->join('products', 'orders_products.product_id', '=', 'products.product_id')
            ->where('orders.order_id', '=', $order->order_id)
            ->get();

        return view('cafeteria_success', compact('order', 'order_products', 'receipt'));
    }

    public function show_cart()
    {
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
            ->select('products.*')
            ->get();

        return view('add_to_cart', ['cartItems' => $cartItems]);
    }

    public function add_to_cart(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = new Cart();
        $cart->product_id = $product_id;
        $cart->user_id = Session::get('user_id');
        $cart->price = $request->total_price;
        $cart->save();

        // SELECT SUM(storey.perspective_3d_price + storey.floor_plan_price + storey.interior_price + storey.full_set_price) AS total FROM carts JOIN products ON carts.product_id = products.product_id JOIN storey ON products.storey_id = storey.storey_id;

        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
            ->select('products.*', 'carts.*')
            ->get();

        return view('add_to_cart', ['cartItems' => $cartItems]);
    }
}
