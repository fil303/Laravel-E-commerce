@extends('layouts.app')

@section('content')



<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Login</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">Sign in</h4>
    <p class="">Hello, Welcome to your account.</p>
    



    <form class="register-form outer-top-xs" role="form">
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
        </div>
        <div class="radio outer-xs">
            <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
            </label>
            <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
    </form>  




</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
    <h4 class="checkout-subtitle">Create a new account</h4>
    <p class="text title-tag-line">Create your new account.</p>



    <form action="{{route('register')}}" method="post" class="register-form outer-top-xs" role="form">
        @csrf
        
        <div class="form-group">
            <label class="info-title" for="exampleInputName">Name <span>*</span></label>
            <input name="name" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input name="email" type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPhone">Phone Number <span>*</span></label>
            <input  name="phone" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>


{{-- xfghfghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhg --}}
        <div class="form-group">
            <label class="info-title" for="exampleInputAddress">Primery Address <span>*</span></label>
            <input name="address" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputState">State <span>*</span></label>
            <input name="state" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputCity">City<span>*</span></label>
            <input name="city" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
        </div>
        
        <div class="form-group">
            <label class="info-title" for="exampleInputZipCode">Zip Code<span>*</span></label>
            <input name="pincode" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
        </div> 

        <div class="form-group">
            <label class="info-title" for="exampleInputCountry">Country<span>*</span></label>
            <input name="country" type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
        </div>

         

{{-- xfghfghhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhg --}}

        <div class="form-group">
            <label class="info-title" for="exampleInputPassword">Password <span>*</span></label>
            <input name="password" type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>
         <div class="form-group">
            <label class="info-title" for="exampleInputPassword">Confirm Password <span>*</span></label>
            <input name="password_confirmation" type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
        </div>
        <input type="submit" value="Sign Up" class="btn-upper btn btn-primary checkout-page-button">
    </form>


    
    
</div>  
<!-- create a new account -->           </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

        <div class="logo-slider-inner"> 
            <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                <div class="item m-t-15">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item m-t-10">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->

                <div class="item">
                    <a href="#" class="image">
                        <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                    </a>    
                </div><!--/.item-->
            </div><!-- /.owl-carousel #logo-slider -->
        </div><!-- /.logo-slider-inner -->
    
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    </div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
        <div class="row our-features-box">
     <div class="container">
      <ul>
        <li>
          <div class="feature-box">
            <div class="icon-truck"></div>
            <div class="content-blocks">We ship worldwide</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-support"></div>
            <div class="content-blocks">call 
              +1 800 789 0000</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-money"></div>
            <div class="content-blocks">Money Back Guarantee</div>
          </div>
        </li>
        <li>
          <div class="feature-box">
            <div class="icon-return"></div>
            <div class="content">30 days return</div>
          </div>
        </li>
        
      </ul>
    </div>
  </div>
        <!-- /.info-boxes --> 




@endsection
