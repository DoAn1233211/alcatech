<?php
	$data = array();
	$data['title'] = "Đào tạo";
	$data['template'] = "edu/edu";
	//$data['act'] = 8;
	$db = new libraries_edu;
	$data['info'] = $db->getdata(1);
	if(isset($_POST['ok'])){
		$data = array(
			"edu_full" 	=> $_POST['edu_full'],
			"edu_info"	=> $_POST['edu_info']
		);
		$db->update_edu($data,1);
		header("location:index.php");
		exit();
	}
	loadview("layout",$data);
?>