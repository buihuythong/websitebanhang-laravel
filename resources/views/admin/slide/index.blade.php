@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-bordered">
				<tr>
					<th colspan="7" class="tieude">DANH SÁCH SLIDE</th>
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
					<td colspan="3">
						Tìm kiếm : <input type="text" name="search" onkeyup ="search(this.value)" >
					</td>
				</tr>
				<tr>
					<td class="tieude">STT</td>
					<td class="tieude">Tên slide</td>
					<td class="tieude">Ảnh slide</td>
					<td class="tieude">Đường dẫn slide</td>
					<td class="tieude">Mô tả ngắn</td>
					<td class="tieude">Hiển thị slide</td>
					<td class="tieude">Công cụ</td>
				</tr>
				
					
				<tbody class="nd">
				<?php $stt = 0; ?>
				@foreach($data as $v)
				<?php
					$stt++;

					if($v['display'] == 1){
						$flag1 = 'Hiển thị';
					}else{
						$flag1 = 'Không hiển thị';
					}
				 ?>
				<tr>
					<td>{!! $stt; !!}</td>
					<td>{!! $v['name'] !!}</td>
					<td><a href="{!! asset('')!!}<?php echo $v['image'] ?>"><img src="{!! asset('images/pic.gif')!!}" alt=""></td></a>
					<td><a href="{!! $v['link'] !!}" style="color:red">Đường dẫn</a></td>
					<td>{!! $v['descripton'] !!}</td>
					<td><small class="label label-success">{!! $flag1 !!}</small></td>
					<td>
						<a href="{!! route('deleteSlide') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa thành viên" onclick="return deleteSlide();"></a>
						<a href="{!! route('getEditSlide') !!}<?php echo '/'. $v['id'] ?>" onclick="return editSlide();"><img src="{!! asset('images/edit.gif')!!}" alt="" style="cursor: pointer" title="Sửa thành viên"></a>
					</td>
				</tr>
				@endforeach

				</tbody>
				
			</table>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
	<script>
		
		function deleteSlide(){
			let cf = window.confirm("Bạn chắc chắn muốn xóa slide này ? ");
			return (cf == true) ? true : false;
		}

		function editSlide(){
			let cf = window.confirm("Bạn chắc chắn muốn sửa slide này ? ");
			return (cf == true) ? true : false;
		}

		function changeData(total){
			console.log(total);
			$.ajax({
				url : "selectSlide",
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
				url : "searchSlide",
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
