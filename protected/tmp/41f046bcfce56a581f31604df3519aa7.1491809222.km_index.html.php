<?php if(!class_exists("View", false)) exit("no direct access allowed");?><h3>文章列表</h3>
	<ul>
		<li><a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'add', ));?>">增加数据create</a></li>
		<li><a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'update', ));?>">修改update</a></li>
		<li><a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'delete', ));?>">删除delete</a></li>
		<li><a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'find', ));?>">查找findAll/find</a></li>
		<li><a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'query', ));?>">SQL查询query</a></li>
		<li><a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'execute', ));?>">SQL执行execute</a></li>
	</ul>
	<?php if (!empty($findall)) : ?>
	<table class="table">
		<tr>
			<th>标题</th>
		</tr>
		<?php $_foreach_v_counter = 0; $_foreach_v_total = count($findall);?><?php foreach( $findall as $k => $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
		<tr>
			<td>
				<a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'find', 'id'=>$v["article_id"], ));?>"><?php echo $v["article_name"]; ?></a><?php echo date("Y-m-d",$v["article_time"]);?>
				<a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'update', 'id'=>$v["article_id"], ));?>">修改</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php else : ?>
	<p>没有结果！</p>
	<?php endif; ?>