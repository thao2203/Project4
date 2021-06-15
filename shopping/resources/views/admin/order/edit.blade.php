<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Sửa đơn hàng</title>
@endsection


@section('content')

<div class="content-wrapper">

  @include('partials.content-header', ['name' => 'đơn hàng', 'key' => 'Sửa'])

  <div class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Chỉnh sửa đơn hàng</h3>
        </div>
        <div class="card-body">
          <form role="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label>Tên người nhận :</label>
              <input type="text" class="form-control" name='name' placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
              <label>Số điện thoại :</label>
              <input type="text" class="form-control" name='price' placeholder="Nhập giá sản phẩm">
            </div>
            <div class="form-group">
              <label>Địa chỉ :</label>
              <input type="file" class="form-control-file" name='feature_image_path'>
            </div>
            <div class="form-group">
              <label>Chọn loại sản phẩm</label>
              <select class="form-control" name="category_id">
                <option value="0">Chọn loại sản phẩm gốc</option>
                {!! $htmlOption !!}
              </select>
            </div>
            <div class="form-group">
              <label>Chọn nhà cung cấp</label>
              <select class="form-control" name="supplier_id">
                <option value="0">Chọn nhà cung cấp</option>
                {!! $htmlSupplier !!}
              </select>
            </div>
            <!-- <div class="form-group">
              <label>Nhập thẻ chú thích cho sản phẩm</label>
              <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">
              </select>
            </div> -->
            <div class="form-group">
            <label>Nhập nội dung</label>
              <textarea class="textarea" name="content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <div class="form-group">
              <label>Nhập số lượng</label>
              <input type="text" class="form-control" name='quantity' placeholder="Nhập số lượng sản phẩm"></input>
            </div>
            <button type="submit" class="btn btn-primary">Hoàn thành</button>
          </form>
          @if (session('status'))
          <p class="text-warning" style="margin:0px;padding:0px">
            {{ session('status') }}
          </p>
          @endif
        </div>

      </div>
    </div>
  </div>

</div>
@endsection
