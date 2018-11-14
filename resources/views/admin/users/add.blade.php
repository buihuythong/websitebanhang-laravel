@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">THÊM THÀNH VIÊN MỚI</th>
				</tr>
				<form method="post" action="{!! route('setAddUser') !!}" enctype="multipart/form-data">
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
					<td><input class="form-control" type="text" name="name" placeholder="Nhập họ và tên" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Thư Điện Tử</td>
					<td><input class="form-control" type="text" name="email" placeholder="Nhập hòm thư điện tử" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Mật khẩu</td>
					<td><input class="form-control" type="password" name="password" placeholder="Nhập mật khẩu"></td>
				</tr>
				<tr>
					<td>Nhập lại mật khẩu</td>
					<td><input class="form-control" type="password" name="repassword" placeholder="Nhập lại mật khẩu"></td>
				</tr>
				<tr>
					<td>Ảnh đại diện</td>
					<td><input class="form-control" type="file" name="avatar" placeholder="Nhập lại mật khẩu"></td>
				</tr>
				<tr>
					<td>Quyền hạn</td>
					<td>
						<input type="radio" value="0" name="level"> Quản trị viên
						<br>
						<input type="radio" value="1" name="level" checked=""> Khách hàng
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
						<input type="submit" class="btn btn-success" value="Thêm thành viên">
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