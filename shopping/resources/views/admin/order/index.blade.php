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
          <h1 class="m-0 text-dark">Danh sách đơn hàng</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách đơn hàng</li>
          </ol>
        </div><!-- /.col -->
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách đơn hàng</h3>

        </div>
        @if (session('status'))
        <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
          {{ session('status') }}
        </p>
        @endif
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>Chủ đơn hàng</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Trạng thái</th>
                <th style="width: 12%;">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)

              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->phone }}</td>
                @if($order->status==0)
                  <td>
                  <select name="" id="">
                    <option selected value="1">Chưa xác thực</option>
                    <option value="2">Đã xác thực</option>
                    <option value="3">Đã giao hàng</option>
                    <option value="4">Đã thanh toán</option>
                  </select>
                  </td>
                  <td>
                  <a href="{{ route('order.detail',['id' => $order->id]) }}" style="color:white;margin-bottom: 5px;" class="btn btn-sm btn-warning">Xem chi tiết</a>
                  <a href="" class="btn btn-sm btn-success">Sửa</a>
                  <a href="" class="btn btn-sm btn-danger" style="margin-left: 3px;">Xóa</a>
                </td>
                  @elseif($order->status==1)
                  <td>
                  <select name="" id="">
                    <option value="1">Chưa xác thực</option>
                    <option selected value="2">Đã xác thực</option>
                    <option value="3">Đã giao hàng</option>
                    <option value="4">Đã thanh toán</option>
                  </select>
                  </td>
                  <td>
                  <a href="{{ route('order.detail',['id' => $order->id]) }}" class="btn btn-sm btn-default">Xem chi tiết</a>
                  <a href="" class="btn btn-sm btn-success">Sửa</a>
                  <a href="" class="btn btn-sm btn-danger">Xóa</a>
                </td>
                  @elseif($order->status==2)
                  <td>
                  <select name="" id="">
                    <option value="1">Chưa xác thực</option>
                    <option  value="2">Đã xác thực</option>
                    <option selected value="3">Đã giao hàng</option>
                    <option value="4">Đã thanh toán</option>
                  </select>
                  </td>
                  <td>
                  <a href="{{ route('order.detail',['id' => $order->id]) }}" class="btn btn-sm btn-default">Xem chi tiết</a>
                </td>
                  @elseif($order->status==3)
                  <td>
                  <select name="" id="">
                    <option value="1">Chưa xác thực</option>
                    <option  value="2">Đã xác thực</option>
                    <option  value="3">Đã giao hàng</option>
                    <option selected value="4">Đã thanh toán</option>
                  </select>
                  </td>
                  <td>
                  <a href="{{ route('order.detail',['id' => $order->id]) }}" class="btn btn-sm btn-default">Xem chi tiết</a>
                </td>
                  @endif
                </td>
                
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>STT</th>
                <th>Tên hóa đơn</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Trạng thái</th>
                <th style="width: 12%;">Thao tác</th>
              </tr>
            </tfoot>
          </table>

        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>


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