<?php

namespace App\Http\Controllers\Upload;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UploadController extends Controller {
	public function index(Request $r) {

		for ($sub_id = 1; $sub_id <= 27; $sub_id++) {
			foreach ($r->data as $data) {

				Product::create([
					'categories_id' => 9,
					'sub_categories_id' => $sub_id,
					'p_name' => $data['title'],
					'p_code' => rand(5000, 555000),
					'p_color' => 'blue',
					'description' => $data['description'],
					'price' => $data['price'],
					'image' => $data['image'],
				]);
			}
		}

		// 	Product::create([
		// 		'categories_id' => 2,
		// 		'p_name' => $r->data['title'],
		// 		'p_code' => 'red',
		// 		'p_color' => 'blue',
		// 		'description' => $r->data['description'],
		// 		'price' => $r->data['price'],
		// 		'image' => $r->data['image'],
		// 	]);
	}
}
