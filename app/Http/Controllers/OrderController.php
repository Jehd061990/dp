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
        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id') //ganito gawin mo
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

        $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
            ->select('products.*', 'carts.*')
            ->get();

        return view('add_to_cart', ['cartItems' => $cartItems]);
    }

    public function delete_cart(string $id)
    {
        $product = Cart::where('cart_id', '=', $id)
            ->delete();

        return redirect('cart');
    }

    public function place_order(Request $r)
    {
        $order = new Order();
        $order->user_id = Session::get('user_id');
        $order->status = 'pending';
        $order->save();

        $checkoutItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
            ->select('products.*', 'carts.*')
            ->get();

        $data = $r->all();
        // dd($data);

        for ($i = 1; $i < count($data); $i++) {
            $orderCart = new OrderCart;
            $orderCart->order_id = $order->order_id;
            $orderCart->cart_id = $r->input("cart_" . $i);
            $orderCart->save();

            $cartItem = Cart::find($r->input("cart_" . $i));
            if ($cartItem) {
                $cartItem->delete();
            }
        }

        return redirect('checkout');

        // return view('checkout', compact('order'));
    }

    // public function order_placed(string $id)
    // {
    //     $order = new Order();
    //     $order->product_id = 
    //         $order->user_id = Session::get('user_id');
    //     $order->status = 'pending';
    //     $order->save();

    //     return view('checkout', compact('order'));
    // }

    public function view_orders()
    {
        $order = Order::query()
            ->select('*')
            ->where('user_id', Session::get('user_id'))
            ->orderBy('time_placed', 'DESC')
            ->get();

        return view('checkout', compact('order'));
    }
}
