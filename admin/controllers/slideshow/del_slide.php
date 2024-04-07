<?php
	$id = $_GET['sid'];
	$db = new libraries_slideshow;
	$data['info'] = $db->getdata($id);
	$abc = "../public/images/slider/".$data['info']['slide_image']."";
	@unlink($abc);
	$db->del_slide("tbl_slideshow",$id);
	header("location:index.php?mod=slideshow&act=list");
	exit();
?>