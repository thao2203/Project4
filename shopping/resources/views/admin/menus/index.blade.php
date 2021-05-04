<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Quản lý menus</title>
@endsection

@section('content')

<div class="content-wrapper">

  <!-- @include('partials.content-header', ['name' => 'menus', 'key' => 'Danh sách']) -->
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Danh sách menus</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách menus</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Danh sách menus</h3>
          <a style="margin-left: 20px;" href="{{ route('menus.create') }}" class="btn btn-warning">Thêm mới</a>
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
                <th>Tên menus</th>
                <th>Ngày tạo</th>
                <th style="width: 16%;">Thao tác</th>
              </tr>
            </thead>
            <tbody>

              @foreach($menus as $menu)

              <tr>
                <td>{{ $menu->name }}</td>
                <td>{{ $menu->created_at }}</td>
                <td>
                  <a href="{{ route('menus.edit', ['id' => $menu->id]) }}" class="btn btn-success"> Sửa </a>
                  <a href="{{ route('menus.delete', ['id' => $menu->id]) }}" class="btn btn-danger"> Xóa </a>
                </td>
              </tr>

              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Tên menus</th>
                <th>Ngày tạo</th>
                <th style="width: 12%;">Thao tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection