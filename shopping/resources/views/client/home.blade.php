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
@include('partials.login')
<!-- Offcanvas Overlay -->
<div class="offcanvas-overlay"></div>

<!-- Start Hero Slider Section-->
@include('partials.hero-slider-section')
<!-- End Hero Slider Section-->

<!-- Start Service Section -->
@include('partials.service-promo-section')
<!-- End Service Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid">
        <!-- Start Section Content Text Area -->
        <div class="section-title-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content-gap">
                            <div class="secton-content">
                                <h3 class="section-title">SẢN PHẨM MỚI NHẤT</h3>
                                <p>Đặt hàng trước ngay bây giờ để nhận ưu đãi độc quyền &amp; những món quà</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Section Content Text Area -->
        <div class="product-wrapper aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-slider-default-2rows default-slider-nav-arrow">
                            <!-- Slider main container -->
                            <div class="swiper-container product-default-slider-4grid-2row swiper-container-initialized swiper-container-horizontal swiper-container-multirow">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper" id="swiper-wrapper-ac9dd3aa727fcaaa" aria-live="polite" style="width: 1800px; transform: translate3d(0px, 0px, 0px);">
                                    <!-- Start Product Default Single Item -->
                                    @foreach($products as $pro)
                                    <div class="product-default-single-item product-color--golden swiper-slide swiper-slide-active" role="group" aria-label="1 / 12" style="width: 270px; margin-right: 30px;">
                                    <form>
                                        @csrf
                                    <input type="hidden" value="{{$pro->id}}" class="cart_product_id_{{$pro->id}}">
                                    <input type="hidden" value="{{$pro->name}}" class="cart_product_name_{{$pro->id}}">
                                    <input type="hidden" value="{{$pro->feature_image_path}}" class="cart_product_img_{{$pro->id}}">
                                    <input type="hidden" value="{{$pro->price}}" class="cart_product_price_{{$pro->id}}">
                                    <input type="hidden" value="1" class="cart_product_qty_{{$pro->id}}">
                                    <div class="image-box">
                                            <a href="/detail/{{$pro->id}}" class="image-link">
                                                <img style="width:270px; height: 270px;" src="{{url('/images/'.$pro->feature_image_path)}}" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>Khuyến mãi</span>
                                            </div>
                                            <div class="action-link">
                                                <div class="action-link-left">
                                                    <button type="button" name="add-to-cart" data-id_product="{{$pro->id}}" class="btn add-to-cart">Thêm vào giỏ hàng</button>
                                                    <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Thêm vào giỏ hàng</a> -->
                                                </div>
                                                <div class="action-link-right">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview"><i class="icon-magnifier"></i></a>
                                                    <a href="wishlist.html"><i class="icon-heart"></i></a>
                                                    <a href="compare.html"><i class="icon-shuffle"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="content-left">
                                                <h6 class="title"><a href="/detail/{{$pro->id}}">{{$pro->name}}</a></h6>
                                                <span class="price"   style="text-decoration: line-through;">{{ number_format($pro->price, 0) }} VNĐ</span>
                                            </div>
                                            <div class="content-right">
                                                <span class="price" style="color:brown">{{ number_format($pro->price-($pro->price*10/100), 0) }} VNĐ</span>
                                            </div>

                                        </div>
                                    </form> 
                                        
                                    </div>
                                    @endforeach
                                    <!-- End Product Default Single Item -->
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-ac9dd3aa727fcaaa" aria-disabled="true"></div>
                            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-ac9dd3aa727fcaaa" aria-disabled="false"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Product Default Slider Section -->

<!-- Start Product Default Slider Section -->
@include('partials.product-default-slider-section-bestSellers')


<!-- End Product Default Slider Section -->

<!-- Start Banner Section -->
@include('partials.banner-section')
<!-- End Banner Section -->

<!-- Start Blog Slider Section -->
<div class="blog-default-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">BÀI VIẾT MỚI NHẤT</h3>
                            <p>Trình bày bài viết theo cách tốt nhất để làm nổi bật những khoảnh khắc thú vị của bạn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="blog-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-default-slider default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container blog-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Product Default Single Item -->
                                @foreach($new_blogs as $blog)
                                <div class="blog-default-single-item blog-color--golden swiper-slide">
                                    <div class="image-box">
                                        <a href="/chi-tiet-bai-viet/{{$blog->id}}" class="image-link">
                                            <img class="img-fluid" src="{{url('/images/'.$blog->avt)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="content" style="text-align: justify;">
                                        <h6 class="title"><a href="/chi-tiet-bai-viet/{{$blog->id}}">{{$blog->name}}</a></h6>
                                        <p>{{ \Illuminate\Support\Str::limit($blog->content, 250, $end='...') }}</p>
                                        <div class="inner">
                                            <a href="/chi-tiet-bai-viet/{{$blog->id}}" class="read-more-btn icon-space-left">Đọc thêm <span><i class="ion-ios-arrow-thin-right"></i></span></a>

                                            <ul class="post-meta">
                                                <li>* {{$blog->view}}</li>
                                                <li>{{date("d-m-Y", strtotime($blog->created_at)) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- End Product Default Single Item -->
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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