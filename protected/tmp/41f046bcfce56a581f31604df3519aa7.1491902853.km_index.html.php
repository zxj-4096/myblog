<?php if(!class_exists("View", false)) exit("no direct access allowed");?><a href="<?php echo url(array('c'=>'main', 'a'=>'index', ));?>"><h4>回首页</h4></a>
<a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'add', ));?>">写新文章</a>
<div style="float:right">
<input id="title" type="text">
<a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'find', ));?>">查找</a>
</div>
<h3>文章列表</h3>
<?php if (!empty($findall)) : ?>
<table class="table">
	<?php $_foreach_v_counter = 0; $_foreach_v_total = count($findall);?><?php foreach( $findall as $k => $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
	<tr>
		<td>
			<a href="<?php echo url(array('m'=>'kmblog', 'c'=>'km', 'a'=>'find', 'id'=>$v["article_id"], ));?>"><?php echo $v["article_name"]; ?></a>
			<div style="float:right"><?php echo date("Y-m-d H:i:s",$v["article_time"]);?></div>				
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php else : ?>
<p>没有结果！</p>
<?php endif; ?>