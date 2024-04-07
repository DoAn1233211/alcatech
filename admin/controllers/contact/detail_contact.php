<?php
	$data = array();
	$data['title'] = "Nội dung người liên hệ";
	$data['template'] = "contact/detail_contact";
	$db = new libraries_contact;
	$id = $_GET['cid'];
	$data['info'] = $db->getcontact($id);
	loadview("layout",$data);
?>