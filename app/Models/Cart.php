<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model {
	use HasFactory;
	protected $fillable = [
		'products_id',
		'product_name',
		'image',
		'product_code',
		'product_color',
		'size',
		'price',
		'quantity',
		'user_email',
		'session_id',
	];
}
