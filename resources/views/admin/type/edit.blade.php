@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">SỬA THÔNG TIN THỂ LOẠI</th>
				</tr>
				<form method="post" action="{!! route('setEditType') !!}" enctype="multipart/form-data">
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

				<tr>
					<td>Tên thể loại</td>
					<td><input class="form-control" type="text" name="name" value="{!!$data['name']!!}" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Tên danh mục</td>
					<td>
						<select name="cat_id" id="">
							@foreach($cate as $v)
								@if($v['id'] == $data['cat_id'])
									<option value="{!! $v['id'] !!}" selected="">{!! $v['name'] !!}</option>
								@else
									<option value="{!! $v['id'] !!}">{!! $v['name'] !!}</option>
								@endif
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Sửa thông tin thể loại">
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