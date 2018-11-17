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