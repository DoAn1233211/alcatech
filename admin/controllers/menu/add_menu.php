<?php
	$data = array();
	$data['title'] = "Thêm mới danh mục";
	$data['template'] = "menu/add_menu";
	$data['act'] = 1;
	$db = new libraries_cate;
	if(isset($_POST['type'])){
		$title = $_POST['cate_title'];
		//$title = $_POST['cate_title'];
		if($title == ""){
			echo "false";
			die();
		}
		$data = array(
			"cate_name" => $title,
			"cate_rewrite" => replace($title)
		);
		$db->add_cate($data);
		die();
		/*header("location:index.php?mod=menu&act=list");
		exit();*/
	}
	loadview("layout",$data);
?>