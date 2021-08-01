<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_info extends Model
{
    use HasFactory; 
    protected $fillable = [
        'categorie_id',
        'sub_categorie_id',
        'product_id',
        'sku',
        'size',
        'price',
        'stock',
        'imgs',
        
    ];
}
