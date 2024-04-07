<?php
	$data = array();
	$data['title'] = "Hỗ trợ trực tuyến";
	$data['template'] = "sup/list_sup";
	$db = new libraries_sup;
	$pager = new libraries_pager;
	$limit = 10;
	$pager -> set_link("index.php?mod=support&act=list");
	$total = $db->total_sup();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['listpage'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $db->list_sup($start,$limit);
	loadview("layout",$data);
?>