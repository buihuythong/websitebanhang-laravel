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
						<a href="{!! route('deleteUser') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa thành viên" onclick="return deleteUser();"></a>
						<a href="{!! route('editUser') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/edit.gif')!!}" alt="" style="cursor: pointer" title="Sửa thành viên"></a>
					</td>
				</tr>
				@endforeach
				