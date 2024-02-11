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

   
// public function destroyCartItem($cartItemId)
// {
//     $cartItem = Cart::findOrFail($cartItemId);
//     $cartItem->delete();

//     return back()->with('success', 'Item removed from the cart.');
// }


//     public function destroy($cartId)
// {
//     $cartItem = Cart::findOrFail($cartId);
//     $cartItem->delete();

    
//     return redirect()->back()->with('success', 'Item has been removed from the cart.');
// }
public function show_cart()
{
    $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id') //ganito gawin mo
    ->select('products.*', 'carts.*')
    ->get();

    return view('add_to_cart', ['cartItems' => $cartItems]);
}
    // public function show_cart()
    // {
    //     $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
    //     ->select('products.*', 'carts.*')
    //     ->get();

    // // Generate a CSRF token to include in the delete forms
    // $csrfToken = csrf_token();

    // return view('add_to_cart', [
    //     'cartItems' => $cartItems,
    //     'csrfToken' => $csrfToken
    // ]);
    // }
    public function add_to_cart(Request $request, $product_id)
    {
        $product = Product::find($product_id);
        if (!$product) {
            
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        
        $cart = new Cart();
        $cart->product_id = $product_id;
        $cart->user_id = Session::get('user_id'); // Ensure you have user_id set in the session
        $cart->price = $request->total_price; // Using input method for safety
        $cart->save();
    
        // Instead of returning a view directly, redirect to a route that shows the cart
        // This prevents form re-submission on refresh
        return redirect()->route('show_cart')->with('success', 'Item added to cart successfully.',  ['cart' => $cart]);
    }
    
    // public function add_to_cart(Request $request, $product_id)
    // {
    //     $product = Product::find($product_id);
    //     if (!$product) {
    //         return redirect()->back()->with('error', 'Product not found.');
    //     }

    //     $cart = new Cart();
    //     $cart->product_id = $product_id;
    //     $cart->user_id = Session::get('user_id');
    //     $cart->price = $request->total_price;
    //     $cart->save();

    //     $cartItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
    //         ->select('products.*', 'carts.*')
    //         ->get();

    //     return view('add_to_cart', ['cartItems' => $cartItems]);
    // }

    public function delete_cart(string $id)
    {
        $product = Cart::where('cart_id', '=', $id)
            ->delete();

        return redirect('cart');
    }

    public function place_order(Request $r)
    {
        $order = new Order([
            'user_id' => Session::get('user_id'),
            'status' => 'pending',
            
            'default_value' => 'some_value',
        ]);
        $order->save();
        

        $checkoutItems = Cart::join('products', 'carts.product_id', '=', 'products.product_id')
            ->select('products.*', 'carts.*')
            ->get();

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
            ->paginate(10);
    
        return view('checkout', compact('order'));
    }
    






    
}
