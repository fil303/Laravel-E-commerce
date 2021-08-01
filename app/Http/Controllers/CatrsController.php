<?php

namespace App\Http\Controllers;

// use App\Models\Cart;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CatrsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


	public function index() {
		$cart = Cart::instance( auth()->id() )->content();
		$total = Cart::instance( auth()->id() )->initial();
		return view('shop.cart', compact('cart','total'));

	}

	public function insert($id,$qty) {

		$data = Product::where('id', $id)->with('info')->first();


		$Cart = Cart::instance( auth()->id() )->add(['id' => $data->id, 'name' => $data->p_name, 'qty' => intval($qty) , 'price' => $data->price ,'weight' => 0,'options' => ['color' => json_decode($data->p_color),'size' => json_decode($data->info->size),'img' => $data->image,'code' => $data->p_code]]);
		// Cart::instance( auth()->id() )->store(auth()->id());

		// Cart::create([
		// 	'products_id' => $data->id,
		// 	'product_name' => $data->p_name,
		// 	'image' => 'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg',
		// 	'product_code' => $data->p_code,
		// 	'product_color' => $data->p_color,
		// 	'size' => 'M',
		// 	'price' => $data->price,
		// 	'quantity' => 1,
		// 	'user_email' => 'israfil@fil.com',
		// 	'session_id' => session()->getId(),
		// ]);

		return redirect()->back();

	}


	public function remove ($rowId) {
		Cart::instance( auth()->id() )->remove($rowId);
		return redirect()->back();
	}
	// $data->info->size
	public function cart (){
		// Cart::instance('wishlist')->store('username');

		// Cart::add(['rowId' => '456' , 'id' => '293akd', 'name' => 'Product 1', 'qty' => 5, 'price' => 9.99, 'weight' => 550, 'options' => ['size' => 'large']]);
// return Cart::instance( auth()->id() )->destroy();
		// Cart::store('israfil');
		// Cart::restore('israfil');
		// return Cart::content();
		// return Cart::instance( auth()->id() )->total();
		// return Cart::instance( auth()->id() )->initial();
		// return Cart::instance( auth()->id() )->count();
		// return Cart::subtotal();
		// Cart::instance( auth()->id() )->store(auth()->id());
		// return Cart::instance( auth()->id() )->merge(auth()->id(), false, false, true, auth()->id());
		// return Cart::instance( auth()->id() )->erase( auth()->id() );
		// return Cart::instance( auth()->id() )->updated( auth()->id() );
		// Cart::instance( auth()->id() )->remove('53712f9c2ac3e948684da9a43beae7d3');
		return Cart::instance( auth()->id() )->content();
	}
}
