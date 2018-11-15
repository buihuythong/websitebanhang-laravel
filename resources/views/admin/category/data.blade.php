<?php $stt = 0; ?>
				@foreach($data as $v)
				<?php
					$stt++;
				 ?>
				<tr>
					<td>{!! $stt; !!}</td>
					<td>{!! $v['name'] !!}</td>
					<td><a href="{!! asset('')!!}<?php echo $v['image'] ?>"><img src="{!! asset('images/pic.gif')!!}" alt=""></td></a>
					<td colspan="2">{!! $v['description']; !!}</td>
					<td>
						<a href="{!! route('deleteCategory') !!}<?php echo '/'. $v['id'] ?>"><img src="{!! asset('images/delete.gif')!!}" alt="" style="margin-right: 10px;cursor: pointer" title="Xóa danh mục" onclick="return deleteCategory();"></a>
						<a href="{!! route('getEditCategory') !!}<?php echo '/'. $v['id'] ?>" onclick="return changeCategory();"><img src="{!! asset('images/edit.gif')!!}" alt="" style="cursor: pointer" title="Sửa danh mục"></a>
					</td>
				</tr>
				@endforeach