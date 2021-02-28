
<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
  <title>Quản lý sản phẩm</title>
@endsection

@section('content')

  <div class="content-wrapper">

    @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Danh sách'])

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Thêm</a>
          </div>

          <div class="col-md-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Mã sản phẩm</th>
                  <th scope="col">Tên sản phẩm</th>
                  <th scope="col">Giá</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col">Danh mục</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>

             

                  <tr>
                    <th scope="row">1</th>
                    <td>Ghế có tựa</td>
                    <td>220.000</td>
                    <td>
                      <img src="" alt="">
                    </td>
                    <td>Ghế xinh</td>
                    <td>
                      <a href="" class="btn btn-default"> Sửa </a>
                      <a href="" class="btn btn-danger"> Xóa </a>
                    </td>
                  </tr>

                

              </tbody>
            </table>
          </div>
          <div class="col-md-12">
           
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

