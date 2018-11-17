@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-bordered">
				<tr>
					<th colspan="4" class="tieude">DANH SÁCH THỂ LOẠI</th>
				</tr>
				
				<tr>
					<td colspan="3">
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
					<td class="tieude">Tên thể loại</td>
					<td class="tieude">Tên danh mục</td>
					<td class="tieude">Công cụ</td>
				</tr>
				
					
				<tbody class="nd">
				<?php $stt = 0; ?>
				@foreach($data as $v)
				<?php
					$stt++;
				 ?>
				<tr>
					<td>{!! $stt; !!}</td>
					<td>{!! $v['name'] !!}</td>
					@foreach($cate as $value)
						@if($v['cat_id'] == $value['id'])
							<td>{!! $value['name']; !!}</td>
						@endif
					@endforeach
					<td>
						<a href="{!! route('deleteType') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa danh mục" onclick="return deleteCategory();"></a>
						<a href="{!! route('editType') !!}<?php echo '/'. $v['id'] ?>" onclick="return changeCategory();"><img src="{!! asset('images/edit.gif')!!}" alt="" style="cursor: pointer" title="Sửa danh mục"></a>
					</td>
				</tr>
				@endforeach

				</tbody>
				
			</table>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
	<script>
		
		function deleteCategory(){
			let cf = window.confirm("Bạn chắc chắn muốn xóa danh mục này ? ");
			return (cf == true) ? true : false;
		}

		function changeCategory(){
			let cf = window.confirm("Bạn chắc chắn muốn sửa danh mục này ? ");
			return (cf == true) ? true : false;
		}

		function changeData(total){
			console.log(total);
			$.ajax({
				url : "selectType",
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
				url : "searchType",
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
