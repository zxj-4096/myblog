<?php if(!class_exists("View", false)) exit("no direct access allowed");?><div style="float:right">
	<a href="<?php echo url(array('c'=>'kmblog/km', 'a'=>'update', ));?>">修改内容</a>
</div>
<?php if (!empty($findone)) : ?>
<table class="table">
		<tr>
			<td>
			<h3><?php echo $findone["article_name"]; ?></h3>
			文章类别
			<div style="float:right"><?php echo date("Y-m-d H:i:s",$findone["article_time"]);?></div>
			</td>
		</tr>
		<tr>
			<td><?php echo $findone["article_content"]; ?></td>
		</tr>
</table>
<?php else : ?>
<p>没有结果！</p>
<?php endif; ?>
<p>
	<a href="<?php echo url(array('c'=>'kmblog/km', 'a'=>'index', ));?>">返回</a>
</p>