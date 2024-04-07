<?php
	session_start();
	$id = $_GET['pid'];
	$db = new Model_mcart;
	$db->del_cart($id);
	header("location:index.php?page=shopping&act=list");
	//redirect("index.php?page=shopping&act=list");
	exit();
?>