<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class subSeeder extends Seeder
{

	// public $data = [ ];


		public $data = [ 'Dresses','Jackets','Sunglasses','Sport','Wear','Blazers',
			'Handbags','Jwellery','Swimwear','Tops','Flats','Winter Wear','NightSuits',
			'Toys &amp; Games','Jeans','Shirts','Shoes','School Bags','Lunch Box','Footwear',
			'Wipes','Sandals','Shorts','Bags','Night Dress','Swim Wear','Toys'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < count($this->data) ; $i++ ) { 
    		
    	
	        SubCategory::create([
	        	'categories_id' => 9,
	        	'name' => $this->data[$i],
	        	'url' => $this->data[$i],
	        ]);

    	}
    }
}
