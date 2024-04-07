<?php
	$data = array();
	$data['title'] = "Hướng dẫn mua hàng";
	$data['template'] = "guide/guide";
	$data['act'] = 7;
	$db = new libraries_guide;
	$data['info'] = $db->getdata(1);
	if(isset($_POST['ok'])){
		$data = array(
			"guide_full" => $_POST['guide_full']
		);
		$db->update_guide($data,1);
		header("location:index.php");
		exit();
	}
	loadview("layout",$data);
?>