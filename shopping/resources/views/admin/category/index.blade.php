<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Quản lý loại sản phẩm</title>
@endsection

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Danh sách loại sản phẩm</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách loại sản phẩm</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách loại sản phẩm</h3>
          <a style="margin-left: 20px;" href="{{ route('categories.create') }}" class="btn btn-warning">Thêm mới</a>
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
                <th>Tên loại sản phẩm</th>
                <!-- <th>SEO</th> -->
                <th>Ngày tạo</th>
                <th style="width: 12%;">Thao tác</th>
              </tr>
            </thead>
            <tbody>
              @foreach($categories as $category)
              <tr>
                <td>{{ $category->name }}</td>
                <td>{{ date("d-m-Y", strtotime($category->created_at)) }}</td>
                <td>
                  <a href="{{ route('categories.edit',['id' => $category->id]) }}" class="btn btn-sm btn-success">Sửa</a>
                  <a href="{{ route('categories.delete',['id' => $category->id]) }}" class="btn btn-sm btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th>Tên loại sản phẩm</th>
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
  <!-- /.content -->
</div>
@endsection