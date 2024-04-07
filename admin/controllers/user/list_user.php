<?php
	$data = array();
	$data['title'] = "Danh sách thành viên";
	$data['template'] = "user/list_user";
	$data['act'] = 2;
	$user = new libraries_user;
	$pager = new libraries_pager;
	$limit = 10;
	$pager->set_link("index.php?mod=user&act=list");
	$total = $user->total_user();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['list'] = $user->list_user($start,$limit);
	//debug($data['list']);
	loadview("layout",$data);