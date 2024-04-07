<?php
	$id = $_GET['cid'];
	$db = new libraries_customer;
	$db->del_customer("tbl_customer",$id);
	header("location:index.php?mod=customer&act=list");
?>