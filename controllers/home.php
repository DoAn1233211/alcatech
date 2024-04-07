<?php
	$data = array();
	$db = new libraries_libhome();
	$pro = new model_mpro();
	$data['title'] = "Demo website thứ 2";
	$data['list_slide'] = $db->list_slide();
	$data['list_pro_new'] = $pro->list_pro_new();
	$data['list_pro_hot'] = $pro->list_pro_hot();
	$data['list_pro_saleoff'] = $pro->list_pro_saleoff();
	$data['list_pro_bestsale'] = $pro->list_pro_bestsale();
	$data['template'] = "home";
	loadview("layout",$data);
?>