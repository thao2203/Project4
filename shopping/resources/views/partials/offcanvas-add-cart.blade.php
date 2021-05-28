<div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->

    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper">
        <h4 class="offcanvas-title">Giỏ hàng của bạn</h4>
        <ul class="offcanvas-cart">
            @foreach(Session::get('cart') as $item)
            <li class="offcanvas-cart-item-single">
                <div class="offcanvas-cart-item-block">
                    <a href="#" class="offcanvas-cart-item-image-link">
                        <img src="/images/{{$item['product_img']}}" alt="" class="offcanvas-cart-image">
                    </a>
                    <div class="offcanvas-cart-item-content">
                        <a href="#" class="offcanvas-cart-item-link">{{$item['product_name']}}</a>
                        <div class="offcanvas-cart-item-details">
                            <span class="offcanvas-cart-item-details-quantity">{{$item['product_count']}} x </span>
                            <span class="offcanvas-cart-item-details-price">{{number_format($item['product_price'])}} VNĐ</span>
                        </div>
                    </div>
                </div>
                <div class="offcanvas-cart-item-delete text-right">
                    <a href="#" class="offcanvas-cart-item-delete">
                        <i class="fa fa-trash-o"></i>
                    </a>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="offcanvas-cart-total-price">
            <span class="offcanvas-cart-total-price-text">Thành tiền: </span>
            <span class="offcanvas-cart-total-price-value">{{$item['product_count']}}</span>
        </div>
        <ul class="offcanvas-cart-action-button">
            <li><a href="/chi-tiet-gio-hang" class="btn btn-block btn-golden">Chi tiết giỏ hàng</a></li>
            <li><a href="compare.html" class=" btn btn-block btn-golden mt-5">Thanh toán</a></li>
        </ul>
    </div> <!-- End  Offcanvas Addcart Wrapper -->

</div>