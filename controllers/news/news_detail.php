<?php
	$data = array();
	$id = $_GET['nid'];
	$db = new model_mnews;
	$data['cate'] = $db->list_cate();
	$data['detail'] = $db->get_news($id);
	$start = 0;
	$limit = 10;
	$data['title'] = $data['detail']['news_title'];
	$cago_id = $data['detail']['cago_id'];
	$data['other_list'] = $db->other_cago($start,$limit,$cago_id,$id);
	$data['template'] = "news/news_detail_view";
	loadview("layout",$data);
?>