@extends('layouts.app')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li><a href="#">Clothing</a></li>
				<li class='active'>Floral Print Buttoned</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n outer-bottom-xs">
<img src="{{ asset('assets/images/banners/LHS-banner.jpg') }}" alt="Image">
</div>


<!-- ============================================== NEWSLETTER ============================================== -->
<div class="sidebar-widget newsletter outer-bottom-small outer-top-vs">
	<h3 class="section-title">Newsletters</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<p>Sign Up for Our Newsletter!</p>
        <form>
        	 <div class="form-group">
			    <label class="sr-only" for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
			  </div>
			<button class="btn btn-primary">Subscribe</button>
		</form>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============================================== NEWSLETTER: END ============================================== -->

<!-- ============================================== Testimonials============================================== -->
<div class="sidebar-widget  outer-top-vs ">
	<div id="advertisement" class="advertisement">
        <div class="item">
            <div class="avatar"><img src="{{ asset('assets/images/testimonials/member1.png') }}" alt="Image"></div>
		<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">John Doe	<span>Abc Company</span>	</div><!-- /.container-fluid -->
        </div><!-- /.item -->

         <div class="item">
         	<div class="avatar"><img src="{{ asset('assets/images/testimonials/member3.png') }}" alt="Image"></div>
		<div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">Stephen Doe	<span>Xperia Designs</span>	</div>
        </div><!-- /.item -->

        <div class="item">
            <div class="avatar"><img src="{{ asset('assets/images/testimonials/member2.png') }}" alt="Image"></div>
		<div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
		<div class="clients_author">Saraha Smith	<span>Datsun &amp; Co</span>	</div><!-- /.container-fluid -->
        </div><!-- /.item -->

    </div><!-- /.owl-carousel -->
</div>

<!-- ============================================== Testimonials: END ============================================== -->



				</div>
			</div><!-- /.sidebar -->
			<div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
            <div class="detail-block">
			 	<div class="row">

					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
         
      @php 
      {{
          $size = json_decode($data->info->size);
          $imgs = json_decode($data->info->imgs);

      }} 
      @endphp

  

      
            <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="Gallery" href="">
                    <img class="img-responsive" alt="" src="{{ Storage::url('product/main/m/'.$data->image) }}" data-echo="{{ Storage::url('product/main/m/'.$data->image) }}" />
                </a>

            </div>

      
<!-- /.single-product-gallery-item -->

           <!-- /.single-product-gallery-item -->
<!-- /.single-product-gallery-item -->

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                
@foreach ($imgs as $img)
  

                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive" alt="" src="{{ Storage::url('product/s/'.$img) }}" data-echo="{{ Storage::url('product/s/'.$img) }}" />
                    </a>
                </div>
                
@endforeach

            </div><!-- /#owl-single-product-thumbnails -->



        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->
					<div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
						<div class="product-info">
							<h1 class="name">{{$data->p_name}}</h1>

							<div class="rating-reviews m-t-20">
								<div class="row">
                                <div class="col-lg-12">
									<div class="pull-left">
										<div class="rating rateit-small"></div>
									</div>
									<div class="pull-left">
										<div class="reviews">
											<a href="#" class="lnk">(13 Reviews)</a>
										</div>
									</div>
                                    </div>
								</div><!-- /.row -->
							</div><!-- /.rating-reviews -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
                                <div class="col-lg-12">
									<div class="pull-left">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>
									</div>
									<div class="pull-left">
										<div class="stock-box">
											<span class="value">In Stock</span>
										</div>
									</div>
                                    </div>
								</div><!-- /.row -->
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
								{{$data->description}}
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-30">
								<div class="row">


									<div class="col-sm-6 col-xs-6">
										<div class="price-box">
											<span class="price">${{$data->price}}</span>
											<span class="price-strike">$900.00</span>
										</div>
									</div>

									<div class="col-sm-6 col-xs-6">
										<div class="favorite-button m-t-5">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#">
											    <i class="fa fa-heart"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">

									<div class="qty">
										<span class="label">Qty :</span>
									</div>

									<div class="qty-count">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div id="plus" class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
								                  <div id="minus" class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
								                </div>
								                <input id="qnt" type="text" value="1">
							              </div>
							            </div>
									</div>
									{{-- @if (Auth::check()) --}}
									<div class="add-btn">
										<a id="send" href="" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
									</div>
									{{-- @else
									<div class="add-btn">
										<a  href="{{ route('login') }}" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i>Go Login Page To Add Cart</a>
									</div>
									@endif --}}
                </div>
                  </div>
                  <hr>
            
              @if(Auth::check() && Auth::user()->roles[0]->id == 1)
              <div class="add-btn mx-auto"><a class="ms-2 btn btn-primary" href="{{ url('/admin/product_edit/'.$data->id) }}">Edit Product</a></div>

              <form action="{{ url('/admin/product_delete/'.$data->id) }}" method="post">
                @csrf
              <input class="add-btn mx-auto ms-2 btn btn-primary" type="submit" value="Delete Product">
              </form>
              @endif
             

								<!-- /.row -->
						<!-- /.quantity-container -->






						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>

				


			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->







@endsection
@section('script')
<script>

$(document).ready(function(){
  var qnt = $('#qnt').val() ;

  $('#plus').click(function(){
    qnt++ ;
    $('#qnt').val(qnt);
    $("#send").attr("href","{{ url('cart/'.$data->id) }}/"+qnt);
  });

  $('#minus').click(function(){
    qnt-- ;
    $('#qnt').val(qnt);
    $("#send").attr("href","{{ url('cart/'.$data->id) }}/"+qnt);
  });

  $("#send").attr("href","{{ url('cart/'.$data->id) }}/"+qnt);

  $('#qnt').keyup(function(){
    var qnt = $('#qnt').val() ;
    $("#send").attr("href","{{ url('cart/'.$data->id) }}/"+qnt);
  });

 });


</script>
@endsection


