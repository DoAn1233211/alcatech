<?php
	$data = array();
	$data['title'] = "Hỗ trợ trực tuyến";
	$data['template'] = "sup/edit_sup";
	$db = new libraries_sup;
	$id = $_GET['sid'];
	$data['info'] = $db->getdata($id);
	if(isset($_POST['ok'])){
		$data = array(
			"sup_name"	=> $_POST['sup_name'],
			"sup_yahoo"	=> $_POST['sup_yahoo'],
			"sup_phone"	=> $_POST['sup_phone'],
			"sup_sky"	=> $_POST['sup_sky'],
			"sup_email"	=> $_POST['sup_email']
		);
		$db->update_sup($data,$id);
		header("location:index.php?mod=support&act=list");
		exit();
	}
	loadview("layout",$data);
?>