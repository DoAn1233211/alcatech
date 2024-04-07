<?php
	$data = array();
	$data['title'] = "Danh sách slide show";
	$data['template'] = "slideshow/list_slide";
	$db = new libraries_slideshow;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=slideshow&act=list");
	$total = $db->total_slide();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $db->list_slide($start,$limit);
	loadview("layout",$data);
?>