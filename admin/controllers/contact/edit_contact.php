<?php
	$data = array();
	$data['title'] = "Sửa thông tin liên hệ";
	$data['template'] = "contact/contact";
	$data['act'] = 9;
	$db = new libraries_contact;
	$data['info'] = $db->getdata(1);
	if(isset($_POST['ok'])){
		$data = array(
			"contact_value" 	=> $_POST['contact_value']
		);
		$db->update_contact($data,1);
		header("location:index.php");
		exit();
	}
	loadview("layout",$data);
?>