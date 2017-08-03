<h3>Список тестов</h3>
<form action="">
	<input type="text" placeholder="Ваше имя:">
</form>
<?php
define(PATH_UPLOAD,'test');
$files = array();
$k = 1;
foreach (glob(PATH_UPLOAD."/*.json") as $filename) {
	$files[$k] = $filename;
	$exp = explode('.',$filename);
	$ext = explode('/',$exp[0]);
	?>
	<ul>
		<li><a href="/homeWork006/?act=test&fileid=<?=$k?>"><?= $ext[1] ?></a></li>
	</ul>
	<?php
	$k++;
}
?>