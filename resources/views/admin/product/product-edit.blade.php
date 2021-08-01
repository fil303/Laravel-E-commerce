@extends('admin.app')
@section('content')
	
					<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="#"><div class="btn w-100 btn-primary">Add Product</div></a>
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
							<form action="{{ route('product-edit') }}" method="post" enctype="multipart/form-data">
								@csrf
								<input class="form-control" value="{{ $product->id }}" type="hidden" name="pid">
								<input class="form-control" value="{{ $product->info->id }}" type="hidden" name="iid">
								<div class="mb-4"> 
									<h5 class="text-center">Select Categorie</h5>



								<div class="mainCat">
									<select name="mainCat" class="panel form-control panel-success">
										@foreach ($cat as $cat)
											<option value="{{ $cat->id }}" class="catid{{ $cat->id }}" {{ $cat->id == $product->categories_id  ? 'selected' : '' }}>{{ $cat->name }}</option>
										@endforeach
											
									</select>

								</div>
			
								<div class="subCat mb-2">

								</div>
								@error('subCat')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror



								</div>


								<div class="form-control">
									<label>Product Nane</label>
									<input class="form-control" value="{{ $product->p_name }}" type="text" name="p_name">
								@error('p_name')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>
@php
	{{ 

		$i = json_decode($product->p_color);
		$j = json_decode($product->info->size);

	 }}
@endphp	
								<div class="form-control">
									<label>Product Color</label>
									<select name="color[]" class="form-control selectpicker" multiple data-live-search="true">
									  <option value="Red" {{ in_array('Red',$i)?'selected
									  ':'' }}>Red</option>
									  <option value="Purple" {{ in_array('Purple',$i)?'selected
									  ':'' }}>Purple</option>
									  <option value="Pink" {{ in_array('Pink',$i)?'selected
									  ':'' }}>Pink</option>
									  <option value="Brown" {{ in_array('Brown',$i)?'selected
									  ':'' }}>Brown</option>
									  <option value="White" {{ in_array('White',$i)?'selected
									  ':'' }}>White</option>
									  <option value="Gray" {{ in_array('Gray',$i)?'selected
									  ':'' }}>Gray</option>
									  <option value="Black" {{ in_array('Black',$i)?'selected
									  ':'' }}>Black</option>
									  <option value="Yellow" {{ in_array('Yellow',$i)?'selected
									  ':'' }}>Yellow</option>
									  <option value="Blue" {{ in_array('Blue',$i)?'selected
									  ':'' }}>Blue</option>
									  <option value="Orange" {{ in_array('Orange',$i)?'selected
									  ':'' }}>Orange</option>
									  <option value="Green" {{ in_array('Green',$i)?'selected
									  ':'' }}>Green</option>
									  <option value="Violet" {{ in_array('Violet',$i)?'selected
									  ':'' }}>Violet</option>
									  <option value="Red-Orange" {{ in_array('Red-Orange',$i)?'selected
									  ':'' }}>Red-Orange</option>
									  <option value="Yellow-Orange" {{ in_array('Yellow-Orange',$i)?'selected
									  ':'' }}>Yellow-Orange</option>
									  <option value="Yellow-Green" {{ in_array('Yellow-Green',$i)?'selected
									  ':'' }}>Yellow-Green</option>
									  <option value="Blue-Green" {{ in_array('Blue-Green',$i)?'selected
									  ':'' }}>Blue-Green</option>
									  <option value="Blue-Violet" {{ in_array('Blue-Violet',$i)?'selected
									  ':'' }}>Blue-Violet</option>
									  <option value="Red-Violet" {{ in_array('Red-Violet',$i)?'selected
									  ':'' }}>Red-Violet</option>

									</select>
								@error('color[]')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>

								<div class="form-control">
									<label>Product Price (USD)</label>
									<input class="form-control" type="number" value="{{ $product->price }}" name="price">
								@error('price')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>


								<div class="form-control">
									<label>Product Size</label>
									<select name="p_size[]" class="form-control selectpicker" multiple data-live-search="true">
									  <option value="S" {{ in_array('S',$j)?'selected
									  ':'' }}>S</option>
									  <option value="M" {{ in_array('M',$j)?'selected
									  ':'' }}>M</option>
									  <option value="L" {{ in_array('L',$j)?'selected
									  ':'' }}>L</option>
									  <option value="XL" {{ in_array('XL',$j)?'selected
									  ':'' }}>XL</option>
									  <option value="XXL" {{ in_array('XXL',$j)?'selected
									  ':'' }}>XXL</option>
									</select>
								@error('p_size[]')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>


								<div class="form-control">
									<label>Product Stock</label>
									<input class="form-control" type="number" value="{{ $product->info->stock }}" name="p_stock">
								@error('p_stock')
								    <div class="alert alert-danger">{{ $message }}</div>
								@enderror
								</div>



								<div class="form-control">
									<label>Product Discription</label>
									<textarea class="form-control" type="text" name="p_description">{{ $product->description }}</textarea>
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
	@if ( $c->id == $product->categories_id )
	$('.subCat').html('<select name="subCat" class="panel form-control panel-success">@foreach($c->getsub as $catt)<option value="{{ $catt->id }}" {{ $catt->id == $product->sub_categories_id ? 'selected':'' }}>{{$catt->name}}</option>@endforeach</select>');
	@endif
	$('.catid'+{{ $c->id }}).click(function(e){
	$('.subCat').html('<select name="subCat" class="panel form-control panel-success">@foreach($c->getsub as $catt)<option value="{{ $catt->id }}">{{$catt->name}}</option>@endforeach</select>');


	});
@endforeach
	
	
				
});

</script>

@endsection