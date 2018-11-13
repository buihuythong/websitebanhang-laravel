@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">SỬA THÔNG TIN THÀNH VIÊN</th>
				</tr>
				<form method="post" action="{!! route('setEditUser') !!}" enctype="multipart/form-data">
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
					<td>Họ và tên</td>
					<td><input class="form-control" type="text" name="name" value="{!!$data['name']!!}"></td>
				</tr>
				<tr>
					<td>Thư Điện Tử</td>
					<td><input class="form-control" type="text" name="email" value="{!! $data['email'] !!}"></td>
				</tr>
				<tr>
					<td>Ảnh đại diện</td>
					<td>
						<input class="form-control" type="file" name="avatar" placeholder="Nhập lại mật khẩu">

						<img src="{!! asset('') !!}<?php echo $data['avatar'] ?>" alt="" width="100px" height="100px" style="margin-top: 10px">
					</td>
				</tr>
				<tr>
					<td>Quyền hạn</td>
					<?php
						$khachhang = '';
						$quantri = '';
						if($data['level'] == 1){
							$khachhang = 'checked';
						}else{
							$quantri = 'checked';
						}
					 ?>
					<td>
						<input type="radio" value="0" name="level" {!! $quantri !!}> Quản trị viên
						<br>
						<input type="radio" value="1" name="level" {!! $khachhang !!}> Khách hàng
					</td>
				</tr>
				<tr>
					<td>Kích hoạt tài khoản</td>
					<td>
						<input type="radio" value="0" name="active"> Không kích hoạt
						<br>
						<input type="radio" value="1" name="active" checked=""> Kích hoạt
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Sửa thông tin thành viên">
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