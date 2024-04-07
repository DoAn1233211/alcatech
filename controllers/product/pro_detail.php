<?php
	$data = array();
	$id = $_GET['pid'];
	$db = new model_mpro();
	$data['pro_detail'] = $db->get_pro($id);
	$data['title'] = $data['pro_detail']['pro_name'];
	//debug($data['pro_detail']);
	$data['template'] = "product/pro_detail_view";
	loadview("layout",$data);
?>