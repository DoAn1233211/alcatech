<?php
	$data = array();
	$data['title'] = "Sửa danh mục";
	$data['template'] = "news_category/edit_cate";
	$data['act'] = 3;
	$db = new libraries_cagonews;
	if(isset($_POST['type'])){
		$title		= $_POST['cago_title'];
		$cago_id	= $_POST['cago_id'];
		if($title == ""){
			echo "false";
			die();
		}
		$data = array(
			"cago_name" => $title,
			"cago_rewrite" => replace($title),
			//"cago_status" => $status
		);
		//print_r($cago_id);
		$db->update_cago($data,$cago_id);
		die();
		/*header("location:index.php?mod=menu&act=list");
		exit();*/
	}else{
		$id = $_GET['cid'];
		$data['info'] = $db->getdata($id);
	}
	loadview("layout",$data);
?>