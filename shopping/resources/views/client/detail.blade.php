@extends('layouts.client')
@section('title')
<title>Trang chi tiết sản phẩm - HONO</title>
@endsection
@section('content')
<!-- Start Header Area -->
@include('partials.header-section')
<!-- <header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/logo/logo_black.png" alt=""></a>
                                </div>
                            </div>
                            <div class="main-menu menu-color--black menu-hover-color--golden">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                           
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown has-megaitem">
                                            <a href="product-details-default.html">Shop <i class="fa fa-angle-down"></i></a>
                                            
                                            <div class="mega-menu">
                                                <ul class="mega-menu-inner">
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-item-title">Shop Layouts</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                                            <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                                            <li><a href="shop-full-width.html">Full Width</a></li>
                                                            <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                                            <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-item-title">Other Pages</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="empty-cart.html">Empty Cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="compare.html">Compare</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="my-account.html">My Account</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-item-title">Product Types</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="product-details-default.html">Product Default</a></li>
                                                            <li><a href="product-details-variable.html">Product Variable</a></li>
                                                            <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                                            <li><a href="product-details-group.html">Product Group</a></li>
                                                            <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-item-title">Product Types</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                                            <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                                            <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                                            <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                                            <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                                            <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="menu-banner">
                                                    <a href="#" class="menu-banner-link">
                                                        <img class="menu-banner-img" src="assets/images/banner/menu-banner.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog-single-sidebar-left.html">Blog <i class="fa fa-angle-down"></i></a>
                                            
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                                <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                                <li><a href="blog-full-width.html">Blog Full Width</a></li>
                                                <li><a href="blog-list-sidebar-left.html">Blog List Sidebar Left</a></li>
                                                <li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a></li>
                                                <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                                <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                         
                                            <ul class="sub-menu">
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div> 
                            <ul class="header-action-link action-color--black action-hover-color--golden">
                                <li>
                                    <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                        <i class="icon-heart"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                        <i class="icon-bag"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#search">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
<!-- Start Header Area -->

<!-- Start Mobile Header -->
<div class="mobile-header mobile-header-bg-color--golden section-fluid d-lg-block d-xl-none">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <!-- Start Mobile Left Side -->
                <div class="mobile-header-left">
                    <ul class="mobile-menu-logo">
                        <li>
                            <a href="index.html">
                                <div class="logo">
                                    <img src="assets/images/logo/logo_black.png" alt="">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Left Side -->

                <!-- Start Mobile Right Side -->
                <div class="mobile-right-side">
                    <ul class="header-action-link action-color--black action-hover-color--golden">
                        <li>
                            <a href="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#offcanvas-wishlish" class="offcanvas-toggle">
                                <i class="icon-heart"></i>
                                <span class="item-count">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#offcanvas-add-cart" class="offcanvas-toggle">
                                <i class="icon-bag"></i>
                                <span class="item-count">3</span>
                            </a>
                        </li>
                        <li>
                            <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                <i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Mobile Right Side -->
            </div>
        </div>
    </div>
</div>
<!-- End Mobile Header -->

<!--  Start Offcanvas Mobile Menu Section -->
<div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-mobile-menu-wrapper">
        <!-- Start Mobile Menu  -->
        <div class="mobile-menu-bottom">
            <!-- Start Mobile Menu Nav -->
            <div class="offcanvas-menu">
                <ul>
                    <li>
                        <a href="#"><span>Home</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a href="index.html">Home 1</a></li>
                            <li><a href="index-2.html">Home 2</a></li>
                            <li><a href="index-3.html">Home 3</a></li>
                            <li><a href="index-4.html">Home 4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Shop</span></a>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Shop Layout</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="shop-grid-sidebar-left.html">Grid Left Sidebar</a></li>
                                    <li><a href="shop-grid-sidebar-right.html">Grid Right Sidebar</a></li>
                                    <li><a href="shop-full-width.html">Full Width</a></li>
                                    <li><a href="shop-list-sidebar-left.html">List Left Sidebar</a></li>
                                    <li><a href="shop-list-sidebar-right.html">List Right Sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Shop Pages</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="empty-cart.html">Empty Cart</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Product Single</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="product-details-default.html">Product Default</a></li>
                                    <li><a href="product-details-variable.html">Product Variable</a></li>
                                    <li><a href="product-details-affiliate.html">Product Referral</a></li>
                                    <li><a href="product-details-group.html">Product Group</a></li>
                                    <li><a href="product-details-single-slide.html">Product Slider</a></li>
                                    <li><a href="product-details-tab-left.html">Product Tab Left</a></li>
                                    <li><a href="product-details-tab-right.html">Product Tab Right</a></li>
                                    <li><a href="product-details-gallery-left.html">Product Gallery Left</a></li>
                                    <li><a href="product-details-gallery-right.html">Product Gallery Right</a></li>
                                    <li><a href="product-details-sticky-left.html">Product Sticky Left</a></li>
                                    <li><a href="product-details-sticky-right.html">Product Sticky right</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Blogs</span></a>
                        <ul class="mobile-sub-menu">
                            <li>
                                <a href="#">Blog Grid</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="blog-grid-sidebar-left.html">Blog Grid Sidebar left</a></li>
                                    <li><a href="blog-grid-sidebar-right.html">Blog Grid Sidebar Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog-full-width.html">Blog Full Width</a>
                            </li>
                            <li>
                                <a href="#">Blog List</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="blog-list-sidebar-left.html">Blog List Sidebar left</a></li>
                                    <li><a href="blog-list-sidebar-right.html">Blog List Sidebar Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog Single</a>
                                <ul class="mobile-sub-menu">
                                    <li><a href="blog-single-sidebar-left.html">Blog Single Sidebar left</a></li>
                                    <li><a href="blog-single-sidebar-right.html">Blog Single Sidebar Right</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><span>Pages</span></a>
                        <ul class="mobile-sub-menu">
                            <li><a href="faq.html">Frequently Questions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="404.html">404 Page</a></li>
                        </ul>
                    </li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div> <!-- End Mobile Menu Nav -->
        </div> <!-- End Mobile Menu -->

        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>
            </div>

            <address class="address">
                <span>Address: 4710-4890 Breckinridge St, Fayettevill</span>
                <span>Call Us: (+800) 345 678, (+800) 123 456</span>
                <span>Email: yourmail@mail.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <ul class="user-link">
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul>
        </div>
        <!-- End Mobile contact Info -->

    </div> <!-- End Offcanvas Mobile Menu Wrapper -->
</div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

<!-- Start Offcanvas Mobile Menu Section -->
<div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->
    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <!-- Start Mobile contact Info -->
    <div class="mobile-contact-info">
        <div class="logo">
            <a href="index.html"><img src="assets/images/logo/logo_white.png" alt=""></a>
        </div>

        <address class="address">
            <span>Address: 4710-4890 Breckinridge St, Fayettevill</span>
            <span>Call Us: (+800) 345 678, (+800) 123 456</span>
            <span>Email: yourmail@mail.com</span>
        </address>

        <ul class="social-link">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>

        <ul class="user-link">
            <li><a href="wishlist.html">Wishlist</a></li>
            <li><a href="cart.html">Cart</a></li>
            <li><a href="checkout.html">Checkout</a></li>
        </ul>
    </div>
    <!-- End Mobile contact Info -->
</div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

<!-- Start Offcanvas Addcart Section -->
@include('partials.offcanvas-add-cart')
<!-- End  Offcanvas Addcart Section -->

<!-- Start Offcanvas Mobile Menu Section -->
<div id="offcanvas-wishlish" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- ENd Offcanvas Header -->

    <!-- Start Offcanvas Mobile Menu Wrapper -->
    <div class="offcanvas-wishlist-wrapper">
        <h4 class="offcanvas-title">Wishlist</h4>
        <ul class="offcanvas-wishlist">
            <li class="offcanvas-wishlist-item-single">
                <div class="offcanvas-wishlist-item-block">
                    <a href="#" class="offcanvas-wishlist-item-image-link">
                        <img src="assets/images/product/default/home-1/default-1.jpg" alt="" class="offcanvas-wishlist-image">
                    </a>
                    <div class="offcanvas-wishlist-item-content">
                        <a href="#" class="offcanvas-wishlist-item-link">Car Wheel</a>
                        <div class="offcanvas-wishlist-item-details">
                            <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                            <span class="offcanvas-wishlist-item-details-price">$49.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-wishlist-item-delete text-right">
                    <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                </div>
            </li>
            <li class="offcanvas-wishlist-item-single">
                <div class="offcanvas-wishlist-item-block">
                    <a href="#" class="offcanvas-wishlist-item-image-link">
                        <img src="assets/images/product/default/home-2/default-1.jpg" alt="" class="offcanvas-wishlist-image">
                    </a>
                    <div class="offcanvas-wishlist-item-content">
                        <a href="#" class="offcanvas-wishlist-item-link">Car Vails</a>
                        <div class="offcanvas-wishlist-item-details">
                            <span class="offcanvas-wishlist-item-details-quantity">3 x </span>
                            <span class="offcanvas-wishlist-item-details-price">$500.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-wishlist-item-delete text-right">
                    <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                </div>
            </li>
            <li class="offcanvas-wishlist-item-single">
                <div class="offcanvas-wishlist-item-block">
                    <a href="#" class="offcanvas-wishlist-item-image-link">
                        <img src="assets/images/product/default/home-3/default-1.jpg" alt="" class="offcanvas-wishlist-image">
                    </a>
                    <div class="offcanvas-wishlist-item-content">
                        <a href="#" class="offcanvas-wishlist-item-link">Shock Absorber</a>
                        <div class="offcanvas-wishlist-item-details">
                            <span class="offcanvas-wishlist-item-details-quantity">1 x </span>
                            <span class="offcanvas-wishlist-item-details-price">$350.00</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-wishlist-item-delete text-right">
                    <a href="#" class="offcanvas-wishlist-item-delete"><i class="fa fa-trash-o"></i></a>
                </div>
            </li>
        </ul>
        <ul class="offcanvas-wishlist-action-button">
            <li><a href="#" class="btn btn-block btn-golden">View wishlist</a></li>
        </ul>
    </div> <!-- End Offcanvas Mobile Menu Wrapper -->

</div> <!-- End Offcanvas Mobile Menu Section -->

<!-- Start Offcanvas Search Bar Section -->
@include('partials.search')
<!-- End Offcanvas Search Bar Section -->

<!-- Offcanvas Overlay -->
<div class="offcanvas-overlay"></div>

<!-- ...:::: Start Breadcrumb Section:::... -->
<div class="breadcrumb-section breadcrumb-bg-color--golden">
    <div class="breadcrumb-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="breadcrumb-title">{{ $detail_products -> name }}</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Trang chủ</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Cửa hàng</a></li>
                                <li class="active" aria-current="page">Trang chi tiết sản phẩm</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- ...:::: End Breadcrumb Section:::... -->

<!-- Start Product Details Section -->
<div class="product-details-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="product-details-gallery-area" data-aos="fade-up" data-aos-delay="0">
                    <!-- Start Large Image -->
                    <div class="product-large-image product-large-image-horaizontal swiper-container">
                        <div class="swiper-wrapper">

                            <div class="product-image-large-image swiper-slide zoom-image-hover img-responsive">
                                <img src="{{url('/images/'.$detail_products->feature_image_path)}}" alt="">
                            </div>

                        </div>
                    </div>
                    <!-- End Large Image -->
                    <!-- Start Thumbnail Image -->
                    <div class="product-image-thumb product-image-thumb-horizontal swiper-container pos-relative mt-5">
                        <div class="swiper-wrapper">
                            <!-- <div class="product-image-thumb-single swiper-slide">
                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-1.jpg" alt="">
                                    </div>
                                    <div class="product-image-thumb-single swiper-slide">
                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-2.jpg" alt="">
                                    </div>
                                    <div class="product-image-thumb-single swiper-slide">
                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-3.jpg" alt="">
                                    </div>
                                    <div class="product-image-thumb-single swiper-slide">
                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-4.jpg" alt="">
                                    </div>
                                    <div class="product-image-thumb-single swiper-slide">
                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-5.jpg" alt="">
                                    </div>
                                    <div class="product-image-thumb-single swiper-slide">
                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-6.jpg" alt="">
                                    </div> -->
                        </div>
                        <!-- Add Arrows -->
                        <!-- <div class="gallery-thumb-arrow swiper-button-next"></div>
                            <div class="gallery-thumb-arrow swiper-button-prev"></div> -->
                    </div>
                    <!-- End Thumbnail Image -->
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="product-details-content-area product-details--golden" data-aos="fade-up" data-aos-delay="200">
                    <!-- Start  Product Details Text Area-->
                    <div class="product-details-text">
                        <input type="text" value="{{$detail_products->id}}" hidden>
                        <h4 class="title">{{ $detail_products -> name }}</h4>
                        <h6 class="product-ref" style="padding-top: 0px;">Nhà cung cấp: <span>{{ $detail_products-> sup_name }}</span></h6>
                    
                        <div class="price" style="text-decoration: line-through; font-size: 14px; margin-bottom: 0px;">{{ number_format($detail_products->price, 0) }} VNĐ</div>
                        <div class="price" style="color:brown">{{ number_format($detail_products->price-($detail_products->price*10/100), 0) }} VNĐ</div>

                    </div> <!-- End  Product Details Text Area-->
                    <!-- Start Product Variable Area -->
                    <div class="product-details-variable" style="margin-top: 0px;padding-top:10px">
                        <h4 class="title">Số lượng kho:</h4>
                        <!-- Product Variable Single Item -->
                        <div class="variable-single-item">
                            <div class="product-stock"> <span class="product-stock-in" style="margin-right: 5px;"><i class="ion-checkmark-circled"></i></span>{{ $detail_products->quantity }} sản phẩm</div>
                        </div>
                        <input type="text" hidden id="product_count" value="{{ $detail_products->quantity }}">
                       
                        <!-- Product Variable Single Item -->
                        <div class="d-flex align-items-center ">
                            <div class="variable-single-item ">
                                <span>Số lượng: </span>
                                <div class="product-variable-quantity">
                                    <input value="1" id="count" type="text">
                                </div>
                            </div>

                            <div class="product-add-to-cart-btn">
                                <!-- <a href="#" data-bs-toggle="modal"  class="btn btn-block btn-lg btn-black-default-hover" data-bs-target="#modalAddcart">+ Thêm vào giỏ hàng</a> -->
                                <button style="margin-top: 8px;width: 200px;height: 49px;" class="check_out btn btn-md btn-golden" data-id="{{$detail_products->id}}" type="button" id="add-to-cart">Thêm vào giỏ hàng</button>
                            </div>

                        </div>
                       
                    </div>
                    <!-- End Product Variable Area -->

                    


                    <!-- Start  Product Details Social Area-->
                    <div class="product-details-social">
                        <span class="title">Chia sẻ sản phẩm </span>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> <!-- End  Product Details Social Area-->
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Product Details Section -->

<!-- Start Product Content Tab Section -->
<div class="product-details-content-tab-section section-top-gap-100" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="product-details-content-tab-wrapper" data-aos="fade-up" data-aos-delay="0">

                    <!-- Start Product Details Tab Button -->
                    <ul class="nav tablist product-details-content-tab-btn d-flex justify-content-center">
                        <li><a class="nav-link active" data-bs-toggle="tab" href="#description">
                                Mô tả
                            </a></li>
                        <!-- <li><a class="nav-link" data-bs-toggle="tab" href="#specification">
                                Chi tiết
                            </a></li> -->
                        <li><a class="nav-link" data-bs-toggle="tab" href="#review">
                                Bình luận
                            </a></li>
                    </ul> <!-- End Product Details Tab Button -->

                    <!-- Start Product Details Tab Content -->
                    <div class="product-details-content-tab">
                        <div class="tab-content">
                            <!-- Start Product Details Tab Content Singel -->
                            <div class="tab-pane active show" id="description">
                                <div class="single-tab-content-item">
                                    <p>
                                    {!! $detail_products -> content !!}
                                    </p>

                                </div>
                            </div> 
                            <!-- Start Product Details Tab Content Singel -->
                            <div class="tab-pane" id="review">
                                <div class="single-tab-content-item">
                                    <!-- Start - Review Comment -->
                                    <ul class="comment">
                                        <!-- Start - Review Comment list-->
                                        <li class="comment-list">
                                            <div class="comment-wrapper">
                                                <div class="comment-img">
                                                    <img src="assets/images/user/image-1.png" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-content-top">
                                                        <div class="comment-content-left">
                                                            <h6 class="comment-name">Kaedyn Fraser</h6>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment-content-right">
                                                            <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>

                                                    <div class="para-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Start - Review Comment Reply-->
                                            <ul class="comment-reply">
                                                <li class="comment-reply-list">
                                                    <div class="comment-wrapper">
                                                        <div class="comment-img">
                                                            <img src="assets/images/user/image-2.png" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="comment-content-top">
                                                                <div class="comment-content-left">
                                                                    <h6 class="comment-name">Oaklee Odom</h6>
                                                                </div>
                                                                <div class="comment-content-right">
                                                                    <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                                </div>
                                                            </div>

                                                            <div class="para-content">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul> <!-- End - Review Comment Reply-->
                                        </li> <!-- End - Review Comment list-->
                                        <!-- Start - Review Comment list-->
                                        <li class="comment-list">
                                            <div class="comment-wrapper">
                                                <div class="comment-img">
                                                    <img src="assets/images/user/image-3.png" alt="">
                                                </div>
                                                <div class="comment-content">
                                                    <div class="comment-content-top">
                                                        <div class="comment-content-left">
                                                            <h6 class="comment-name">Jaydin Jones</h6>
                                                            <ul class="review-star">
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="fill"><i class="ion-android-star"></i></li>
                                                                <li class="empty"><i class="ion-android-star"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="comment-content-right">
                                                            <a href="#"><i class="fa fa-reply"></i>Reply</a>
                                                        </div>
                                                    </div>

                                                    <div class="para-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora inventore dolorem a unde modi iste odio amet, fugit fuga aliquam, voluptatem maiores animi dolor nulla magnam ea! Dignissimos aspernatur cumque nam quod sint provident modi alias culpa, inventore deserunt accusantium amet earum soluta consequatur quasi eum eius laboriosam, maiores praesentium explicabo enim dolores quaerat! Voluptas ad ullam quia odio sint sunt. Ipsam officia, saepe repellat. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> <!-- End - Review Comment list-->
                                    </ul> <!-- End - Review Comment -->
                                    <div class="review-form">
                                        <div class="review-form-text-top">
                                            <h5>ADD A REVIEW</h5>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                        </div>

                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="default-form-box">
                                                        <label for="comment-name">Your name <span>*</span></label>
                                                        <input id="comment-name" type="text" placeholder="Enter your name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="default-form-box">
                                                        <label for="comment-email">Your Email <span>*</span></label>
                                                        <input id="comment-email" type="email" placeholder="Enter your email" required>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="default-form-box">
                                                        <label for="comment-review-text">Your review <span>*</span></label>
                                                        <textarea id="comment-review-text" placeholder="Write a review" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-md btn-black-default-hover" type="submit">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- End Product Details Tab Content Singel -->
                        </div>
                    </div> <!-- End Product Details Tab Content -->

                </div>
            </div>
        </div>
    </div>
</div> <!-- End Product Content Tab Section -->

<!-- Start Product Default Slider Section -->
<div class="product-default-slider-section section-top-gap-100 section-fluid" style="margin-top: 50px;">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">SẢM PHẨM TƯƠNG TỰ
                            </h3>
                            <p>Duyệt qua bộ sưu tập các sản phẩm liên quan của chúng tôi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- End Product Default Single Item -->
                                <!-- Start Product Default Single Item -->
                                @foreach($related_products as $key => $lienquan)
                                <div class="product-default-single-item product-color--golden swiper-slide">
                                    <div class="image-box">
                                        <a href="/detail/{{ $lienquan->id}}" class="image-link">
                                            <img src="{{url('/images/'.$lienquan->feature_image_path)}}" style="width:270px;height:300px" alt="">
                                            <!-- <img src="{{asset('assets/images/product/default/home-1/default-2.jpg')}}" alt=""> -->
                                        </a>
                                        <div class="tag">
                                            <span>Khuyến mại</span>
                                        </div>
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <a href="#" data-bs-toggle="modal" style="font-size: 11px;" data-bs-target="#modalAddcart">Thêm vào giỏ hàng</a>
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
                                            <h6 class="title"><a href="/detail/{{ $lienquan->id}}">{{ $lienquan->name }}</a></h6> <br>
                                            <span class="price" style="text-decoration: line-through;">{{ number_format($lienquan->price, 0) }} VNĐ</span>
                                        </div>
                                        <div class="content-right">
                                            <span class="price" style="color:brown">{{ number_format($lienquan->price-($lienquan->price*10/100), 0) }} VNĐ</span>
                                        </div>

                                    </div>
                                </div>
                               
                                @endforeach

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
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#add-to-cart').on('click', function() {
            var id = $(this).data('id');
            var count = $('#count').val();
            var product_count = $('#product_count').val();
            if (count > product_count) {
                alert("Vượt quá số lượng cho phép");
            } else {
                $.ajax({
                    url: "{{url('/add-to-cart')}}",
                    method: 'post',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id,
                        count
                    },
                    success: function(res) {
                        if (res) {
                            toastr.success("Thêm sản phẩm vào giỏ hàng thành công!")

                        }
                    },
                    error: function(mess) {
                        console.log(mess);
                    }
                })
            }

        });
    });
</script>
<!-- End Product Default Slider Section -->

<!-- Start Footer Section -->
@include('partials.footer-section')
<!-- End Footer Section -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
<div class="modal fade" id="modalAddcart" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col text-right">
                                <button type="button" class="close modal-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"> <i class="fa fa-times"></i></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="modal-add-cart-product-img">
                                            <img class="img-fluid" src="{{asset('assets/images/product/default/home-1/default-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="modal-add-cart-info"><i class="fa fa-check-square"></i>Đã thêm vào giỏ hàng thành công!</div>
                                        <div class="modal-add-cart-product-cart-buttons">
                                            <a href="/chi-tiet-gio-hang">Chi tiết giỏ hàng</a>
                                            <a href="/thanh-toan">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 modal-border">
                                <ul class="modal-add-cart-product-shipping-info">
                                    <li> <strong><i class="icon-shopping-cart"></i>Có 5 sản phẩm trong giỏ hàng của bạn.</strong></li>
                                    <li> <strong>Tổng giá: </strong> <span>$187.00</span></li>
                                    <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">Tiếp tục mua hàng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<!-- End Modal Add cart -->

<!-- Start Modal Quickview cart -->
 @include('partials.modalQuickview') 
<!-- End Modal Quickview cart -->

@endsection