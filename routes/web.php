<?php

use App\Models\Categorie;
use Illuminate\Support\Facades\Route;

Route::get('/get',function(){

	dd($a);
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
Route::get('/c',[App\Http\Controllers\CatrsController::class, 'cart']);
Route::get('/aa', function () {
	return view('admin.index');
});

Route::get('/', function () {
	$data = Categorie::with('getsub')->get();
	$product = Categorie::with('getpro')->get()->map(function($cat){
		$cat->setRelation('getpro', $cat->getpro->take(12));
		return $cat;
	});
	return view('welcome', compact('data','product'));
});

Route::get('/upload', function () {
	return view('upload');
});
Route::post('/upload', [App\Http\Controllers\Upload\UploadController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/categorie', [App\Http\Controllers\CategoryController::class, 'index'])->name('categorie');
Route::get('/categorie/{cid}/product/{sid}', [App\Http\Controllers\CategoryController::class, 'product'])->name('product');
Route::get('/details/{id}', [App\Http\Controllers\DetailsController::class, 'index'])->name('details');
Route::get('/cart', [App\Http\Controllers\CatrsController::class, 'index'])->name('cart');
Route::get('/cart/{id}/{qty}', [App\Http\Controllers\CatrsController::class, 'insert'])->name('cart-store');
Route::get('/remove/{rowId}', [App\Http\Controllers\CatrsController::class, 'remove']);
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [App\Http\Controllers\CheckoutController::class, 'order'])->name('order');
Route::get('/order-track', [App\Http\Controllers\OrderTrackController::class, 'index'])->name('order-track');
Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'index'])->name('wishlist');
Route::get('/contuct', [App\Http\Controllers\ContuctController::class, 'index'])->name('contuct');
Route::get('/faq', [App\Http\Controllers\FAQController::class, 'index'])->name('faq');
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'index'])->name('terms');



Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'admin']], function () {
	//Dashbord
	Route::get('/dashbord', function (Request $request) {
		return view('admin.dashbord');
	});

	//Categorie //////////////////////////////////////////////
	Route::get('/categorie', [App\Http\Controllers\Admin\CategorieController::class, 'index'])->name('cat');

	///main view
	Route::get('/categorie/main-categorie', [App\Http\Controllers\Admin\CategorieController::class, 'main_view'])->name('mainCat');
	//main add
	Route::post('/categorie/main-categorie', [App\Http\Controllers\Admin\CategorieController::class, 'main_cat_add'])->name('cat-add');
	//sub view
	Route::get('/categorie/sub-categorie', [App\Http\Controllers\Admin\CategorieController::class, 'sub_view'])->name('subCat');
	//sub add
	Route::post('/categorie/sub-categorie', [App\Http\Controllers\Admin\CategorieController::class, 'sub_cat_add'])->name('sub-add');
	//edit-page
	Route::get('/categorie/main/{id}', [App\Http\Controllers\Admin\CategorieController::class, 'main_edit']);
	Route::get('/categorie/sub/{id}', [App\Http\Controllers\Admin\CategorieController::class, 'sub_edit']);
	//edit update
	Route::post('/main-categorie', [App\Http\Controllers\Admin\CategorieController::class, 'main_edit_update'])->name('mainCatUp');
	Route::post('/sub-categorie', [App\Http\Controllers\Admin\CategorieController::class, 'sub_edit_update'])->name('subCatUp');
	//delete
	Route::post('/main-categorie/delete', [App\Http\Controllers\Admin\CategorieController::class, 'delete_main'])->name('dmain');
	Route::post('/sub-categorie/delete', [App\Http\Controllers\Admin\CategorieController::class, 'delete_sub'])->name('dsub');
	//Categorie Stop//////////////////////////////////////////////
	//Product Start  //////////////////////////////////////////////

	//main view
	Route::get('/product',[App\Http\Controllers\Admin\ProductController::class, 'index']);
	//upload product
	Route::post('/product',[App\Http\Controllers\Admin\ProductController::class, 'save'])->name('product-save');
	Route::get('/product_list',[App\Http\Controllers\Admin\ProductController::class, 'list'])->name('p-list');
	// Edit Product
	// Route::get('/product_list',[App\Http\Controllers\Admin\ProductController::class, 'list'])->name('p-list');
	Route::get('/product_edit/{id}',[App\Http\Controllers\Admin\ProductController::class, 'edit_view']);
	Route::post('/product_edit',[App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('product-edit');

	Route::post('/product_delete/{id}',[App\Http\Controllers\Admin\ProductController::class, 'distroy']);

});