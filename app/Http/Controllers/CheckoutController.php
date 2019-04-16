<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Ixudra\Curl\Facades\Curl;

class CheckoutController extends Controller
{
    public function checkout() {
        $cart = Session::get('cart');
        return view('checkout', compact('cart'));
    }
    public function checkoutForm(Request $request) {
        $cart = Session::get('cart');
        $order = Order::create([
            'cart' => serialize($cart),
            'value' =>$cart->totalPrice,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'comment' =>$request->input('comment'),
            'cash' =>$request->input('cash'),
            'status' => 'default',
            'client_email' => $request->input('email'),
        ]);
        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'client_email' => $request->input('email'),
            'amount' => $cart->totalPrice * 100,
            'shop_id' => 4617,
            'currency' => 'USD',
            'description' => 'description',
            'order_id' => 1,
            'debug' => 1,
            'signature' => 'c1ee070b34d13574',
            'language' => 'ru'
        ];
        // Send a POST request to: http://www.foo.com/bar
        $response = Curl::to('https://megakassa.ru/merchant/')
            ->withData($data)
            ->post();
        Session::forget('cart');
        return redirect()->route('success');
    }
    public function success(Request $request) {
        return view('success');
    }
}
