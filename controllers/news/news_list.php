<?php
	$data = array();
	$data['title'] = "Danh sách tin tức";
	$data['template'] = "news/news_list_view";
	$db = new model_mnews;
	$pager = new libraries_pager;
	$pager->set_link("index.php?page=news&act=list");
	$limit = 5;
	$total = $db->total_news();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['cate'] = $db->list_cate();
	//$data['cago'] = $db->list_cate();
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['listnews'] = $db->list_news($start,$limit);
	loadview("layout",$data);
?>