@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">SỬA THÔNG TIN DANH MỤC</th>
				</tr>
				<form method="post" action="{!! route('setEditCategory') !!}" enctype="multipart/form-data">
					<input class="form-control" type="hidden" name="id" value="{!!$data['id']!!}">
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
					<td><input class="form-control" type="text" name="name" value="{!!$data['name']!!}" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Ảnh đại diện</td>
					<td>
						<input class="form-control" type="file" name="avatar" placeholder="Nhập lại mật khẩu">

						<img src="{!! asset('') !!}<?php echo $data['image'] ?>" alt="" width="100px" height="100px" style="margin-top: 10px">
					</td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td><textarea name="description" id="ckeditor" class="ckeditor" cols="30" rows="10">{!! $data['description'] !!}</textarea></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Sửa thông tin category">
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