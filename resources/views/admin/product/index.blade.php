@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-bordered">
				<tr>
					<th colspan="12" class="tieude">DANH SÁCH SẢN PHẨM</th>
				</tr>
				
				<tr>
					<td colspan="11">
						Hiển thị : 
						<select name="" id="" onchange ="changeData(this.value)">
							<option value="5">5</option>
							<option value="10" selected="">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
							<option value="100">100</option>
						</select>
					</td>
					<td colspan="1">
						Tìm kiếm : <input type="text" name="search" onkeyup ="search(this.value)" >
					</td>
				</tr>
				<tr>
					<td class="tieude">STT</td>
					<td class="tieude">Tên sản phẩm</td>
					<td class="tieude">Ảnh sản phẩm</td>
					<td class="tieude">Gía cũ</td>
					<td class="tieude">Gía mới</td>
					<td class="tieude">Tiêu đề</td>
					<td class="tieude">Tình trạng</td>
					<td class="tieude">Thời gian bảo hành</td>
					<td class="tieude">Thương hiệu</td>
					<td class="tieude">Danh mục</td>
					<td class="tieude">Phổ biến</td>
					<td class="tieude">Công cụ</td>
				</tr>
				
					
				<tbody class="nd">
				<?php $stt = 0; ?>
				@foreach($data as $v)
				<?php
					$stt++;
					if($v['status'] == 1){
						$flag = 'Còn hàng';
					}else{
						$flag = 'Hết hàng';
					}

				 ?>
				<tr>
					<td>{!! $stt; !!}</td>
					<td>{!! $v['name'] !!}</td>
					<td><img src="{!! asset('images') !!}<?php echo '/' . $v['image'] ?>" alt="" width="150px" height="100px" ></td>
					<td>{!! number_format($v['old_price']).' VNĐ' !!}</td>
					<td>{!! number_format($v['new_price']). ' VNĐ' !!}</td>
					<td>{!! $v['title'] !!}</td>
					@if($v['status'] == 1)
						<td><small class="label label-success">{!! $flag !!}</small></td>
					@else
						<td><small class="label label-danger">{!! $flag !!}</small></td>
					@endif
					<td>{!! $v['warranty'] .'T' !!}</td>
					@foreach($dataType as $v1)
						@if($v1['id'] == $v['type_id'])
							<td style="color:#1a5ca6;font-weight: bold">{!! $v1['name'] !!}</td>
						@endif
					@endforeach
					@foreach($dataCategory as $v2)
						@if($v2['id'] == $v['cat_id'])
							<td style="color:#1a5ca6;font-weight: bold">{!! $v2['name'] !!}</td>
						@endif
					@endforeach

					@if($v['hot'] == 1)
						<td><small class="label label-success">{!! 'Phổ biến' !!}</small></td>
					@else
						<td><small class="label label-danger">{!! 'Không' !!}</small></td>
					@endif
					<td>
						<a href="{!! route('deleteProduct') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa thành viên" onclick="return deleteUser();"></a>
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
				url : "selectProduct",
				type : 'GET',
				dataType : 'html',
				data : {t : total},
				success : function(result){
					document.querySelector('.nd').innerHTML = result;
					//console.log(result);
				}
			});
		}

		function search(data){
			$.ajax({
				url : "searchProduct",
				type : 'GET',
				dataType : 'html',
				data : {t : data},
				success : function(result){
					document.querySelector('.nd').innerHTML = result;
					//console.log(result);
					
				}
			});
		}
	</script>
@endsection
