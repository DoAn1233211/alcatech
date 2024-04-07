<?php
	$data = array();
	$data['title'] = "Khách hàng liên hệ";
	$data['template'] = "contact/list_contact";
	//$data['act'] = 9;
	$db = new libraries_contact;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=contact&act=list");
	$total = $db->total_contact();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $db->list_contact($start,$limit);
	loadview("layout",$data);
?>