<?php
	$data = array();
	$data['title'] = "Danh sách các chuyên mục";
	$data['template'] = "news_category/list_cate";
	$data['act'] = 3;
	$cago = new libraries_cagonews;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=news_cate&act=list");
	$total = $cago->total_cago();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $cago->list_cago($start,$limit);
	//debug($total);
	loadview("layout",$data);
	
?>