<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategorie extends Model {
	use HasFactory;
	protected $fillable = [
		'categorie_id',
		'name',
		'description',
		'url',
		'status',
	];

	public function cat() {
		return $this->belongsTo(Categorie::class, 'categorie_id', 'id');
	}
}
