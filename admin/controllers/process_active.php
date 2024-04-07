<?php
	$data = array();
	$db = new libraries_cate;
	$cate_id	= $_POST['rel'];
	if(isset($_POST['type'])){
		$status		= $_POST['val'];
		if($status == 0){
		$data = array(
			"cate_status" => 1
		);
		//print_r($cate_id);
		$db->update_cate($data,$cate_id);
		die();
		/*header("location:index.php?mod=menu&act=list");
		exit();*/
		}else{
		$data = array(
			"cate_status" => 0
		);
		$db->update_cate($data,$cate_id);
		die();
		}
	}
	/*else($status == 1){
		$id = $_GET['cid'];
		$data['info'] = $db->getdata($id);
	}*/
	loadview("layout",$data);
?>