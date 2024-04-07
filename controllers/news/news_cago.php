<?php
	$data = array();
	$id = $_GET['cid'];
	$data['template'] = "news/news_cago_view";
	$db = new model_mnews;
	$data['cago_detail'] = $db->get_cago($id);
	//debug($data['cago_detail']);
	$pager = new libraries_pager;
	$pager->set_link("index.php?page=news&act=list_cago&cid=".$id."");
	$limit = 5;
	$total = $db->total_cago($id);
	$start = $pager->start();
	$pages = $pager->page($total,$limit,$id);
	$data['cate'] = $db->list_cate();
	$data['title'] = $data['cago_detail']['cago_name'];
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['listnews'] = $db->list_cago($start,$limit,$id);
	//debug($data['listnews']);
	loadview("layout",$data);
?>