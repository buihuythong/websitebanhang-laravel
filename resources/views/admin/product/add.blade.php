@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">THÊM SẢN PHẨM MỚI</th>
				</tr>
				<form method="post" action="{!! route('setAddProduct') !!}" enctype="multipart/form-data">
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
					<td>Tên sản phẩm</td>
					<td><input class="form-control" type="text" name="name" placeholder="Nhập tên sản phẩm" autocomplete="true" ></td>
				</tr>
				<tr>
					<td>Giá sản phẩm - cũ</td>
					<td><input class="form-control" type="number" name="old_price" placeholder="Nhập giá sản phẩm cũ" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Giá sản phẩm - mới</td>
					<td><input class="form-control" type="number" name="new_price" placeholder="Nhập giá sản phẩm mới"></td>
				</tr>
				<tr>
					<td>Tiêu đề</td>
					<td><input class="form-control" type="text" name="title" placeholder="Nhập tiêu đề sản phẩm"></td>
				</tr>
				
				<tr>
					<td>Danh mục</td>
					<td>
						<select name="cat_id" id="" onchange="selectType(this.value)">
							<option value="">----Danh mục sản phẩm-------</option>
							@foreach($dataCate as $v)
							<option value="{!! $v['id'] !!}">{!! $v['name'] !!}</option>
							@endforeach
						</select>
					</td>
				</tr>

				<tr>
					<td>Thương hiệu</td>
					<td>
						<select name="type_id" id="type">
							<option value="">----Thương hiệu sản phẩm----</option>
							<option value="">Oppo</option>
							<option value="">Nokia</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Bảo hành</td>
					<td>
						<select name="warranty" id="">
							<option value="">----Thời gian bảo hành---------</option>
							@for($i=1; $i <=36; $i++)
								<option value="{!! $i !!}">{!! $i !!}T</option>
							@endfor
						</select>
					</td>
				</tr>
				<tr>
					<td>Mô tả sản phẩm</td>
					<td>
						<textarea name="description" id="ckeditor" class="ckeditor" cols="30" rows="10"></textarea>
					</td>
				</tr>

				<tr>
					<td>Tình trạng sản phẩm</td>
					<td>
						<input type="radio" value="1" name="status" checked=""> Còn hàng
						<input type="radio" value="0" name="status" > Hết hàng
					</td>
				</tr>
				<tr>
					<td>Sản phẩm phổ biến</td>
					<td>
						<input type="radio" value="1" name="hot" checked=""> Phổ biến
						<input type="radio" value="0" name="hot" > Không phổ biến
					</td>
				</tr>

				<tr>
					<td>Ảnh sản phẩm</td>
					<td><input class="form-control" type="file" name="image" placeholder="Nhập lại mật khẩu"></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Thêm sản phẩm">
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

		function selectType(data){
			$.ajax({
				url : 'selectTypes',
				type : 'GET',
				dataType: 'html',
				data : {t :  data},
				success : function(result){
					$('#type').html(result);
				}
			});
		}
	</script>
@endsection