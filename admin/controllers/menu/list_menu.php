<?php
	$data = array();
	$data['title'] = "Danh sách các menu";
	$data['template'] = "menu/list_menu";
	$data['act'] = 1;
	$cate = new libraries_cate;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=menu&act=list");
	$total = $cate->total_cate();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $cate->list_cate($start,$limit);
	loadview("layout",$data);
	
?>