<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DetailsController extends Controller {
	public function index($id) {

		$data = Product::with('info')->find($id);
		return view('shop.details', compact('data'));
	}
}
