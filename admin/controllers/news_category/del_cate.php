<?php
	//$id = $_GET['cid'];
	$db = new libraries_cagonews;
	if(isset($_POST['type'])){
		$id = $_POST['cago_id'];
		$db->del_cago("tbl_categorie",$id);
		die();
	/*header("location:index.php?mod=menu&act=list");
	exit();*/
	}
?>