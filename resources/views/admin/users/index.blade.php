@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-bordered">
				<tr>
					<th colspan="6" class="tieude">DANH SÁCH THÀNH VIÊN</th>
				</tr>
				
				<tr>
					<td colspan="2">
						<select name="" id="" class="form-control">
							<option value="5">5</option>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
					</td>
					<td colspan="2"></td>
					<td colspan="2">
						Tìm kiếm : <input type="text" name="search" >
					</td>
				</tr>
				<tr>
					<td class="tieude">STT</td>
					<td class="tieude">Tên thành viên</td>
					<td class="tieude">Ảnh đại diện</td>
					<td class="tieude">Quyền hạn</td>
					<td class="tieude">Kích hoạt</td>
					<td class="tieude">Công cụ</td>
				</tr>
				<?php $stt = 0; ?>
				@foreach($data as $v)
				<?php
					$stt++;
					if($v['level'] == 1){
						$flag = 'Khách hàng';
					}else{
						$flag = 'Quản trị viên';
					}

					if($v['active'] == 1){
						$flag1 = 'Đang kích hoạt';
					}else{
						$flag1 = 'Chưa kích hoạt';
					}
				 ?>
				<tr>
					<td>{!! $stt; !!}</td>
					<td>{!! $v['name'] !!}</td>
					<td><img src="{!! asset('images/pic.gif')!!}" alt=""></td>
					<td><small class="label label-success">{!! $flag !!}</small></td>
					<td><small class="label label-success">{!! $flag1 !!}</small></td>
					<td>
						<a href="{!! route('deleteUser') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa thành viên"></a>
						<img src="{!! asset('images/edit.gif')!!}" alt="" style="cursor: pointer" title="Sửa thành viên">
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection
