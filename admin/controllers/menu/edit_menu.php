<?php
	$data = array();
	$data['title'] = "Sửa danh mục";
	$data['template'] = "menu/edit_menu";
	$data['act'] = 1;
	$db = new libraries_cate;
	if(isset($_POST['type'])){
		$title		= $_POST['cate_title'];
		//$status		= $_POST['cate_status'];
		$cate_id	= $_POST['cate_id'];
		if($title == ""){
			echo "false";
			die();
		}
		$data = array(
			"cate_name" => $title,
			"cate_rewrite" => replace($title),
			//"cate_status" => $status
		);
		//print_r($cate_id);
		$db->update_cate($data,$cate_id);
		die();
		/*header("location:index.php?mod=menu&act=list");
		exit();*/
	}else{
		$id = $_GET['cid'];
		$data['info'] = $db->getdata($id);
	}
	loadview("layout",$data);
?>