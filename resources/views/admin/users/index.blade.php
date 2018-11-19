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
						Hiển thị : 
						<select name="" id="" onchange ="changeData(this.value)">
							<option value="5">5</option>
							<option value="10" selected="">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
					</td>
					<td colspan="2"></td>
					<td colspan="2">
						Tìm kiếm : <input type="text" name="search" onkeyup ="search(this.value)" >
					</td>
				</tr>
				<tr>
					<td class="tieude text-center">STT</td>
					<td class="tieude text-center">Tên thành viên</td>
					<td class="tieude text-center">Ảnh đại diện</td>
					<td class="tieude text-center">Quyền hạn</td>
					<td class="tieude text-center">Kích hoạt</td>
					<td class="tieude text-center">Công cụ</td>
				</tr>
				
					
				<tbody class="nd">
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
					<td class="text-center">{!! $stt; !!}</td>
					<td>{!! $v['name'] !!}</td>
					<td class="text-center"><a href="{!! asset('')!!}<?php echo $v['avatar'] ?>"><img src="{!! asset('images/pic.gif')!!}" alt=""></td></a>
					<td class="text-center"><small class="label label-success">{!! $flag !!}</small></td>
					<td class="text-center"><small class="label label-success">{!! $flag1 !!}</small></td>
					<td class="text-center">
						<a href="{!! route('deleteUser') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa thành viên" onclick="return deleteUser();"></a>
						<a href="{!! route('editUser') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/edit.gif')!!}" alt="" style="cursor: pointer" title="Sửa thành viên"></a>
					</td>
				</tr>
				@endforeach

				</tbody>
				
			</table>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
	<script>
		
		function deleteUser(){
			let cf = window.confirm("Bạn chắc chắn muốn xóa thành viên này ? ");
			return (cf == true) ? true : false;
		}

		function changeData(total){
			console.log(total);
			$.ajax({
				url : "selectData",
				type : 'GET',
				dataType : 'html',
				data : {t : total},
				success : function(result){
					document.querySelector('.nd').innerHTML = result;
				}
			});
		}

		function search(data){
			$.ajax({
				url : "searchData",
				type : 'GET',
				dataType : 'html',
				data : {t : data},
				success : function(result){
					document.querySelector('.nd').innerHTML = result;
					
				}
			});
		}
	</script>
@endsection
