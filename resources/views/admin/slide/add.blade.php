@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">THÊM SLIDE MỚI</th>
				</tr>
				<form method="post" action="{!! route('setAddSlide') !!}" enctype="multipart/form-data">
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
					<td>Tên slide</td>
					<td><input class="form-control" type="text" name="name" placeholder="Nhập tên slide" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Đường dẫn slide</td>
					<td><input class="form-control" type="text" name="link" placeholder="Nhập đường dẫn slide" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Ảnh slide</td>
					<td><input class="form-control" type="file" name="image"></td>
				</tr>
				<tr>
					<td>Mô tả slide</td>
					<td><textarea name="descripton" id="" cols="30" rows="10" class="ckeditor"></textarea></td>
				</tr>
				<tr>
					<td>Hiển thị</td>
					<td>
						<input value="1" type="radio" name="display" checked="">Hiển thị
						<input value="0" type="radio" name="display">Không hiển thị
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Thêm slide">
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