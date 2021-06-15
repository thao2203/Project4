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
                        <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
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
                                        <th>Đơn giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach($detail_orders as $item)
                                @php
                                    $subtotal = $item->sumPrice_pro;
                                    $total += $subtotal;
                                 @endphp
                                    <tr style="background: white;">
                                        <td style="text-align: center!important;">{{ $loop->index+1 }}</td>
                                        <td style="text-align: center!important;"><img style="width: 100px;" src="/images/{{$item->img_pro}}" alt=""></td>
                                        <td style="text-align: center;">{{$item->name_pro}}</td>
                                        <td style="text-align: center;">{{$item->quantity}} </td>
                                        <td style="text-align: center;">{{ number_format($item->sumPrice_pro, 0)}} VNĐ</td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot style="background: #F7F6F7;">
                                    <tr>
                                        <th colspan="3">Giá trị đơn hàng :</th>
                                        <td colspan="3" style="text-align: end;"><strong>{{ number_format($total, 0)}} VNĐ</strong></td>
                                    </tr>
                                    <tr>
                                        <th colspan="3">Giá vận chuyển (Cố định) :</th>
                                        <td colspan="3" style="text-align: end;"><strong>50,000 VNĐ</strong></td>
                                    </tr>
                                    <tr class="order_total">
                                        <th colspan="3">Tổng đơn hàng cần thanh toán :</th>
                                        <td colspan="3" style="text-align: end;"><strong>{{ number_format($total + 50000, 0)}} VNĐ</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        
                    </form>
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
    });
</script>
@endsection