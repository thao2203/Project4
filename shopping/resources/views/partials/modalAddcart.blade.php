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
                                        <a href="cart.html">Xem giỏ hàng</a>
                                        <a href="checkout.html">Tiến hành thanh toán</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-5 modal-border">
                            <ul class="modal-add-cart-product-shipping-info">
                                <li> <strong><i class="icon-shopping-cart"></i> Có 5 sản phẩm trong giỏ hàng của bạn.</strong></li>
                                <li> <strong>
                                    TỔNG GIÁ: </strong> <span>$187.00</span></li>
                                <li class="modal-continue-button"><a href="#" data-bs-dismiss="modal">TIẾP TỤC MUA SẮM</a></li>
                            </ul>
                        </div> -->
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
                            location.reload();
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