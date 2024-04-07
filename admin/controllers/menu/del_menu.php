<?php
	//$id = $_GET['cid'];
	$db = new libraries_cate;
	if(isset($_POST['type'])){
		$id = $_POST['cate_id'];
		$db->del_cate("tbl_category",$id);
		die();
	/*header("location:index.php?mod=menu&act=list");
	exit();*/
	}
?>