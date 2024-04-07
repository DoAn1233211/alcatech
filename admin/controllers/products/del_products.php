<?php
	$id = $_GET['pid'];
	$db = new libraries_products;
	$db->del_pro("tbl_products",$id);
	header("location:index.php?mod=products&act=list");
	exit();
	
?>