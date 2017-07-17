<?php foreach ($data as $key => $value):?>
	<!-- <p><?=$value['title'];?></p> -->
	<a href="/index.php?c=post&a=show&id=<?php echo $value['id'];?>"><?=$value['title'];?></a>
	<p><?=$value['text'];?></p>
<?php endforeach; ?>