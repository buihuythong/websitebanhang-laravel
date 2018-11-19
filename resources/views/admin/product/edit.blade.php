@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">SỬA SẢN PHẨM</th>
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
					<td><input class="form-control" type="text" name="name" placeholder="Nhập tên sản phẩm" autocomplete="true" value="{!! $data['name'] !!}" ></td>
				</tr>
				<tr>
					<td>Giá sản phẩm - cũ</td>
					<td><input class="form-control" type="number" name="old_price" placeholder="Nhập giá sản phẩm cũ" autocomplete="true" value="{!! $data['old_price'] !!}"></td>
				</tr>
				<tr>
					<td>Giá sản phẩm - mới</td>
					<td><input class="form-control" type="number" name="new_price" placeholder="Nhập giá sản phẩm mới" value="{!! $data['new_price'] !!}"></td>
				</tr>
				<tr>
					<td>Tiêu đề</td>
					<td><input class="form-control" type="text" name="title" placeholder="Nhập tiêu đề sản phẩm" value="{!! $data['title'] !!}"></td>
				</tr>
				
				<tr>
					<td>Danh mục</td>
					<td>
						<select name="cat_id" id="" onchange="selectType(this.value)">
							@foreach($dataCate as $v)
							@if($data['cat_id'] == $v['id'])
							<option value="{!! $v['id'] !!}" selected="">{!! $v['name'] !!}</option>
							@else
							<option value="{!! $v['id'] !!}">{!! $v['name'] !!}</option>
							@endif
							@endforeach
						</select>
					</td>
				</tr>

				<tr>
					<td>Thương hiệu</td>
					<td>
						<select name="type_id" id="type">
							@foreach($dataType as $v)
							@if($v['id'] == $data['type_id'])
								<option value="" selected="">{!! $v['name'] !!}</option>
							@else
								<option value="">{!! $v['name'] !!}</option>
							@endif
							@endforeach
						</select>
					</td>
				</tr>

				<tr>
					<td>Bảo hành</td>
					<td>
						<select name="warranty" id="">
							<option value="">----Thời gian bảo hành---------</option>
							@for($i=1; $i <=36; $i++)
								@if($data['warranty'] == $i)
								<option value="{!! $i !!}" selected="">{!! $i !!}T</option>
								@else
								<option value="{!! $i !!}">{!! $i !!}</option>
								@endif
							@endfor
						</select>
					</td>
				</tr>
				<tr>
					<td>Mô tả sản phẩm</td>
					<td>
						<textarea name="description" id="ckeditor" class="ckeditor" cols="30" rows="10">{!! $data['description'] !!}</textarea>
					</td>
				</tr>

				<tr>
					<td>Tình trạng sản phẩm</td>
					<td>
						<?php 
							$conhang = '';
							$hethang = '';
							if($data['status'] == 1){
								$conhang = 'checked';
							}else{
								$hethang = 'checked';
							}
						?>
						<input type="radio" value="1" name="status" {!! $conhang !!}> Còn hàng
						<input type="radio" value="0" name="status" {!! $hethang !!} > Hết hàng
					</td>
				</tr>
				<tr>
					<td>Sản phẩm phổ biến</td>
					<td>
						<?php
							$phobien = '';
							$khongphobien = '';
							if($data['hot'] == 1){

								$phobien = 'checked';
							}else{
								$khongphobien = 'checked';
							}
						 ?>
						<input type="radio" value="1" name="hot" {!! $phobien !!}> Phổ biến
						<input type="radio" value="0" name="hot" {!! $khongphobien !!} > Không phổ biến
					</td>
				</tr>

				<tr>
					<td>Ảnh sản phẩm</td>
					<td>
						<input class="form-control" type="file" name="image" placeholder="Nhập lại mật khẩu">
						<img src="{!! asset('') .$data['image'] !!}" alt="" width="120px" height="150px" style="margin-top:10px;">
					</td>

				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Sửa sản phẩm">
						<input type="reset" class="btn btn-danger" value="Nhập lại">
					</td>
				</tr>
			</form>
			</table>
		</div>
	</div>

@endsection