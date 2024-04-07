<?php
	$data = array();
	$data['title'] = "Hỗ trợ trực tuyến";
	$data['template'] = "sup/add_sup";
	$db = new libraries_sup;
	if(isset($_POST['ok'])){
		$data = array(
			"sup_name"	=> $_POST['sup_name'],
			"sup_yahoo"	=> $_POST['sup_yahoo'],
			"sup_phone"	=> $_POST['sup_phone'],
			"sup_sky"	=> $_POST['sup_sky'],
			"sup_email"	=> $_POST['sup_email']
		);
		$db->add_sup($data);
		header("location:index.php?mod=support&act=list");
		exit();
	}
	loadview("layout",$data);
?>