<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model {
	use HasFactory;
	protected $fillable = [
		'parent_id',
		'name',
		'description',
		'icon',
		'url',
		'status',
		'country_name',
	];

	public function getsub() {
		return $this->hasMany(SubCategorie::class);
	}
	public function getpro() {
		return $this->hasMany(Product::class, 'categories_id', 'id');
	}
}
