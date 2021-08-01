@extends('admin.app')
@section('content')

					<div class="row w-70">
						<div class="col-sm-12 col-md-6">
							<a href="{{ url('/admin/product') }}"><div class="btn btn-primary w-100">Add Product</div></a>
						</div>
						<div class="col-sm-12 col-md-6">
							<a href="{{ route('p-list') }}"><div class="btn  @if(Request::path() == 'admin/product_list' ) bg-success @else btn-primary @endif w-100">Out Of Stock Product list</div></a>
						</div>
					</div>
					<br>



					<div class="row">
@php
	{{ $i = 0 ; }}
@endphp
@foreach ($product as $data)
@php
	{{ $i++; }}
@endphp
						@if (!$data->info->stock )
							
						
						<div class="col-sm-12 col-md-3">
							<div>
								<img class="img-fluid rounded" src="{{ Storage::url('product/main/m/'.$data->image) }}">
							</div>
							<div>
								<h4>{{ $data->p_name }}</h4>
							</div>
						</div>
						@if ($i == 4)
							</div>	
							<div class="row">
							@php
								{{ $i = 0; }}
							@endphp	
						@endif

							
						@endif
@endforeach
					</div>	
@endsection