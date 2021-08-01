<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller {
	public function index() {
		$carts = Cart::instance( auth()->id() )->content();
		return view('shop.checkout',compact('carts'));
	}

	public function order(Request $r) {
		dd($r);
	}
}
