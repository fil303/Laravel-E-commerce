@extends('admin.app')
@section('content')
	
					<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="{{ url('/admin/product') }}"><div class="btn @if(Request::path() == 'admin/product' ) bg-success @else btn-primary @endif w-100">Add Product</div></a>
						</div>
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('p-list') }}"><div class="btn btn-primary w-100">Out Of Stock Product list</div></a>
						</div>
					</div>
					<br>

					<div>
						<h3 class="text-center">Add Product</h3>
						<hr>
						<div>
							<form action="{{ route('product-save') }}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="mb-4"> 
									<h5 class="text-center">Select Categorie</h5>


								<div class="mainCat">
									<select name="mainCat" class="panel form-control panel-success">
										@foreach ($cat as $cat)
											<option value="{{ $cat->id }}" class="catid{{ $cat->id }}">{{ $cat->name }}</option>
										@endforeach
											
									</select>

								</div>
			
								<div class="subCat">
								</div>
								@error('subCat')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror



								</div>


								<div class="form-control">
									<label>Product Nane</label>
									<input class="form-control" type="text" name="p_name">
								@error('p_name')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>

								<div class="form-control">
									<label>Product Color</label>
									<select name="color[]" class="form-control selectpicker" multiple data-live-search="true">
									  <option value="Red">Red</option>
									  <option value="Purple">Purple</option>
									  <option value="Pink">Pink</option>
									  <option value="Brown">Brown</option>
									  <option value="White">White</option>
									  <option value="Gray">Gray</option>
									  <option value="Black">Black</option>
									  <option value="Yellow">Yellow</option>
									  <option value="Blue">Blue</option>
									  <option value="Orange">Orange</option>
									  <option value="Green">Green</option>
									  <option value="Violet">Violet</option>
									  <option value="Red-Orange">Red-Orange</option>
									  <option value="Yellow-Orange">Yellow-Orange</option>
									  <option value="Yellow-Green">Yellow-Green</option>
									  <option value="Blue-Green">Blue-Green</option>
									  <option value="Blue-Violet">Blue-Violet</option>
									  <option value="Red-Violet">Red-Violet</option>

									</select>
								@error('color[]')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>

								<div class="form-control">
									<label>Product Price (USD)</label>
									<input class="form-control" type="number" name="price">
								@error('price')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>


								<div class="form-control">
									<label>Product Size</label>
									<select name="p_size[]" class="form-control selectpicker" multiple data-live-search="true">
									  <option value="S" selected>S</option>
									  <option value="M">M</option>
									  <option value="L">L</option>
									  <option value="XL">XL</option>
									  <option value="XXL">XXL</option>
									</select>
								@error('p_size[]')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>


								<div class="form-control">
									<label>Product Stock</label>
									<input class="form-control" type="number" name="p_stock">
								@error('p_stock')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>



								<div class="form-control">
									<label>Product Discription</label>
									<textarea class="form-control" type="text" name="p_description"></textarea>
								@error('p_description')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>


								<div class="form-control">
									<label>Product Image</label>
									<input class="form-control" type="file" name="image">
								@error('image')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>

								<div class="form-control">
									<label for="files">Product Image Gallary</label>
									<input class="form-control" type="file" name="G_image[]" multiple>
								@error('G_image[]')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>

								<div class="form-control">

									<input class="form-control btn btn-primary" type="submit" value="Add Product">
							</div>



							</form>
						</div>
					</div>
<script type="text/javascript">
$(document).ready(function(){
@foreach ($cats as $c)
	$('.catid'+{{ $c->id }}).click(function(e){
	$('.subCat').html('<select name="subCat" class="panel form-control panel-success">@foreach($c->getsub as $catt)<option value="{{ $catt->id }}">{{$catt->name}}</option>@endforeach</select>');


	});
@endforeach
	
	
				
});

</script>
@endsection