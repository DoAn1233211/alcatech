<?php
	$id = $_GET['nid'];
	$db = new libraries_news;
	$db->del_news("tbl_news",$id);
	header("location:index.php?mod=news&act=list");
	exit();
?>