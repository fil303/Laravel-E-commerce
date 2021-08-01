<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Product_info;
use Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class ProductController extends Controller
{

    public function index (){
    	$cat = Categorie::get();
    	$cats = Categorie::with('getsub')->get();
    	return view('admin.product.product',compact('cat','cats'));
    }


    public function save (Request $request){
      
      $lastid ;
      $images = [];


      $noti = [
        'icon' => 'success',
        'title' => 'Success',
        'data' => 'Product Add Successfully! :)',
      ];

      function getCode(){
       
        $codeMaker = rand(1111,9999999999);
        $code = $codeMaker ;
        return $code;
      }
      $request->validate([
              'subCat' => 'required',
              'p_name' => 'required',
              'color' => 'required',
              'price' => 'required|max:40',
              'p_size' => 'required',
              'p_stock' => 'required|numeric',
              'p_description' => 'required',
              // 'image' => 'required | mimes:jpeg,png,jpg,gif | max:1000',
              // 'G_image' => 'required | mimes:jpeg,png,jpg,gif | max:1000',
      ]);
      
    	
    	$imgM = time().'.'.rand(1111,9999999999999).'.'.$request->file('image')->extension();
    	// $saveL = Image::make($request->file('image'))->resize(1200,750)->save(storage_path().'/app/public/product/main/l/'.$imgM);
    	$saveM = Image::make($request->file('image'))->resize(350,350)->save(storage_path().'/app/public/product/main/m/'.$imgM);
    	// $saveS = Image::make($request->file('image'))->resize(50,50)->save(storage_path().'/app/public/product/main/s/'.$imgM);

    	foreach ($request->file('G_image') as $imgs) {

    		$img = time().'.'.rand(1111,9999999999999).'.'.$imgs->extension();

    			// $savel = Image::make($imgs)->resize(1200,750)->save(storage_path().'/app/public/product/l/'.$img);

    			// $savem = Image::make($imgs)->resize(350,350)->save(storage_path().'/app/public/product/m/'.$img);
    	
    			$saves = Image::make($imgs)->resize(50,50)->save(storage_path().'/app/public/product/s/'.$img);
         // array_push([0,2],$imgs);
          $images[]=$img;
    	}
        $code = getCode();
        
       //  $makeUniqe = true;

       // do{
       //    $codeCheck = Product::where('p_code',$code)->first();
       //    if ($codeCheck) {
       //      break;
       //    }else {
            
       //      $code=getCode();
       //    }
       //  } while ($makeUniqe);

        

  


    	if ($saveM && $code) {
        	$product = Product::create([

            'categories_id' => $request->mainCat,
        		'sub_categories_id' => $request->subCat,
        		'p_name' => $request->p_name,
        		'p_code' => $code,
        		'p_color' => json_encode($request->color),
        		'description' => $request->p_description,
        		'price' => $request->price,
        		'image' => $imgM,

        	])->id;

          $lastid = $product;

    	}
      
      if ($lastid && $code) {
      $product_info = Product_info::create([

        'categorie_id' => $request->mainCat,
        'sub_categorie_id' => $request->subCat,
        'product_id' => $lastid,
        'sku' => $code,
        'size' => json_encode($request->p_size),
        'price' => $request->price,
        'stock' => $request->p_stock,
        'imgs' => json_encode($images),

      ]);

      }

    	return redirect()->back()->with($noti);
    }



    public function list (){
      $product = Product::with('info')->get();
      return view('admin.product.product-list',compact('product'));
    }

    public function edit_view ($id){
      $cat = Categorie::get();
      $cats = Categorie::with('getsub')->get();
      $product = Product::with('info')->findOrfail($id);
      return view('admin.product.product-edit',compact('product','cat','cats'));
    }

    public function edit (Request $request){
      $imgM  ;
      $images = [];
      $noti = [
        'icon' => 'success',
        'title' => 'Success',
        'data' => 'Product Update Successfully! :)',
      ];
      $request->validate([
              
              'p_name' => 'required',
              'color' => 'required',
              'price' => 'required|max:40',
              'p_size' => 'required',
              'p_stock' => 'required|numeric',
              'p_description' => 'required',
              'image' => 'mimes:jpeg,png,jpg,gif | max:1000',
              'G_image' => 'mimes:jpeg,png,jpg,gif | max:1000',
      ]);
      
      if ( $request->file('image') ){

        $imgM = time().'.'.rand(1111,9999999999999).'.'.$request->file('image')->extension();
        // $saveL = Image::make($request->file('image'))->resize(1200,750)->save(storage_path().'/app/public/product/main/l/'.$imgM);
        $saveM = Image::make($request->file('image'))->resize(350,350)->save(storage_path().'/app/public/product/main/m/'.$imgM);
        // $saveS = Image::make($request->file('image'))->resize(50,50)->save(storage_path().'/app/public/product/main/s/'.$imgM);
      }


      if( $request->file('G_image') ){

        foreach ($request->file('G_image') as $imgs) {

          $img = time().'.'.rand(1111,9999999999999).'.'.$imgs->extension();

            // $savel = Image::make($imgs)->resize(1200,750)->save(storage_path().'/app/public/product/l/'.$img);

            // $savem = Image::make($imgs)->resize(350,350)->save(storage_path().'/app/public/product/m/'.$img);
        
            $saves = Image::make($imgs)->resize(50,50)->save(storage_path().'/app/public/product/s/'.$img);
           // array_push([0,2],$imgs);
            $images[]=$img;
        }
      }
// dd($request);
        $product = Product::find($request->pid);

            $product->categories_id = $request->mainCat;
            $product->sub_categories_id = $request->subCat;
            $product->p_name = $request->p_name;
            $product->p_color = json_encode($request->color);
            $product->description = $request->p_description;
            $product->price = $request->price;
      if ( $request->file('image') ){
            $product->image = $imgM;
      }
            $product->save();
  
      $product_info = Product_info::find($request->iid);

        $product_info->categorie_id = $request->mainCat;
        $product_info->sub_categorie_id =$request->subCat;
        $product_info->product_id = $request->pid;
        $product_info->size = json_encode($request->p_size);
        $product_info->price = $request->price;
        $product_info->stock = $request->p_stock;
              if ( $request->file('G_image') ){
        $product_info->imgs = json_encode($images); 
              }
        $product_info->save();

        
      return redirect()->back()->with($noti);

    }

    public function distroy ($id){
      $noti = [
        'icon' => 'success',
        'title' => 'Success',
        'data' => 'Product Update Successfully! :)',
      ];

      $product = Product::find($id)->delete();
      $product_info = Product_info::where('product_id' ,$id)->delete();

      return redirect()->route('categorie')->with($noti);
    }


}
