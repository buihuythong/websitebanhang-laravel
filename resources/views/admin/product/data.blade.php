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
					<td><img src="{!! asset('') !!}<?php echo $v['image'] ?>" alt="" width="120px" height="150px" ></td>
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
						<a href="{!! route('deleteUser') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa thành viên" onclick="return deleteUser();"></a>
						<a href="{!! route('editUser') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/edit.gif')!!}" alt="" style="cursor: pointer" title="Sửa thành viên"></a>
					</td>
				</tr>
				@endforeach