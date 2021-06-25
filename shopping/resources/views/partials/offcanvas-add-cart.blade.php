<div id="offcanvas-add-cart" class="offcanvas offcanvas-rightside offcanvas-add-cart-section">
    <!-- Start Offcanvas Header -->
    <div class="offcanvas-header text-right">
        <button class="offcanvas-close"><i class="ion-android-close"></i></button>
    </div> <!-- End Offcanvas Header -->

    <!-- Start  Offcanvas Addcart Wrapper -->
    <div class="offcanvas-add-cart-wrapper">
        <h4 class="offcanvas-title">Giỏ hàng của bạn</h4>
       
           
         
        <div id="cart-content-change">
       
            @if(Session::get('cart'))
            <ul style="margin-top: 10px;" class="offcanvas-cart">
                @php
                    $total = 0;
                @endphp
                @foreach(Session::get('cart') as $item)
                    @php
                        $subtotal = (integer)$item['product_price']*90/100*(integer)$item['product_count'];
                        $total += $subtotal;
                    @endphp
                <li class="offcanvas-cart-item-single">
                    <div class="offcanvas-cart-item-block">
                        <a href="#" class="offcanvas-cart-item-image-link">
                            <img src="/images/{{$item['product_img']}}" alt="" class="offcanvas-cart-image">
                        </a>
                        <div class="offcanvas-cart-item-content">
                            <a href="#" class="offcanvas-cart-item-link">{{$item['product_name']}}</a>
                            <div class="offcanvas-cart-item-details">
                                <span class="offcanvas-cart-item-details-quantity">Số lượng : {{$item['product_count']}}  </span>
                                <br>
                                <span class="offcanvas-cart-item-details-price">Giá : {{number_format($item['product_price']*90/100, 0)}} VNĐ</span>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas-cart-item-delete text-right">
                        <a href="{{url('/delete-product/'.$item['session_id'])}}" class="offcanvas-cart-item-delete">
                            <i class="fa fa-trash-o"></i>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="offcanvas-cart-total-price">
                <span class="offcanvas-cart-total-price-text">Thành tiền: </span>
                <span style="color: red;" class="offcanvas-cart-total-price-value">{{ number_format($total, 0)}} VNĐ</span>
            </div>
            <ul class="offcanvas-cart-action-button">
                <li><a href="/chi-tiet-gio-hang" class="btn btn-block btn-golden">Chi tiết giỏ hàng</a></li>
                <li><a href="/thanh-toan" class=" btn btn-block btn-golden mt-5">Thanh toán</a></li>
            </ul>
            @endif
        </div>
    </div> <!-- End  Offcanvas Addcart Wrapper -->
   
</div>