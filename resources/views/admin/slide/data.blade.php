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
