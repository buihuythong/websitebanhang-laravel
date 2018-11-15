@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">SỬA THÔNG TIN SLIDE</th>
				</tr>
				<form method="post" action="{!! route('setEditSlide') !!}" enctype="multipart/form-data">
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

					<?php
						if(session('errorPassword') == 1){
							echo "<h3 class='label label-danger err' style='margin-bottom: 12px;display:inline-block'>Mật khẩu cần trùng khớp nhau</h3>";

						}
						session()->forget('errorPassword');
					 ?>
				<tr>
					<td>Tên slide</td>
					<td><input class="form-control" type="text" name="name" value="{!!$data['name']!!}" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Đường dẫn</td>
					<td><input class="form-control" type="text" name="link" value="{!! $data['link'] !!}" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Ảnh đại diện</td>
					<td>
						<input class="form-control" type="file" name="image" placeholder="Nhập lại mật khẩu">

						<img src="{!! asset('') !!}<?php echo $data['image'] ?>" alt="" width="100px" height="100px" style="margin-top: 10px">
					</td>
				</tr>
				<tr>
					<td>Hiển thị</td>
					<?php
						$hienthi = '';
						$khonghienthi = '';
						if($data['display'] == 1){
							$hienthi = 'checked';
						}else{
							$khonghienthi = 'checked';
						}
					 ?>
					<td>
						<input type="radio" value="1" name="display" {!! $hienthi !!}> Hiển thị
						<br>
						<input type="radio" value="0" name="display" {!! $khonghienthi !!}> Không hiển thị
					</td>
				</tr>
				<tr>
					<td>Mô tả</td>
					<td>
						<textarea name="descripton" id="ckeditor" class="ckeditor" cols="30" rows="10">{!! $data['descripton'] !!}</textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Sửa thông tin slide">
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