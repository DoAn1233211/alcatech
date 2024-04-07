<?php
	$data = array();
	$data['title'] = "Dịch vụ";
	$data['template'] = "services/services";
	//$data['act'] = 8;
	$db = new libraries_services;
	$data['info'] = $db->getdata(1);
	if(isset($_POST['ok'])){
		$data = array(
			"service_full" 	=> $_POST['service_full'],
			"service_info"	=> $_POST['service_info']
		);
		$db->update_service($data,1);
		header("location:index.php");
		exit();
	}
	loadview("layout",$data);
?>