<?php
	$id = $_GET['uid'];
	$db = new libraries_user;
	$db->del_user("tbl_user",$id);
	header("location:index.php?mod=user&act=list");
	exit();
?>