@extends('layouts.client')
@section('title')
<title>Trang bài viết - HONO</title>
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
                    <h3 class="breadcrumb-title">TING TING BÀI VIẾT THÚ VỊ</h3>
                    <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                        <nav aria-label="breadcrumb">
                            <ul>
                                <li><a href="/">Trang chủ</a></li>
                                <li><a href="blog-grid-sidebar-left.html">Bài viết</a></li>
                                <!-- <li class="active" aria-current="page">Blog Grid Left Sidebar</li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Blog List Section:::... -->
    <div class="blog-section">
        <div class="container">
            <div class="row flex-column-reverse flex-lg-row-reverse">
                <div class="col-lg-3">
                    <!-- Start Sidebar Area -->
                    <div class="siderbar-section"  data-aos="fade-up"  data-aos-delay="0">

                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget" >
                            <h6 class="sidebar-title">Tìm kiếm</h6>
                            <div class="default-search-style d-flex">
                                <input class="default-search-style-input-box" type="search" placeholder="Tìm kiếm.." required>
                                <button class="default-search-style-input-btn" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <!-- <div class="sidebar-single-widget" >
                            <h6 class="sidebar-title">CATEGORIES</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                   <li ><a href="#">Audio</a></li>
                                   <li ><a href="#">Company</a></li>   
                                   <li ><a href="#">Gallery</a></li>   
                                   <li ><a href="#">Other</a></li>   
                                   <li ><a href="#">Travel</a></li>   
                                   <li ><a href="#"> Uncategorized</a></li>   
                                   <li ><a href="#"> Video</a></li>   
                                   <li ><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>  -->
                        <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget -->
                        <!-- <div class="sidebar-single-widget">
                            <h6 class="sidebar-title">Tags</h6>
                            <div class="sidebar-content">
                                <div class="tag-link">
                                    <a href="#">Technology</a>
                                    <a href="#">Information</a>
                                    <a href="#">Wordpress</a>
                                    <a href="#">Devs</a>
                                    <a href="#">Program</a>
                                </div>
                            </div>
                        </div>  -->
                        <!-- End Single Sidebar Widget -->

                        <!-- Start Single Sidebar Widget --> 
                        <div class="sidebar-single-widget" >
                            <h6 class="sidebar-title">HONO</h6>
                        <div class="sidebar-content">
                            <ul class="sidebar-menu">
                                <li><a href="#">Đăng kí/ Đăng nhập</a></li>
                                <li><a href="#">Danh sách sản phẩm</a></li>
                                <li><a href="#">Giỏ hàng</a></li>
                                <li><a href="#">Chính sách</a></li>
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                        </div> <!-- End Single Sidebar Widget -->
                        <div class="sidebar-single-widget">
                    <div class="row mb-n6">
                        <div class="col-12 mb-6">
                            <!-- Start Product Default Single Item -->
                            <div class="blog-list blog-list-single-item blog-color--golden aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
                                <div class="secton-content">
                                    <h6 class="sidebar-title" >BÀI VIẾT NỔI BẬT
                                    </h6>
                                </div>
                                @foreach($star_blogs as $star)
                                <div class="row" style="padding: 10px 0;">
                                    <div class="col-xl-6 col-md-6">
                                        <div class="image-box">
                                            <a href="/chi-tiet-bai-viet/{{$star->id}}" class="image-link">
                                                <img style="height: 90px;" class="img-fluid" src="{{url('/images/'.$star->avt )}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-md-6" style="padding: 0!important;text-align: justify;">
                                        <div class="content">
                                            <ul style="margin-top:0px; font-size:10px;" class="post-meta">
                                                <li><a href="#" class="author">* {{$star->view}}</a></li>
                                                <li><a href="#" class="date">{{date("d-m-Y", strtotime($star->created_at)) }}</a></li>
                                            </ul>
                                            <h8 class="title"><a style="font-size: 12px;line-height: 0.05;" href="/chi-tiet-bai-viet/{{$star->id}}"> {{$star->name}}</a></h6>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- End Product Default Single Item -->
                        </div>

                    </div>
                </div>
                        <!-- Start Single Sidebar Widget -->
                        <div class="sidebar-single-widget" >
                            <h6 class="sidebar-title">DANH MỤC SẢN PHẨM</h6>
                            <div class="sidebar-content">
                                <ul class="sidebar-menu">
                                    <li>
                                        <ul class="sidebar-menu-collapse">
                                            <!-- Start Single Menu Collapse List -->
                                           <li class="sidebar-menu-collapse-list">
                                               <div class="accordion">
                                                   <a href="#" class="accordion-title collapsed" data-bs-toggle="collapse" data-bs-target="#men-fashion" aria-expanded="false">Men <i class="ion-ios-arrow-right"></i></a>
                                                   <div id="men-fashion" class="collapse">
                                                       <ul class="accordion-category-list">
                                                           <li><a href="#">Dresses</a></li>
                                                           <li><a href="#">Jackets &amp; Coats</a></li>
                                                           <li><a href="#">Sweaters</a></li>
                                                           <li><a href="#">Jeans</a></li>
                                                           <li><a href="#">Blouses &amp; Shirts</a></li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </li> <!-- End Single Menu Collapse List -->
                                       </ul>
                                    </li>
                                   <li ><a href="#">Football</a></li>   
                                   <li ><a href="#"> Men's</a></li>   
                                   <li ><a href="#"> Portable Audio</a></li>   
                                   <li ><a href="#"> Smart Watches</a></li>   
                                   <li ><a href="#">Tennis</a></li>   
                                   <li ><a href="#"> Uncategorized</a></li>   
                                   <li ><a href="#"> Video Games</a></li>   
                                   <li ><a href="#">Women's</a></li>
                                </ul>
                            </div>
                        </div> <!-- End Single Sidebar Widget -->

                    </div> <!-- End Sidebar Area -->
                </div>
                <div class="col-lg-9">
                    <div class="blog-wrapper">
                        <div class="row mb-n6">
                            @foreach($detail_blogs as $blog)
                            <div class="col-md-6 col-12 mb-6">
                                <!-- Start Product Default Single Item -->
                                <div class="blog-list blog-grid-single-item blog-color--golden"  data-aos="fade-up"  data-aos-delay="0">
                                    <div class="image-box">
                                        <a href="/chi-tiet-bai-viet/{{$blog->id}}" class="image-link">
                                            <img class="img-fluid" src="{{url('/images/'.$blog->avt)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <ul class="post-meta">
                                            <li>Tác giả: <a href="#" class="author">{{$blog->user_name }}</a></li>
                                            <li><a href="#" class="date">{{date("d-m-Y", strtotime($blog->created_at)) }}</a></li>
                                        </ul>
                                        <h6 class="title"><a style="font-size: 20px;line-height: 1.4;" href="/chi-tiet-bai-viet/{{$blog->id}}">{{$blog-> name }}</a></h6>
                                        <p>{{ \Illuminate\Support\Str::limit($blog->content, 250, $end='...') }}</p>
                                        <a href="/chi-tiet-bai-viet/{{$blog->id}}" class="read-more-btn icon-space-left">Xem tiếp... <span class="icon"><i class="ion-ios-arrow-thin-right"></i></span></a>
                                    </div>
                                </div>
                                <!-- End Product Default Single Item -->
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Start Pagination -->
                    {{ $detail_blogs->Links("tool.pagination")}}
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Blog List Section:::... -->

    <!-- Start Footer Section -->
    @include('partials.footer-section')
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
    @include('partials.modalAddcart') <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
   @include('partials.modalQuickview') 
    <!-- End Modal Quickview cart -->

    @endsection