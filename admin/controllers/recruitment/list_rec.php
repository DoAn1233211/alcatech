<?php
	$data = array();
	$data['title'] = "Danh sách tin tuyển dụng";
	$data['template'] = "recruitment/list_rec";
	$data['act'] = 4;
	$rec = new libraries_recruitment;
	$pager = new libraries_pager;
	$limit = 10;
	$pager -> set_link("index.php?mod=recruitment&act=list");
	$total = $rec->total_rec();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['rec'] = $rec->list_rec($start,$limit);
	loadview("layout",$data);
?>