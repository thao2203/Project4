
<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
  <title>Thêm sản phẩm</title>
@endsection

@section('css')
  <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet" />
  
@endsection

@section('content')

  <div class="content-wrapper"> 

    @include('partials.content-header', ['name' => 'sản phẩm', 'key' => 'Thêm'])
    <form action="" 
                  method="post" enctype="multipart/form-data">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              
                @csrf
                <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text"
                         class="form-control"
                         name='name'
                         placeholder="Nhập tên sản phẩm">
                </div>
                <div class="form-group">
                  <label>Giá sản phẩm</label>
                  <input type="text"
                         class="form-control"
                         name='price'
                         placeholder="Nhập giá sản phẩm">
                </div>
                <div class="form-group">
                  <label>Ảnh đại diện</label>
                  <input type="file"
                         class="form-control-file"
                         name='feature_image_path'>
                </div>
                <div class="form-group">
                  <label>Ảnh chi tiết</label>
                  <input type="file"
                         multiple
                         class="form-control-file"
                         name='image_path[]'>
                </div>
                <div class="form-group">
                  <label>Chọn danh mục</label>
                  <select class="form-control select2_init" name="parent_id">
                    <option value="">Chọn danh mục</option>
                    {!! $htmlOption !!}
                  </select>
                </div>
                <div class="form-group">
                  <label>Nhập thẻ chú thích cho sản phẩm</label>
                  <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">
                  </select>
                </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                  <label>Nhập nội dung</label>
                  <textarea id="" name="content" class="form-control tinymce_editor_init"  rows="8"></textarea>
                </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-primary">Hoàn thành</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('js')
  <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection