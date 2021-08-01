<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('boot/css.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>ADMIN DASHBORD</title>
</head>
<body>
	<div class="container">
		<div class="row" style="color:black;">
			<!-- navigator start-->
			<div class="col-md-3 col-sm-12 bg-primary">

				<div class=" btn w-100 text-center mt-2 @if(Request::path() == 'aa') bg-success @endif">
					Dashbord
				</div>
				<hr>
				<div class="btn btn-primary w-100  text-center ">
					Categorie
				</div>
				<hr>
				<div class="btn btn-primary w-100 text-center">
					Product
				</div>
				<hr>
				<div class="btn btn-primary w-100 text-center">
					Order
				</div>
				<hr>
				<div class="btn btn-primary w-100 text-center">
					Add Offer
				</div>
				<hr>
				<div class="btn btn-primary w-100 text-center">
					Dashbord
				</div>
				<hr>
				<div class=" btn btn-primary w-100 text-center">
					Dashbord
				</div>
				<hr>


			</div>
				<!--style="margin-left: 5px" navigator stop-->
				<!-- body start -->




					{{-- For Dashbord --}}

			{{-- <div  class=" ms-3 col-md-8 col-sm-12 bg-success ">

				<h1 class="text-center">Wellcome</h1>
				<h4 class="text-center">Israfil Hossain</h4>


			</div> --}}

					{{-- For Dashbord --}}




			<div style="background-image: url({{ asset('bg.jpg') }});background-size: cover;"  class=" ms-3 col-md-8 col-sm-12 bg-success ">

				<h1 class="text-center">Wellcome</h1>
				<h4 class="text-center">Israfil Hossain</h4>

{{-- ///////        Categorie         /////////// --}}
				{{--<ul>
					<li>Computer <ul>
									<li>SFh</li>
									<li>GHSDF</li>
									<li>SDFGSDFG</li>
								 </ul>
					</li>
					<li>Shkow   <ul>
									<li>SFh</li>
									<li>GHSDF</li>
									<li>SDFGSDFG</li>
								</ul>
					</li>
					<li>Mobuke  <ul>
									<li>SFh</li>
									<li>GHSDF</li>
									<li>SDFGSDFG</li>
								</ul>
					</li>
					<li>Men Cloth <ul>
									<li>SFh</li>
									<li>GHSDF</li>
									<li>SDFGSDFG</li>
								  </ul>
					</li>

				</ul> --}}

					{{-- Add Categorie Start --}}
				{{--<div>
					<h3 class="text-center">Categorie</h3>
					<form>
						@csrf
						<div class="form-group">
						<label for="name">Categorie Name</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="cname">
						</div>
						<br>

						 <div class="form-group">
						<label for="discription">Categorie Discription</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="cdiscription">
						</div>
						<br>

						<div class="form-group">
						<label for="icon">Categorie Icon</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="cicon">
						</div>
						<br>

						<div class="form-group">
						<label for="url">Categorie URL</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="curl">
						</div>
						<br>

						<div class="form-group">
						<label for="status">Categorie Status</label>
						<input class="form-control" type="number" name="cstatus">
						</div>
						<br>

  						<div class="form-group">
						<input class="form-control text-primary" type="submit" value="Add Categorie">
					 	</div>
					</form>
				</div> --}}
				{{-- Add Categorie Stop --}}
{{-- <br><br><br> --}}

				{{-- Add Sub-Categorie Start --}}
				{{-- <div class="">
					<h3 class="text-center">Sub-Categorie</h3>
					<form>
						@csrf

						<select class="form-control">
							<option value="">name </option>
							<option value="">name </option>
							<option value="">name </option>
							<option value="">name </option>
						</select>
						<br>

						<div class="form-group">
						<label for="name">Sub-Categorie Name</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="sname">
						</div>
						<br>


						<div class="form-group">
						<label for="discription">Sub-Categorie Discription</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="sdiscription">
						</div>
						<br>

						<div class="form-group">
						<label for="url">Sub-Categorie URL</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="surl">
						</div>
						<br>

						<div class="form-group">
						<label for="status">Sub-Categorie Status</label>
						<input class="form-control" type="number" name="sstatus">
						</div>
						<br>

						<input type="submit" class="form-control text-primary" value="Add Sub-Categorie">
					</form>
				</div> --}}
				{{-- Add Sub-Categorie Stop --}}
{{-- <br><br><br> --}}
                {{-- Edit Categorie Start --}}
				{{-- <div>
					<div>
					<h3 class="text-center">Edit Categorie</h3>
					<form>
						@csrf
						@if(true)
						<select class="form-control">
							<option value="">name </option>
							<option value="">name </option>
							<option value="">name </option>
							<option value="">name </option>
						</select>
						@endif
						<br>

						<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="sname">
						</div>
						<br>


						<div class="form-group">
						<label for="discription">Discription</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="sdiscription">
						</div>
						<br>

						<div class="form-group">
						<label for="url">URL</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="surl">
						</div>
						<br>

						@if(true)
						<div class="form-group">
						<label for="icon">Icon</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="cicon">
						</div>
						<br>
						@endif

						<div class="form-group">
						<label for="status">Status</label>
						<input class="form-control" type="number" name="sstatus">
						</div>
						<br>
						<input type="submit" class="form-control text-primary" value="Delete">
						<br>
						<input type="submit" class="form-control text-primary" value="Save">
					</form>
					</div>
				</div> --}}
				{{-- Edit Categorie Stop --}}

{{-- ///////       END Categorie         /////////// --}}

{{-- //////////      Product      //////////// --}}


				{{-- 	<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="#"><div class="btn btn-primary w-100">Add Product</div></a>
						</div>
						<div class="col-sm-12 col-md-6">
							<a href="#"><div class="btn btn-primary w-100">Out Of Stock Product list</div></a>
						</div>
					</div>
					<br> --}}



{{-- //////////      Product  Insert Edit    //////////// --}}


					{{-- <div>
						<h3 class="text-center">Add Product</h3>
						<hr>
						<div>
							<form action="" method="" enctype="multipart/form-data">
								<div class="mb-4"> --}}
									{{-- <h5 class="text-center">Select Categorie</h5> --}}


								{{--	<div class="input-group mb-1">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="inputGroupSelect01">Select Categorie</label>
									  </div>
									  <select class="custom-select" id="inputGroupSelect01">
									    <option selected>Choose...</option>
									    <option value="1">One</option>
									    <option value="2">Two</option>
									    <option value="3">Three</option>
									  </select>
									</div>




								</div>



								<div class="form-control">
									<label>Product Nane</label>
									<input class="form-control" type="text" name="p_name">
								</div>

								<div class="form-control">
									<label>Product Color</label>
									<select name="color" class="form-control selectpicker" multiple data-live-search="true">
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
								</div>

								<div class="form-control">
									<label>Product Price (USD)</label>
									<input class="form-control" type="number" name="price">
								</div>


								<div class="form-control">
									<label>Product Size</label>
									<select name="p_size" class="form-control selectpicker" multiple data-live-search="true">
									  <option value="S" selected>S</option>
									  <option value="M">M</option>
									  <option value="L">L</option>
									  <option value="XL">XL</option>
									  <option value="XXL">XXL</option>
									</select>
								</div>


								<div class="form-control">
									<label>Product Stock</label>
									<input class="form-control" type="number" name="p_stock">
								</div>



								<div class="form-control">
									<label>Product Discription</label>
									<textarea class="form-control" type="text" name="p_discription"></textarea>
								</div>


								<div class="form-control">
									<label>Product Image</label>
									<input class="form-control" type="file" name="image">
								</div>

								<div class="form-control">
									<label for="files">Product Image Gallary</label>
									<input class="form-control" type="file" name="G_image" multiple>
								</div>

								<div class="form-control">

									<input class="form-control btn btn-primary" type="submit" value="Add Product">
								</div>




							</form>
						</div>
					</div> --}}

{{-- //////////      Product  Insert Edit    //////////// --}}

{{-- //////////      Product  list    //////////// --}}


					<div class="row">

						<div class="col-sm-12 col-md-3">
							<div>
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>
							<div>
								<h4>Football Max Goll 3000</h4>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div>
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>
							<div>
								<h4>Football Max Goll 3000</h4>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div>
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>
							<div>
								<h4>Football Max Goll 3000</h4>
							</div>
						</div>
						<div class="col-sm-12 col-md-3">
							<div>
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>
							<div>
								<h4>Football Max Goll 3000</h4>
							</div>
						</div>

					</div>


{{-- //////////      Product  list stop    //////////// --}}






{{-- //////////     END Product      //////////// --}}
{{-- //////////     Start Order      //////////// --}}

    				<div>
    					<div class="row">
    						<div class="col-md-4 btn btn-primary w-100 ms-1">NEW</div>
    						<div class="col-md-4 btn btn-primary w-100 ms-1">PROCESSING</div>
    						<div class="col-md-4 btn btn-primary w-100 ms-1">DELIVERED</div>
    					</div>
    				</div>

    				<br>

					<div class="overflow-hidden">

						<div class="row mb-1 align-items-center">

							<div class="col-md-3">
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>

							<div class="col-md-3 ">
								<h5>Football MAx 30363</h5>
								<h6>Price : $5000</h6>
								<h6>Qnt : 5</h6>
							</div>

							<div class="col-md-3">
								<h6 class="">Status : New</h6>
							</div>

							<div class="col-md-3">
								<div class="btn btn-primary w-100">Processing</div>
								<hr>
								<div class="btn btn-primary w-100">Delivered</div>
							</div>


						</div>

						<div class="row mb-1 align-items-center">

							<div class="col-md-3">
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>

							<div class="col-md-3 ">
								<h5>Football MAx 30363</h5>
								<h6>Price : $5000</h6>
								<h6>Qnt : 5</h6>
							</div>

							<div class="col-md-3">
								<h6 class="">Status : New</h6>
							</div>

							<div class="col-md-3">
								<div class="btn btn-primary w-100">Processing</div>
								<hr>
								<div class="btn btn-primary w-100">Delivered</div>
							</div>


						</div>

						<div class="row mb-1 align-items-center">

							<div class="col-md-3">
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>

							<div class="col-md-3 ">
								<h5>Football MAx 30363</h5>
								<h6>Price : $5000</h6>
								<h6>Qnt : 5</h6>
							</div>

							<div class="col-md-3">
								<h6 class="">Status : New</h6>
							</div>

							<div class="col-md-3">
								<div class="btn btn-primary w-100">Processing</div>
								<hr>
								<div class="btn btn-primary w-100">Delivered</div>
							</div>


						</div>

						<div class="row mb-1 align-items-center">

							<div class="col-md-3">
								<img class="img-fluid rounded" src="https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg">
							</div>

							<div class="col-md-3 ">
								<h5>Football MAx 30363</h5>
								<h6>Price : $5000</h6>
								<h6>Qnt : 5</h6>
							</div>

							<div class="col-md-3">
								<h6 class="">Status : New</h6>
							</div>

							<div class="col-md-3">
								<div class="btn btn-primary w-100">Processing</div>
								<hr>
								<div class="btn btn-primary w-100">Delivered</div>
							</div>


						</div>

					</div>
{{-- //////////     END Order      //////////// --}}








			</div>
			{{-- Colum 2 --}}








		</div>
		<div class=" bg-success"><h4 class="text-center">Marazzo (C) 2021</h4></div>
	</div>
	<!-- body stop -->
<script src="{{ asset('boot/js.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>