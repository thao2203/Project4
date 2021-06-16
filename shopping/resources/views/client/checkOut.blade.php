@extends('layouts.client')
@section('title')
<title>Trang đặt hàng- HONO</title>
@endsection
@section('content')
<header class="header-section d-none d-xl-block">
    <div class="header-wrapper">
        <div class="header-bottom header-bottom-color--golden section-fluid sticky-header sticky-color--golden">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Start Header Logo -->
                        <div class="header-logo">
                            <div class="logo">
                                <a href="/"><img src={{ asset('assets/images/logo/logo_black.png') }} alt=""></a>
                            </div>
                        </div>
                        <!-- End Header Logo -->

                        <!-- Start Header Main Menu -->
                        <div class="main-menu menu-color--black menu-hover-color--golden">
                            <nav>
                                <ul>
                                    <li class="has-dropdown">
                                        <a class="active main-menu-link" href="/">Trang chủ </i></a>
                                       
                                    </li>
                                    <li class="has-dropdown has-megaitem">
                                        <a href="product-details-default.html">Sản phẩm <i class="fa fa-angle-down"></i></a>
                                        <!-- Mega Menu -->
                                        <div class="mega-menu">
                                            <ul class="mega-menu-inner">                                  
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip(0)->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip(($datas->count()/4))->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip(($datas->count()/2))->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-item">
                                                    <ul class="mega-menu-sub">
                                                        @foreach($datas->skip($datas->count()-($datas->count()/4))->take($datas->count()/4) as $item)
                                                        <li><a href="/categories/{{$item->id}}">{{$item->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="/bai-viet">Bài viết</a>
                                    </li>
                                   
                                    <li>
                                        <a href="/chinh-sach">Về chúng tôi</a>
                                    </li>
                                    <li>
                                        <a href="/lien-he">Liên hệ</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a>Đơn hàng<i class="fa fa-angle-down"></i></a>
                                        <!-- Sub Menu -->
                                        <ul class="sub-menu">
                                <li><a href="/order-clients/0">Chờ xác nhận</a></li>
                                <li><a href="/order-clients/1">Chờ lấy hàng</a></li>
                                <li><a href="/order-clients/2">Đang giao hàng</a></li>
                                <li><a href="/order-clients/3">Đã giao hàng</a></li>

                            </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- End Header Main Menu Start -->

                        <!-- Start Header Action Link -->
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
                            <!-- <li>
                                    <a href="#offcanvas-about" class="offacnvas offside-about offcanvas-toggle">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li> -->
                        </ul>
                        <!-- End Header Action Link -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
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
                    <h3 class="breadcrumb-title">Thanh toán</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="index.html">Trang chủ</a></li>
                                <li><a href="shop-grid-sidebar-left.html">Giỏ hàng</a></li>
                                <li class="active" aria-current="page">Thanh toán</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

<!-- ...:::: Start Checkout Section:::... -->
<div class="checkout-section">
    <div class="container">
        <div class="row">
             
            <!-- User Quick Action Form -->
            <div class="col-12">
                <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="0">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Phản hồi khách hàng?
                        <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_login" aria-expanded="true">Nhấn vào đây để đăng nhập !</a>
                    </h3>
                    <div id="checkout_login" class="collapse" data-parent="#checkout_login">
                        <div class="checkout_info">
                            <p>Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin chi tiết của bạn vào ô bên dưới. Nếu bạn là khách hàng mới, vui lòng chuyển đến phần Lập hóa đơn &amp; Giao hàng.</p>
                            <form action="#">
                                <div class="form_group default-form-box">
                                    <label>Tên người dùng hoặc email<span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="form_group default-form-box">
                                    <label>Tài khoản <span>*</span></label>
                                    <input type="password">
                                </div>
                                <div class="form_group group_3 default-form-box">
                                    <button class="btn btn-md btn-black-default-hover" type="submit">Đăng nhập</button>
                                    <label class="checkbox-default">
                                        <input type="checkbox">
                                        <span>Ghi nhớ</span>
                                    </label>
                                </div>
                                <a href="#">Quên mật khẩu?</a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="user-actions accordion" data-aos="fade-up" data-aos-delay="200">
                    <h3>
                        <i class="fa fa-file-o" aria-hidden="true"></i>
                        Phản hồi khách hàng?
                        <a class="Returning" href="#" data-bs-toggle="collapse" data-bs-target="#checkout_coupon" aria-expanded="true">Bấm vào đây để nhập mã của bạn !</a>

                    </h3>
                    <div id="checkout_coupon" class="collapse checkout_coupon" data-parent="#checkout_coupon">
                        <div class="checkout_info">
                            <form action="#">
                                <input placeholder="Coupon code" type="text">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Áp dụng phiếu giảm giá.</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Quick Action Form -->
        </div>
        <!-- Start User Details Checkout Form -->
        <div class="checkout_form" data-aos="fade-up" data-aos-delay="400">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @elseif(session()->has('error'))
                    <div class="alert alert-success">
                        {{ session()->get('error') }}
                    </div>
                    @endif
                    <form action="{{url('/them-don-hang')}}" method="post">
                        @csrf
                        <h3>Chi tiết thanh toán</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="default-form-box">
                                    <label>Họ & tên <span>*</span></label>
                                    <input name="name" required type="text">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="default-form-box">
                                    <label>Địa chỉ giao hàng<span>*</span></label>
                                    <input name="address" required type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label>Số điện thoại<span>*</span></label>
                                    <input name="phone" required type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="default-form-box">
                                    <label> Địa chỉ email <span>*</span></label>
                                    <input name="email" required type="text">
                                </div>
                            </div>

                            <div class="col-12 mt-3">
                                <div class="order-notes">
                                    <label for="order_note">Ghi chú đơn hàng</label>
                                    <textarea name="note" id="order_note" placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ: những lưu ý đặc biệt khi giao hàng."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="order_button pt-3">
                                <button class="btn btn-md btn-black-default-hover" type="submit">Thanh toán</button>
                            </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form>
                        <h3>Đơn đặt hàng của bạn</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @php
                                    $total = 0;
                                    @endphp
                                    @if(Session::get('cart')==true)
                                    @foreach(Session::get('cart') as $item)
                                    @php
                                    $subtotal = (integer)$item['product_price']*(integer)$item['product_count'];
                                    $total += $subtotal;
                                    @endphp
                                    <tr>
                                        <td> <img style="width: 50px;margin-left: 10px;" src="/images/{{$item['product_img']}}" alt=""></td>
                                        <td> {{$item['product_name']}}</td>
                                        <td> {{$item['product_count']}} </td>
                                        <td> {{ number_format((integer)$item['product_price']*(integer)$item['product_count'], 0)}} VNĐ</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th  colspan="2">Giá trị đơn hàng :</th>
                                        <td colspan="2" style="text-align: end;"><strong>{{ number_format($total, 0)}} VNĐ</strong></td>
                                    </tr>
                                    <tr>
                                        <th  colspan="2">Giá vận chuyển (Cố định) :</th>
                                        <td colspan="2" style="text-align: end;"><strong>50,000 VNĐ</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th colspan="2">Tổng đơn hàng cần thanh toán :</th>
                                        <td colspan="2" style="text-align: end;"><strong>{{ number_format($total + 50000, 0)}} VNĐ</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div> <!-- Start User Details Checkout Form -->
    </div>
</div><!-- ...:::: End Checkout Section:::... -->

<!-- Start Footer Section -->
<!-- Start Footer Section -->
@include('partials.footer-section')
<!-- End Footer Section -->

<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"></button>

<!-- Start Modal Add cart -->
@include('partials.modalAddcart')
<!-- End Modal Add cart -->

<!-- Start Modal Quickview cart -->
<!-- @include('partials.modalQuickview') -->
<!-- End Modal Quickview cart -->
@endsection