<?php
	$data = array();
	$data['title'] = "Danh sách khách hàng";
	$data['template'] = "customer/list_customer";
	$db = new libraries_customer;
	$pager = new libraries_pager;
	$limit = 10;
	$pager -> set_link("index.php?mod=customer&act=list");
	$total = $db->total_customer();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['listpage'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $db->list_customer($start,$limit);
	loadview("layout",$data);
?>