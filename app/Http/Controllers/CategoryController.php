<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;

class CategoryController extends Controller {
	public function index() {
		$cat = Categorie::with('getsub')->get();
		$dataa = Product::paginate(20);
		return view('shop.category', compact('cat', 'dataa'));
	}

	public function product($cid, $sid) {
		$cat = Categorie::with('getsub')->get();
		$data = Product::where('categories_id', $cid)
			->where('sub_categories_id', $sid)->paginate(20);
		return view('shop.product-list', compact('cat', 'data'));
	}
}
