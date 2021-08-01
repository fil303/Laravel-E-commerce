@extends('admin.app')
@section('content')



				<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('mainCat') }}"><div class="btn w-100 btn-primary ">Add Main Categorie</div></a>
						</div>
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('subCat') }}"><div class="btn w-100 btn-primary">Add Sub Categorie</div></a>
						</div>

				</div>

				<div>
@php
	{{ $i = 0 ; }}
@endphp
				<ul>

					@foreach ($cats as $cat)
					<li><a href="{{ url('/admin/categorie/main/'.$cat->id) }}">{{ $cat->name }}</a>
									<ul>
									@foreach ($cat->getsub as $sub)
										<li><a href="{{ url('/admin/categorie/sub/'.$sub->id) }}">{{ $sub->name }}</a></li>
									@endforeach
									</ul>
					</li>
					@endforeach
				</ul>
				</div>

@endsection
