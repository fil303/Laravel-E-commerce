@extends('admin.app')
@section('content')


				<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="#"><div class="btn w-100 @if(Request::path() == 'admin/categorie/main-categorie') bg-success @else btn-primary @endif">Add Main Categorie</div></a>
						</div>
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('subCat') }}"><div class="btn w-100 btn-primary">Add Sub Categorie</div></a>
						</div>

				</div>


				<h3 class="text-center">Categorie</h3>
				<form action="{{ route('cat-add') }}" method="post">
						@csrf
						<div class="form-group">
						<label for="name">Categorie Name</label>
						<input class="form-control" placeholder="Enter Name"  type="text" name="name">
						@error('name')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>

						<br>

						 <div class="form-group">
						<label for="discription">Categorie Discription</label>
						<input class="form-control" placeholder="Write a Discription"  type="text" name="description">
						@error('description')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="icon">Categorie Icon</label>
						<input class="form-control" placeholder="Set a Icon"  type="text" name="icon">
						@error('description')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="url">Categorie URL</label>
						<input class="form-control" placeholder="Enter URL"  type="text" name="url">
						@error('url')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="status">Categorie Status</label>
						<input class="form-control" type="number" name="status">
						@error('status')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

  						<div class="form-group">
						<input class="form-control btn-primary " type="submit" value="Add Categorie">
					 	</div>
				</form>


@endsection
