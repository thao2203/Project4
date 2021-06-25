<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Quản lý bài viết</title>
@endsection

@section('content')

<div class="content-wrapper">

  <!-- @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Danh sách']) -->

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Danh sách bài viết</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/home">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh sách bài viết</li>
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
          <h3 class="card-title">Danh sách bài viết</h3>
          <a style="margin-left: 20px;" href="{{ route('blogs.create') }}" class="btn btn-warning">Thêm mới</a>
        </div>
        @if (session('status'))
        <p class="text-warning" style="margin:0px;padding:0px;margin-left:20px">
          {{ session('status') }}
        </p>
        @endif
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead style=" text-align:center;">
              <tr>
                <th>STT</th>
                <th>Tiêu đề bài viết</th>
                <th>Ảnh đại diện</th>
                <th>Lượt xem</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th style="width: 12%;">Thao tác</th>
              </tr>
            </thead>
            <tbody style=" text-align:center;">
              @foreach($blogs as $blog)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $blog->name }}</td>
                <td><img src="{{url('/images/'.$blog->avt)}}" style="width: 180px;" alt=""></td>
                <td>{{ $blog->view }}</td>
                <td>{{ \Illuminate\Support\Str::limit($blog->content, 150, $end='...') }}</td>
                <td>{{ date("d-m-Y", strtotime($blog->created_at)) }}</td>
                <td>
                  <a href="{{ route('blogs.edit',['id' => $blog->id]) }}" class="btn btn-sm btn-success">Sửa</a>
                  <a href="{{ route('blogs.delete',['id' => $blog->id]) }}" class="btn btn-sm btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot style=" text-align:center;">
              <tr>
                <th>STT</th>
                <th>Tiêu đề bài viết</th>
                <th>Ảnh đại diện</th>
                <th>Lượt xem</th>
                <th>Nội dung</th>
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