<?php
	$data = array();
	$data['title'] = "Danh sách tin tức";
	$data['template'] = "news/list_news";
	$data['act'] = 5;
	$news = new libraries_news;
	$pager = new libraries_pager;
	$limit = 10;
	$pager -> set_link("index.php?mod=news&act=list");
	$total = $news->total_news();
	$start = $pager->start();
	$pages = $pager->page($total,$limit);
	$data['pagelist'] = $pager->listpage($pages,$start,$limit);
	$data['news'] = $news->list_news($start,$limit);
	loadview("layout",$data);
?>