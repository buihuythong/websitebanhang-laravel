@extends('admin/master')
@section('content')
	<div class="row">
		<div class="col-sm-10">
			<table class="table table-bordered">
				<tr>
					<th colspan="2" class="tieude">THÊM THỂ LOẠI</th>
				</tr>
				<form method="post" action="{!! route('setAddType') !!}" enctype="multipart/form-data">
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
					<td><input class="form-control" type="text" name="name" placeholder="Nhập tên thể loại" autocomplete="true"></td>
				</tr>
				<tr>
					<td>Tên danh mục</td>
					<td>
						<select name="cat_id" id="">
								<option value="">----Tên danh mục-----</option>
							@foreach($data as $v)
								<option value="{!! $v['id'] !!}">{!! $v['name'] !!}</option>
							@endforeach
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" class="btn btn-success" value="Thêm thể loại">
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