<!-- resources/views/child.blade.php -->
<!--Gọi đến view này load toàn bộ file layouts.admin -> load hết header footer siderbar và đưa content vào -->
@extends('layouts.admin')

@section('title')
<title>Thêm danh mục</title>
@endsection

@section('content')

<div class="content-wrapper">

	@include('partials.content-header', ['name' => 'loại sản phẩm', 'key' => 'Thêm'])

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Thêm mới loại sản phẩm</h3>
				</div>
				<div class="card-body">
					<form role="form" action="{{ route('categories.store') }}" method="post">
						@csrf
						<div class="card-body" style="padding: 0px;">
							<div class="form-group">
								<label>Tên loại sản phẩm</label>
								<input type="text" name="name" class="form-control" placeholder="Nhập tên loại sản phẩm">
							</div>
							<div class="form-group">
								<label>Loại sản phẩm gốc</label>
								<select class="form-control" name="parentId">
									<option value="0">Chọn loại sản phẩm gốc</option>
									{!! $htmlOption !!}
								</select>
							</div>
						</div>
						<div>
							<button type="submit" class="btn btn-primary">Thêm mới loại sản phẩm</button>
							<a href="{{ route('categories.index') }}" class="btn btn-default">Quay lại</a>
						</div>
					</form>
					@if (session('status'))
					<p class="text-warning" style="margin:0px;padding:0px">
						{{ session('status') }}
					</p>
					@endif
				</div>
				<!-- /.card-body -->
			</div>
		</div><!-- /.container-fluid -->
	</div>

</div>
@endsection