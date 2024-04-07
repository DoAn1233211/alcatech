<?php
	$data = array();
	$data['title'] = "Giới thiệu";
	$db = new Model_mdel;
	$data['intro'] = $db->get("tbl_intro_one");
	$data['template'] = "main_home/introduction_view";
	loadview("layout",$data);
?>