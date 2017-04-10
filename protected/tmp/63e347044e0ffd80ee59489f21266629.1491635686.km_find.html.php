<?php if(!class_exists("View", false)) exit("no direct access allowed");?>
<?php if (!empty($findone)) : ?>
<table class="table">
		<?php $_foreach_v_counter = 0; $_foreach_v_total = count($findone);?><?php foreach( $findone as $k => $v ) : ?><?php $_foreach_v_index = $_foreach_v_counter;$_foreach_v_iteration = $_foreach_v_counter + 1;$_foreach_v_first = ($_foreach_v_counter == 0);$_foreach_v_last = ($_foreach_v_counter == $_foreach_v_total);$_foreach_v_counter++;?>
		<tr>
			<td><?php echo $k; ?></td>
			<td><?php echo $v; ?></td>
		</tr>
		<?php endforeach; ?>
</table>
<?php else : ?>
<p>没有结果！</p>
<?php endif; ?>
<p>
	<a href="<?php echo url(array('c'=>'kmblog/km', 'a'=>'index', ));?>">返回到main/index</a>
</p>