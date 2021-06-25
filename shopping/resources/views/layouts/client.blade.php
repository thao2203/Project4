<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/974cf27236.js" crossorigin="anonymous"></script>
    @yield('title')

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" type="image/png">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/vendor.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('template_client/assets/lib/toastr.min.css')}}">
</head>
<style>
    .disabled {
        pointer-events: none;
        color: antiquewhite;
    }
</style>

<body>
    <!-- Start Header Area -->

    @yield('content')
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{asset('assets/js/vendor/vendor.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/plugins.min.js')}}"></script>
    <script src="{{asset('assets/js/sweetalert.min.js')}}"></script>
    <script src="{{asset('assets/css/sweetalert.css')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('template_client/assets/lib/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
        $(document).ready(function() {

            $('.add-to-cart').click(function() {
                var count = 1;
                var id = $(this).data('id');
                $.ajax({
                    url: "{{url('/add-to-cart')}}",
                    method: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id,
                        count
                    },
                    success: function(data) {
                        var html = '';
                        $.ajax({
                            url: "/cartContent",
                            method: "get",
                            success: function(s) {
                                var total = 0;
                                html += '<ul style="margin-top: 10px;" class="offcanvas-cart">';
                                console.log(s)
                                $(".item-count").html(s.length)
                                for (let index = 0; index < s.length; index++) {
                                    const cartct = s[index];
                                    var x = cartct.product_price * 90 / 100 * cartct.product_count;
                                    total += x;
                                    x = new Intl.NumberFormat('vi-VN', {
                                        style: 'currency',
                                        currency: 'VND'
                                    }).format(x)
                                    console.log(x)

                                    html += '  <li class="offcanvas-cart-item-single">\
                                        <div class="offcanvas-cart-item-block">\
                                            <a href="#" class="offcanvas-cart-item-image-link">\
                                                <img src="/images/' + cartct.product_img + '" alt="" class="offcanvas-cart-image">\
                                            </a>\
                                            <div class="offcanvas-cart-item-content">\
                                                <a href="#" class="offcanvas-cart-item-link">' + cartct.product_name + '</a>\
                                                <div class="offcanvas-cart-item-details">\
                                                    <span class="offcanvas-cart-item-details-quantity">Số lượng : ' + cartct.product_count + '  </span>\
                                                    <br>\
                                                    <span class="offcanvas-cart-item-details-price">Giá : ' + x + ' </span>\
                                                </div>\
                                            </div>\
                                        </div>\
                                        <div class="offcanvas-cart-item-delete text-right">\
                                            <a href="/delete-product/' + cartct.session_id + '" class="offcanvas-cart-item-delete">\
                                                <i class="fa fa-trash-o"></i>\
                                            </a>\
                                        </div>\
                                    </li>';

                                }
                                total = new Intl.NumberFormat('vi-VN', {
                                    style: 'currency',
                                    currency: 'VND'
                                }).format(total)
                                html += ' </ul>\
                                    <div class="offcanvas-cart-total-price">\
                                        <span class="offcanvas-cart-total-price-text">Thành tiền: </span>\
                                        <span class="offcanvas-cart-total-price-value">' + total + ' </span>\
                                    </div>\
                                    <ul class="offcanvas-cart-action-button">\
                                        <li><a href="/chi-tiet-gio-hang" class="btn btn-block btn-golden">Chi tiết giỏ hàng</a></li>\
                                        <li><a href="/thanh-toan" class=" btn btn-block btn-golden mt-5">Thanh toán</a></li>\
                                    </ul>'
                                $("#cart-content-change").html(html);
                            },
                            error: function(e) {
                                console.log(e)
                            }
                        })
                        if (data) {
                            toastr.success("Thêm sản phẩm vào giỏ hàng thành công!")

                        }
                    },
                    error: function(mess) {
                        console.log(mess);
                    }
                });
            });
        });

        $(".check:checkbox").click(function() {
            $(".product_here").hide();
            // console.log($(".product-default-single-item").parents().eq(1))
            $(".check:checkbox:checked").each(function() {

                $(".product_here." + $(this).attr("id") + "ncc").show();

            });

        });

        $("#search-form").submit(function(e) {
            e.preventDefault();
            window.location.href = "/clientsearch/" + $("#key").val()

        });

        $("#searchBlogs").submit(function(e) {
            e.preventDefault();
            window.location.href = "/blogSearch/" + $("#keyBlog").val()

        });
    </script>

</body>

</html>