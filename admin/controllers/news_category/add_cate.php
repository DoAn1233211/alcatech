<?php
	$data = array();
	$data['title'] = "Thêm mới danh mục";
	$data['template'] = "news_category/add_cate";
	$data['act'] = 3;
	$db = new libraries_cagonews;
	if(isset($_POST['type'])){
		$title = $_POST['cago_title'];
		if($title == ""){
			echo "false";
			die();
		}
		$data = array(
			"cago_name" => $title,
			"cago_rewrite" => replace($title)
		);
		$db->add_cago($data);
		die();
		/*header("location:index.php?mod=menu&act=list");
		exit();*/
	}
	loadview("layout",$data);
?>