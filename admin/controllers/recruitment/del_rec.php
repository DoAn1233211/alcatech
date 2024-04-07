<?php
	$id = $_GET['rid'];
	$db = new libraries_recruitment;
	$db->del_rec("tbl_recruitment",$id);
	header("location:index.php?mod=recruitment&act=list");
?>