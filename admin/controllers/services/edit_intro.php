<?php
	$data = array();
	$data['title'] = "Giới thiệu công ty";
	$data['template'] = "introduction/intro";
	$data['act'] = 8;
	$db = new libraries_intro;
	$data['info'] = $db->getdata(1);
	if(isset($_POST['ok'])){
		$data = array(
			"intro_full" 	=> $_POST['intro_full']
		);
		$db->update_intro($data,1);
		header("location:index.php");
		exit();
	}
	loadview("layout",$data);
?>