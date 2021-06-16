@extends('layouts.client')
@section('title')
<title>Trang danh mục sản phẩm - HONO</title>
@endsection
@section('content')
<!-- Start Header Area -->
@include('partials.header-section')
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
                                    <img src="{{asset('assets/images/logo/logo_black.png')}}" alt="">
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
                <a href="index.html"><img src="{{asset('assets/images/logo/logo_white.png')}}" alt=""></a>
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
            <a href="index.html"><img src="{{asset('assets/images/logo/logo_white.png')}}" alt=""></a>
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
                        <img src="{{asset('assets/images/product/default/home-1/default-1.jpg')}}" alt="" class="offcanvas-wishlist-image">
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
                        <img src="{{asset('assets/images/product/default/home-2/default-1.jpg')}}" alt="" class="offcanvas-wishlist-image">
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
                        <img src="{{asset('assets/images/product/default/home-3/default-1.jpg')}}" alt="" class="offcanvas-wishlist-image">
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

</div>
<!-- End Offcanvas Mobile Menu Section -->
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
                    <h3 class="breadcrumb-title">{{$category_products[0]->cate_name}}</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/">Trang chủ</a></li>
                                <li class="active" aria-current="page">Danh mục sản phẩm</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Shop Section:::... -->
<div class="shop-section">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-lg-3">
                <!-- Start Sidebar Area -->
                <div class="siderbar-section" data-aos="fade-up" data-aos-delay="0">

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">Loại sản phẩm</h6>
                        <div class="sidebar-content">
                            <ul class="sidebar-menu">
                                @foreach($datas as $data)
                                <li>
                                    <ul class="sidebar-menu-collapse">
                                        <li class="sidebar-menu-collapse-list">
                                            <div class="accordion">
                                                <a href="/categories/{{$data->id}}" class="accordion-title collapsed">{{$data->name}}</a>
                                            </div>
                                        </li> <!-- End Single Menu Collapse List -->
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">BỘ LỌC THEO GIÁ</h6>
                        <div class="sidebar-content">
                            <div id="slider-range"></div>
                            <div class="filter-type-price">
                                <label for="amount">Phạm vi giá:</label>
                                <input style="width: 188px;" readonly type="text" id="amount">
                            </div>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <h6 class="sidebar-title">NHÀ CUNG CẤP</h6>
                        <div class="sidebar-content">
                            <div class="filter-type-select">
                                <ul>
                                    @foreach($all_suppliers as $supplier)
                                    <li>
                                        <label class="checkbox-default" for="brakeParts">
                                            <input type="checkbox"  class="check" id="{{$supplier->id}}">
                                            <span style="width: 235px; text-align: justify;">{{$supplier->name}}</span>
                                        </label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <!-- Start Single Sidebar Widget -->
                    <div class="sidebar-single-widget">
                        <div class="sidebar-content">
                            <a href="product-details-default.html" class="sidebar-banner img-hover-zoom">
                                <img class="img-fluid" src="{{asset('assets/images/banner/side-banner.jpg')}}" alt="">
                            </a>
                        </div>
                    </div> <!-- End Single Sidebar Widget -->

                </div> <!-- End Sidebar Area -->
            </div>
            <div class="col-lg-9">
                <!-- Start Tab Wrapper -->
                <div class="sort-product-tab-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content tab-animate-zoom">
                                    <!-- Start Grid View Product -->
                                    <div class="tab-pane active show sort-layout-single" id="layout-3-grid">
                                        <div class="row">
                                            @foreach($category_products as $product)
                                            <div class=" col-xl-4 col-sm-6 col-12 product_here {{$product->supplier_id}}ncc " price="{{$product->price-($product->price*10/100)}}">
                                                <!-- Start Product Default Single Item -->
                                                <div class="product-default-single-item  product-color--golden" data-aos="fade-up" data-aos-delay="0">
                                                    <div class="image-box">
                                                        <a href="/detail/{{$product->id}}" class="image-link">
                                                            <img src="{{url('/images/'.$product->feature_image_path)}}" style="width:270px;height:300px" alt="">
                                                        </a>
                                                        <div class="action-link">
                                                            <div class="action-link-left">
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart">Thêm vào giỏ hàng</a>
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
                                                            <h6 class="title"><a href="/detail/{{$product->id}}">{{ $product->name }}</a></h6> <br>
                                                            <span class="price" style="text-decoration: line-through;">{{ number_format($product->price, 0) }} VNĐ</span>
                                                        </div>

                                                        <div class="content-right">

                                                            <span class="price" style="color:brown">{{ number_format($product->price-($product->price*10/100), 0) }} VNĐ</span>
                                                        </div>

                                                    </div>
                                                </div>
                                                <!-- End Product Default Single Item -->
                                            </div>
                                            @endforeach
                                        </div>
                                    </div> <!-- End Grid View Product -->
                                    <!-- Start List View Product -->
                                    <div class="tab-pane sort-layout-single" id="layout-list">
                                        <div class="row">
                                            <div class="col-12">
                                                <!-- Start Product Defautlt Single -->
                                                <div class="product-list-single product-color--golden">
                                                    <a href="product-details-default.html" class="product-list-img-link">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-1.jpg')}}" alt="">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-2.jpg')}}" alt="">
                                                    </a>
                                                    <div class="product-list-content">
                                                        <h5 class="product-list-link"><a href="product-details-default.html">KAOREET LOBORTIS SAGIT</a></h5>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                        <span class="product-list-price"><del>$30.12</del> $25.12</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores</p>
                                                        <div class="product-action-icon-link-list">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" class="btn btn-lg btn-black-default-hover">Add to cart</a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview" class="btn btn-lg btn-black-default-hover"><i class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html" class="btn btn-lg btn-black-default-hover"><i class="icon-heart"></i></a>
                                                            <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Product Defautlt Single -->
                                            </div>
                                            <div class="col-12">
                                                <!-- Start Product Defautlt Single -->
                                                <div class="product-list-single product-color--golden">
                                                    <a href="product-details-default.html" class="product-list-img-link">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-3.jpg')}}" alt="">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-4.jpg')}}" alt="">
                                                    </a>
                                                    <div class="product-list-content">
                                                        <h5 class="product-list-link"><a href="product-details-default.html">CONDIMENTUM POSUERE</a></h5>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                        <span class="product-list-price">$95.00</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores</p>
                                                        <div class="product-action-icon-link-list">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" class="btn btn-lg btn-black-default-hover">Add to cart</a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview" class="btn btn-lg btn-black-default-hover"><i class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html" class="btn btn-lg btn-black-default-hover"><i class="icon-heart"></i></a>
                                                            <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Product Defautlt Single -->
                                            </div>
                                            <div class="col-12">
                                                <!-- Start Product Defautlt Single -->
                                                <div class="product-list-single product-color--golden">
                                                    <a href="product-details-default.html" class="product-list-img-link">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-5.jpg')}}" alt="">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-6.jpg')}}" alt="">
                                                    </a>
                                                    <div class="product-list-content">
                                                        <h5 class="product-list-link"><a href="product-details-default.html">ALIQUAM LOBORTIS</a></h5>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                        <span class="product-list-price"> $25.12</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores</p>
                                                        <div class="product-action-icon-link-list">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" class="btn btn-lg btn-black-default-hover">Add to cart</a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview" class="btn btn-lg btn-black-default-hover"><i class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html" class="btn btn-lg btn-black-default-hover"><i class="icon-heart"></i></a>
                                                            <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Product Defautlt Single -->
                                            </div>
                                            <div class="col-12">
                                                <!-- Start Product Defautlt Single -->
                                                <div class="product-list-single product-color--golden">
                                                    <a href="product-details-default.html" class="product-list-img-link">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-7.jpg')}}" alt="">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-8.jpg')}}" alt="">
                                                    </a>
                                                    <div class="product-list-content">
                                                        <h5 class="product-list-link"><a href="product-details-default.html">CONVALLIS QUAM SIT</a></h5>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                        <span class="product-list-price">$75.00 - $85.00</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores</p>
                                                        <div class="product-action-icon-link-list">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" class="btn btn-lg btn-black-default-hover">Add to cart</a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview" class="btn btn-lg btn-black-default-hover"><i class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html" class="btn btn-lg btn-black-default-hover"><i class="icon-heart"></i></a>
                                                            <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Product Defautlt Single -->
                                            </div>
                                            <div class="col-12">
                                                <!-- Start Product Defautlt Single -->
                                                <div class="product-list-single product-color--golden">
                                                    <a href="product-details-default.html" class="product-list-img-link">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-9.jpg')}}" alt="">
                                                        <img class="img-fluid" src="assets/images/product/default/home-1/default-10.jpg')}}" alt="">
                                                    </a>
                                                    <div class="product-list-content">
                                                        <h5 class="product-list-link"><a href="product-details-default.html">DONEC EU LIBERO AC</a></h5>
                                                        <ul class="review-star">
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="fill"><i class="ion-android-star"></i></li>
                                                            <li class="empty"><i class="ion-android-star"></i></li>
                                                        </ul>
                                                        <span class="product-list-price"><del>$25.12</del> $20.00</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ad, iure incidunt. Ab consequatur temporibus non eveniet inventore doloremque necessitatibus sed, ducimus quisquam, ad asperiores</p>
                                                        <div class="product-action-icon-link-list">
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalAddcart" class="btn btn-lg btn-black-default-hover">Add to cart</a>
                                                            <a href="#" data-bs-toggle="modal" data-bs-target="#modalQuickview" class="btn btn-lg btn-black-default-hover"><i class="icon-magnifier"></i></a>
                                                            <a href="wishlist.html" class="btn btn-lg btn-black-default-hover"><i class="icon-heart"></i></a>
                                                            <a href="compare.html" class="btn btn-lg btn-black-default-hover"><i class="icon-shuffle"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- End Product Defautlt Single -->
                                            </div>
                                        </div>
                                    </div> <!-- End List View Product -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Tab Wrapper -->

                <!-- Start Pagination -->
                {{ $category_products->Links("tool.pagination")}}
                <!-- End Pagination -->
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Shop Section:::... -->

<!-- Start Footer Section -->
@include('partials.footer-section')
<!-- End Footer Section -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
@include('partials.modalAddcart')
<!-- End Modal Add cart -->
<script>

</script>
<!-- Start Modal Quickview cart -->
<!-- @include('partials.modalQuickview') -->
<!-- End Modal Quickview cart -->
@endsection