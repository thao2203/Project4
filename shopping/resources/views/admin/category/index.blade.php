
<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('content')

  <div class="content-wrapper">

    @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Danh sách'])

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Thêm</a>
          </div>

          <div class="col-md-12">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Mã danh mục</th>
                  <th scope="col">Tên danh mục</th>
                  <th scope="col">Hành động</th>
                </tr>
              </thead>
              <tbody>

                @foreach($categories as $category)

                  <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>
                      <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-default"> Sửa </a>
                      <a href="{{ route('categories.delete', ['id' => $category->id]) }}" class="btn btn-danger"> Xóa </a>
                    </td>
                  </tr>

                @endforeach

              </tbody>
            </table>
          </div>
          <div class="col-md-12">
            {{ $categories->links() }}
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

