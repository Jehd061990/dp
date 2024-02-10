<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\OrderCart;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show_cart()
    {
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
            ->select('products.*', 'carts.*')
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

    public function delete_cart(string $id)
    {
        $product = Cart::where('cart_id', '=', $id)
            ->delete();

        return redirect('/cart'); //dapat dito pupunta
    }

    public function place_order(Request $r)
    {
        $order = new Order();

        $order->user_id = Session::get('user_id');
        $order->status = 'pending';
        $order->save();

        $data = $r->all();
        for ($i = 1; $i < count($data); $i++) {
            $orderCart = new OrderCart;
            $orderCart->order_id = $order->order_id;
            $orderCart->cart_id = $r->input("cart_" . $i);
            $orderCart->save();
        }

        return view('checkout', compact('order'));
    }

    public function view_orders()
    {
        $orders = Order::query()
            ->select('*')
            ->where('user_id', Session::get('user_id'))
            ->orderBy('time_placed', 'DESC')
            ->get();

        return view('checkout', compact('orders'));
    }

    public function view_order(string $id)
    {
        $orders = Order::query()
            ->select('*')
            ->join('order_products', 'order.order_id', '=', 'order_products.order_id')
            ->join('products', 'order_products.product_id', '=', 'products.product_id')
            ->where('order.order_id', '=', $id)
            ->get();


        return view('order_show', compact('orders', 'grand_total', 'progress_percent'));
    }
}
