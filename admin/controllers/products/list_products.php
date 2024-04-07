<?php
	$data = array();
	$data['title'] = "Danh sách sản phẩm";
	$data['template'] = "products/list_products";
	$data['act'] = 6;
	$db = new libraries_products;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=products&act=list");
	$total = $db->total_pro();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['pro'] = $db->list_pro($start,$limit);
	//debug($data['pro']);
	loadview("layout",$data);
?>