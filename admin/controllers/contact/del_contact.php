<?php
	$id = $_GET['cid'];
	$db = new libraries_contact;
	$db->del_contact("tbl_contact",$id);
	header("location:index.php?mod=contact&act=list");
	exit();
?>