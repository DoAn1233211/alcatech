<?php
	$id = $_GET['sid'];
	$db = new libraries_sup;
	$db->del_sup("tbl_support",$id);
	header("location:index.php?mod=support&act=list");
	exit();
	
?>