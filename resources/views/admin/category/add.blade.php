@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">THÊM DANH MỤC</th>
				</tr>
				<form method="post" action="{!! route('setAddCategory') !!}" enctype="multipart/form-data">
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul style="list-style: none;">
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					@csrf

				<tr>
					<td>Tên danh mục</td>
					<td><input class="form-control" type="text" name="name" placeholder="Nhập tên danh mục" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Ảnh danh mục</td>
					<td><input class="form-control" type="file" name="image" placeholder="Nhập lại mật khẩu"></td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td><textarea name="description" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Thêm danh mục">
						<input type="reset" class="btn btn-danger" value="Nhập lại">
					</td>
				</tr>
			</form>
			</table>
		</div>
	</div>

	<script>
		setTimeout(function(){
			let err = document.querySelector('.err');
			err.classList.add('andi');
		},3000)
	</script>
@endsection