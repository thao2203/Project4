
<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
  <title>Chỉnh sửa menu</title>
@endsection

@section('content')

  <div class="content-wrapper"> 

    @include('partials.content-header', ['name' => 'menus', 'key' => 'Sửa'])

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('menus.update', ['id' => $menuFollowIdEdit->id ]) }}" 
                  method="post">
              @csrf
              <div class="form-group">
                <label>Tên menus</label>
                <input type="text"
                       class="form-control" 
                       name='name'
                       value='{{ $menuFollowIdEdit->name }}'
                       placeholder="Nhập tên menus">
              </div>
              <div class="form-group">
                <label>Chọn menus cha</label>
                <select class="form-control" name="parent_id">
                  <option value="0">Chọn menus cha</option>
                  {!! $optionSelect !!}
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Hoàn thành</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
@endsection

