
<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('content')

  <div class="content-wrapper">

    @include('partials.content-header', ['name' => 'menus', 'key' => 'Danh sách'])

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('menus.create' )}}" class="btn btn-success float-right m-2">Thêm</a>
          </div>

          <div class="col-md-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Mã menus</th>
                  <th scope="col">Tên menus</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>

                @foreach($menus as $menu)

                  <tr>
                    <th scope="row">{{ $menu->id }}</th>
                    <td>{{ $menu->name }}</td>
                    <td>
                      <a href="" class="btn btn-default"> Sửa </a>
                      <a href="" class="btn btn-danger"> Xóa </a>
                    </td>
                  </tr>

                @endforeach

              </tbody>
            </table>
          </div>
          <div class="col-md-12">
            {{ $menus->links() }}
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

