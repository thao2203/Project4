<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Quản lý đơn hàng</title>
@endsection

@section('content')

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">Chi tiết đơn hàng</h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('order.index') }}">Danh sách đơn hàng</a></li>
                        <li class="breadcrumb-item active">Chỉnh sửa đơn hàng</li>
                    </ol>
                </div><!-- /.col -->
                <div style="background: #FFF6F1;">
                    <form>
                        <h3 style="font-size: 20px;text-align: center!important;line-height: 30px;padding: 5px 10px;text-transform: uppercase;color: #fff;background: #24262b;font-weight: 500;">CHI TIẾT ĐƠN ĐẶT HÀNG</h3>
                        <div class="order_table table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Hình ảnh</th>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody id="editform">
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach($detail_orders as $item)
                                    @php
                                    $subtotal = $item->sumPrice_pro;
                                    $total += $subtotal;
                                    @endphp
                                    <tr style="background: white;" class="quantity">
                                        <td class="id" id="{{$item->id}}" data-price="{{$item->sumPrice_pro/$item->quantity}}" data-img="{{$item->img_pro}}" data-proid="{{$item->productID}}" data-orderid="{{$item->orderID}}" data-name="{{$item->name_pro}}" style="text-align: center!important;">{{ $loop->index+1 }}</td>
                                        <td style="text-align: center!important;"><img style="width: 100px;" src="/images/{{$item->img_pro}}" alt=""></td>
                                        <td style="text-align: center;">{{$item->name_pro}}</td>
                                        <td class="qty" style="text-align: center;"><input type="number" min="0" value="{{$item->quantity}}"> </td>
                                        <td class="delete-pro" style="text-align: center; cursor: pointer;">Xóa</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    </form>
                    <a type="button" id="sub" class="btn btn-primary" style="color: white;">Cập nhật</a>
                    <a type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary" style="color: white;">Thêm sản phẩm</a>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm vào đơn hàng</h5>

                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Chọn sản phẩm</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        @foreach($products as $s)
                                        <option data-img="{{$s->feature_image_path}}" data-id="{{$s->id}}" data-price="{{$s->price}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" id="addpro" class="btn btn-primary">Thêm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->



</div>

</div>
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            language: {
                url: '//cdn.datatables.net/plug-ins/1.10.24/i18n/Vietnamese.json'
            },
            "ordering": false,
        });

        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $("#addpro").click(function() {
            var k = $("#exampleFormControlSelect1 :selected");
            var html = '<tr style="background: white;" class="quantity">\
                            <td  class="id" id="' + k.data("id") + '"\
                                 data-price="' + k.data("price") + '"\
                                 data-img="' + k.data("img") + '" data-proid="' + k.data("id") + '" \
                                 data-orderid="{{$id}}" data-name="' + k.text() + '" \
                                 style="text-align: center!important;">+</td>\
                            <td style="text-align: center!important;"><img style="width: 100px;" src="/images/' + k.data("img") + '" alt=""></td>\
                            <td style="text-align: center;">' + k.text() + '</td>\
                            <td class="qty" style="text-align: center;"><input type="number" min="0" value="1"> </td>\
                            <td class="delete-pro" style="text-align: center;">Xóa</td>\
                        </tr>';
            $("#editform").append(html);
        })
        $("#sub").click(function() {
            var token = {};

            var l = [];
            var id, qty;
            $("#editform tr").each(function() {
                var ql = {
                    orderid: $(this).find(".id").data("orderid"),
                    id: $(this).find(".id").attr("id"),
                    qty: $(this).find(".qty input").val(),
                    img: $(this).find(".id").data("img"),
                    proname: $(this).find(".id").data("name"),
                    proid: $(this).find(".id").data("proid"),
                    sum: $(this).find(".id").data("price") * $(this).find(".qty input").val()
                };
                l.push(ql);
            })

            console.log(JSON.stringify(l))
            console.log(l)
            $.ajax({
                url: "/update-order-post",
                method: "post",
                data: {
                    _token: "{{ csrf_token() }}",
                    arrayList: l
                },
                success: function(s) {
                    console.log(s)
                },
                error: function(s) {
                    console.log(s)
                }
            })

        })
        $(".delete-pro").click(function() {
            $(this).parent().remove()
        })
    });
</script>
@endsection