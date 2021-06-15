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
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_'+id).val();
                var cart_product_name = $('.cart_product_name_'+id).val();
                var cart_product_img = $('.cart_product_img_'+id).val();
                var cart_product_price = $('.cart_product_price_'+id).val();
                var cart_product_qty = $('.cart_product_qty_'+id).val();

                var _token = $('input[name = "_token"]').val();

                $.ajax({
                    url: "{{url('/add-cart-ajax')}}",
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_img: cart_product_img,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token : _token
                    },
                    success:function(data){
                        if (res) {
                            toastr.success("Thêm sản phẩm vào giỏ hàng thành công!")
                            location.reload();
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

                $(".product_here." + $(this).attr("id") + "ncc").show();;
                // $(".product-default-single-item").css("position","unset");
            });

        });

        $("#search-form").submit(function(e) {
            e.preventDefault();
            window.location.href = "/clientsearch/" + $("#key").val()
            //     data= $(this).serialize()
            //     $.ajax({
            //     type: "POST",
            //     url: "/clientsearch",
            //     data: $(this).serialize(),
            //     success: function(data)
            //     {
            //                 console.log(data)
            //     },
            //     error:function(e){
            //         console.log(e)
            //     }
            //      }
            //  )
        });
    </script>
    
</body>

</html>