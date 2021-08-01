<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Product;
use App\Models\Product_info;
use App\Models\SubCategorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller {

	//categorie main page
	public function index() {
		$cats = Categorie::with('getsub')->get();
		return view('admin.categorie.categorie', compact('cats'));
	}



	// add main categorie page
	public function main_view() {
		return view('admin.categorie.main-categorie');
	}
	// Add main categorie proccess
	public function main_cat_add(Request $request) {
		$request->validate([
		    'name' => 'required|max:25',
		    'description' => 'required',
		    // 'icon' => 'required|max:40',
		    'url' => 'required',
		    'status' => 'required|numeric',
		    
		]);

		$noti = [
			'icon' => 'success',
			'title' => 'Success',
			'data' => 'Categorie (' . $request->name . ') Add Successfully! :)',
		];

		$cat = Categorie::create([
			'name' => $request->name,
			'description' => $request->description,
			// 'icon' => $request->icon,
			'url' => $request->url,
			'status' => $request->status,
		]);
		return redirect()->route('cat')->with($noti);
	}


	// Add sub categorie page
	public function sub_view() {
		$cats = Categorie::get();
		return view('admin.categorie.sub-categorie', compact('cats'));
	}
	// Add sub categorie proccess
	public function sub_cat_add(Request $request) {
		$request->validate([
		    'name' => 'required|max:25',
		    'description' => 'required',
		    'url' => 'required',
		    'status' => 'required|numeric',
		    
		]);

		$noti = [
			'icon' => 'success',
			'title' => 'Success',
			'data' => 'Sub Categorie (' . $request->name . ') Add Successfully! :)',
		];

		$cats = SubCategorie::create([
			'categorie_id' => $request->cat,
			'name' => $request->name,
			'description' => $request->description,
			'url' => $request->url,
			'status' => $request->status,
		]);
		return redirect()->route('cat')->with($noti);
	}


	// public function cat_view() {
	// 	return view('admin.categorie.sub-categorie');
	// }



	// Main edit view
	public function main_edit($id) {
		$main = true;
		$cat = Categorie::findOrFail($id);
		return view('admin.categorie.edit-delete', compact('cat', 'main'));
	}
	// Main edit proccess
	public function main_edit_update(Request $request) {
		$request->validate([
		    'name' => 'required|max:25',
		    'description' => 'required',
		    // 'icon' => 'required|max:40',
		    'url' => 'required',
		    'status' => 'required|numeric',
		    
		]);

		$noti = [
			'icon' => 'success',
			'title' => 'Success',
			'data' => 'Categorie (' . $request->name . ') Modify Successfully! :)',
		];
		$cat = Categorie::find($request->Catid);
		$cat->name = $request->name;
		$cat->description = $request->description;
		$cat->icon = $request->icon;
		$cat->url = $request->url;
		$cat->status = $request->status;
		$cat->save();
		return redirect()->back()->with($noti);
	}


	// Sub edit view
	public function sub_edit($id) {
		$main = false;
		$cat = SubCategorie::with('cat')->findOrFail($id);
		return view('admin.categorie.edit-delete', compact('cat', 'main'));
	}
	// Sub edit proccess
	public function sub_edit_update(Request $request) {
		$request->validate([
		    'name' => 'required|max:25',
		    'description' => 'required',
		    'url' => 'required',
		    'status' => 'required|numeric',
		    
		]);
		$noti = [
			'icon' => 'success',
			'title' => 'Success',
			'data' => 'Sub Categorie (' . $request->name . ') Modify Successfully! :)',
		];
		$cat = SubCategorie::findOrFail($request->id);
		$cat->categorie_id = $request->pid;
		$cat->name = $request->name;
		$cat->description = $request->description;
		$cat->url = $request->url;
		$cat->status = $request->status;
		$cat->save();
		return redirect()->back()->with($noti);
	}



	// Main delete
	public function delete_main(Request $request) {
		$mainCatid = Categorie::find($request->mc);
		$noti = [
			'icon' => 'success',
			'title' => 'Success',
			'data' => 'Categorie (' . $mainCatid->name . ') Delete Successfully! With All Sub Categories :)',
		];
		$mainCat = Categorie::find($request->mc)->delete();
		if ($mainCat) {
			SubCategorie::where('categorie_id', $request->mc)->delete();
			Product::where('categories_id', $request->mc)->delete();
			Product_info::where('categorie_id', $request->mc)->delete();
		}
		return redirect()->route('cat')->with($noti);
	}
	// Sub delete
	public function delete_sub(Request $request) {
		$subCatid = SubCategorie::find($request->sc);
		$noti = [
			'icon' => 'success',
			'title' => 'Success',
			'data' => 'Sub Categorie (' .$subCatid->name . ') Delete Successfully! :)',
		];
		
		$subCat = SubCategorie::find($request->sc)->delete();
		if ($subCat) {
			Product::where('sub_categories_id', $request->sc)->delete();
			Product_info::where('sub_categorie_id', $request->sc)->delete();
		}
		return redirect()->route('cat')->with($noti);
	}

}
