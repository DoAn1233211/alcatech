<?php
	$data = array();
	$id = $_GET['pid'];
	$db = new model_mpage;
	$data['detail'] = $db->get_page($id);
	$data['title'] = $data['detail']['rec_title'];
	$data['template'] = "page/page_detail_view";
	loadview("layout",$data);
?>