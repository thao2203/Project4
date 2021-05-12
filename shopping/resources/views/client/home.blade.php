@extends('layouts.client')
@section('title')
<title>Website bán đồ gia dụng - HONO</title>
@endsection
@section('content')
    @include('partials.header-section')
    <!-- Start Header Area -->

    <!-- Start Offcanvas Addcart Section -->
    @include('partials.offcanvas-add-cart')
    <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Search Bar Section -->
    @include('partials.search')
    <!-- End Offcanvas Search Bar Section -->

    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- Start Hero Slider Section-->
    @include('partials.hero-slider-section')
    <!-- End Hero Slider Section-->
    
    <!-- Start Service Section -->
    @include('partials.service-promo-section')
    <!-- End Service Section -->

    <!-- Start Product Default Slider Section -->
    @include('partials.product-default-slider-section-productNews')
    <!-- End Product Default Slider Section -->

    <!-- Start Product Default Slider Section -->
    @include('partials.product-default-slider-section-bestSellers')
    <!-- End Product Default Slider Section -->

   <!-- Start Banner Section -->
   @include('partials.banner-section')
   <!-- End Banner Section -->

   <!-- Start Blog Slider Section -->
   @include('partials.blog-default-slider-section')
   <!-- End Blog Slider Section -->

   <!-- Start Instagramr Section -->
   @include('partials.instagram-section')
   <!-- End Instagramr Section -->

    <!-- Start Footer Section -->
    @include('partials.footer-section')
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    @include('partials.modalAddcart')
    <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
    @include('partials.modalQuickview') 
    <!-- End Modal Quickview cart -->
@endsection