<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	use HasFactory;
	protected $fillable = [
		'categories_id',
		'sub_categories_id',
		'p_name',
		'p_code',
		'p_color',
		'description',
		'price',
		'image',
	];

	public function info() {
		return $this->hasOne(Product_info::class);
	}
}
