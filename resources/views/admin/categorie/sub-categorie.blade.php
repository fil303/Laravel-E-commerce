@extends('admin.app')
@section('content')

				<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('mainCat') }}"><div class="btn w-100 btn-primary ">Add Main Categorie</div></a>
						</div>
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('subCat') }}"><div class="btn w-100 @if(Request::path() == 'admin/categorie/sub-categorie') bg-success @else btn-primary @endif">Add Sub Categorie</div></a>
						</div>

				</div>


					<h3 class="text-center">Sub-Categorie</h3>
					<form action="{{ route('sub-add') }}" method="post">
						@csrf
						<select class="custom-select" name="cat" id="inputGroupSelect01">
								<option selected>Choose Categorie</option>
								@foreach ($cats as $cat)
									<option value="{{ $cat->id }}">{{ $cat->name }}</option>
								@endforeach
						</select>

						<br>
						<div class="form-group">
						<label for="name">Sub-Categorie Name</label>
						<input class="form-control" placeholder="Enter Name"  type="text" name="name">
						@error('name')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>


						<div class="form-group">
						<label for="discription">Sub-Categorie Discription</label>
						<input class="form-control" placeholder="Write a Discription"  type="text" name="description">
						@error('description')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="url">Sub-Categorie url</label>
						<input class="form-control" placeholder="Enter url"  type="text" name="url">
						@error('url')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="status">Sub-Categorie Status</label>
						<input class="form-control" type="number" name="status">
						@error('status')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<input type="submit" class="form-control btn-primary" value="Add Sub-Categorie">
					</form>

@endsection