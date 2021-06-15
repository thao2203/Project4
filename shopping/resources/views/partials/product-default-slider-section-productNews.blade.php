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
                                        <div class="image-box">
                                            <a href="/detail/{{$pro->id}}" class="image-link">
                                                <img style="width:270px; height: 270px;" src="{{url('/images/'.$pro->feature_image_path)}}" alt="">
                                            </a>
                                            <div class="tag">
                                                <span>Khuyến mãi</span>
                                            </div>
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
                                                <h6 class="title"><a href="/detail/{{$pro->id}}">{{$pro->name}}</a></h6>
                                                <span class="price"   style="text-decoration: line-through;">{{ number_format($pro->price, 0) }} VNĐ</span>
                                            </div>
                                            <div class="content-right">
                                                <span class="price" style="color:brown">{{ number_format($pro->price-($pro->price*10/100), 0) }} VNĐ</span>
                                            </div>

                                        </div>
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