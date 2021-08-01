@extends('admin.app')
@section('content')


				<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('mainCat') }}"><div class="btn w-100 @if(Request::path() == '/categorie/main/{id}' ) bg-success @else btn-primary @endif">Add Main Categorie</div></a>
						</div>
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('subCat') }}"><div class="btn w-100 @if(Request::path() == '/categorie/sub/{id}' ) bg-success @else btn-primary @endif">Add Sub Categorie</div></a>
						</div>
				</div>

@if ($main)
				<h3 class="text-center">Categorie</h3>
				<form action="{{ route('mainCatUp') }}" method="post">
						@csrf
						<input type="hidden" value="{{ $cat->id  }}" name="Catid">
						<div class="form-group">
						<label for="name">Categorie Name</label>
						<input class="form-control" value="{{ $cat->name }}"  type="text" name="name">
						@error('name')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						 <div class="form-group">
						<label for="discription">Categorie Discription</label>
						<input class="form-control" value="{{ $cat->description }}"  type="text" name="description">
						@error('description')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="icon">Categorie Icon</label>
						<input class="form-control" value="{{ $cat->icon }}"  type="text" name="icon">
						@error('icon')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="url">Categorie URL</label>
						<input class="form-control" value="{{ $cat->url }}"  type="text" name="url">
						@error('url')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="status">Categorie Status</label>
						<input class="form-control" type="number" value="{{ $cat->status }}" name="status">
						@error('status')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>


						<input class="form-control text-primary" type="submit" value="Save">



				</form>
				<form action="{{ route('dmain') }}" method="post">
					@csrf
						<input type="hidden" value="{{ $cat->id }}" name="mc">
						<div class="form-group">
						<input class="form-control text-primary" type="submit" value="Delete">
					 	</div>
				</form>

@else
				<h3 class="text-center">Sub-Categorie</h3>

					<form action="{{ route('subCatUp') }}" method="post">
						@csrf
						<input type="hidden" value="{{ $cat->id  }}" name="id">

						<div class="form-group">
						<label for="name">Main Categorie</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="pname" value="{{ $cat->cat->name }}" readonly>
						</div>
						<br>
						<input   type="hidden" name="pid" value="{{ $cat->cat->id }}" >


						<div class="form-group">
						<label for="name">Sub-Categorie Name</label>
						<input class="form-control" placeholder="Enter email"  type="text" name="name" value="{{ $cat->name }}">
						@error('name')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>


						<div class="form-group">
						<label for="discription">Sub-Categorie Discription</label>
						<textarea class="form-control" placeholder="Write a Discription"  type="text" name="description" value="{{ $cat->description }}"> </textarea>
						@error('description')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="url">Sub-Categorie URL</label>
						<input class="form-control" placeholder="Enter URL"  type="text" name="url" value="{{ $cat->url }}">
						@error('url')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<div class="form-group">
						<label for="status">Sub-Categorie Status</label>
						<input class="form-control" type="number" name="status" value="{{ $cat->status }}">
						@error('status')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						</div>
						<br>

						<input type="submit" class="form-control text-primary" value="Save">
					</form>
				<form action="{{ route('dsub') }}" method="post">
					@csrf
					<input type="hidden" value="{{ $cat->id }}" name="sc">
						<div class="form-group">
						<input class="form-control text-primary" type="submit" value="Delete">
					 	</div>
				</form>
@endif


@endsection

