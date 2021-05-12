<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Quản lý sản phẩm</title>
@endsection

@section('content')

<div class="content-wrapper">

  <!-- @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Danh sách']) -->

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Danh sách sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách sản phẩm</li>
          </ol>
        </div><!-- /.col -->
        <!-- <div class="col-md-12">
              <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Thêm</a>
            </div> -->
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách sản phẩm</h3>
          <a style="margin-left: 20px;" href="{{ route('product.create') }}" class="btn btn-warning">Thêm mới</a>
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
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Hình Ảnh</th>
                <th>Số lượng còn</th>
                <th>Ngày tạo</th>
                <th style="width: 12%;">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price, 0) }}</td>
                <td><img src="{{url('/images/'.$product->feature_image_path)}}" style="width:100px;height:150px" alt=""></td>
                <td>{{ $product->quantity }}</td>
                <td>{{ date("d-m-Y", strtotime($product->created_at)) }}</td>
                <td>
                  <a href="{{ route('product.edit',['id' => $product->id]) }}" class="btn btn-sm btn-success">Sửa</a>
                  <a href="{{ route('product.delete',['id' => $product->id]) }}" class="btn btn-sm btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Hình Ảnh</th>
                <th>Số lượng còn</th>
                <th>Ngày tạo</th>
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