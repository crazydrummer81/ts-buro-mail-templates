<?php
	require_once 'params.php';
	require_once '_style.php';
	$include_path = 'include/';
	if(isset($_GET))
		$page = (object) $PAGES[$_GET['page']];
	else $page = (object) $PAGES['thanks'];
	
	include '_header.php';
	include $include_path.$page->html;
	include '_footer.php';
?>


<!--------------------------------------------->
<aside>
	<? foreach ($PAGES as $url => $item) { ?>
			<a href="http://mail.ts-buro.loc/index.php?page=<?=$url?>"><?=$url?></a>
	<? } ?>
</aside>
<style>
	aside {
		position: fixed;
		top:20px;
		left:20px;
		width:200px;
		display:flex;
		flex-direction:column;
	}
</style>