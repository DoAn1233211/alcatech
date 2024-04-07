<?php
	$data = array();
	$data['title'] = "Sửa thông tin thành viên";
	$data['template'] = "user/edit_user";
	$data['act'] = 2;
	$db = new libraries_user;
	$id = $_GET['uid'];
	$data['info'] = $db->getdata($id);
	if(isset($_POST['ok'])){
		if($_POST['password'] !=NULL){
			$data = array(
				"user_name" => $_POST['username'],
				"user_password" => md5($_POST['password']),
				"user_fullname" => $_POST['fullname'],
				"user_address" => $_POST['address'],
				"user_phone" => $_POST['phone'],
				"user_gender" => $_POST['gender'],
				"user_email" => $_POST['email'],
				"user_level" => $_POST['level'],
				"user_status" => $_POST['status'],
			);
		}else{
			$data = array(
				"user_name" => $_POST['username'],
				"user_password" => md5($_POST['password']),
				"user_fullname" => $_POST['fullname'],
				"user_address" => $_POST['address'],
				"user_phone" => $_POST['phone'],
				"user_gender" => $_POST['gender'],
				"user_email" => $_POST['email'],
				"user_level" => $_POST['level'],
				"user_status" => $_POST['status'],
				);
		}
		$name = $db->check_user_name($_POST['username'],$id);
		$email = $db->check_user_email($_POST['email'],$id);
		if($name == NULL || $email == NULL){
			$data['template'] = "user/edit_user";
			$data['info'] = $db->getdata($id);
			$data['error'] = "Tài khoản này đã tồn tại !";
			loadview("layout",$data);
		}else{
			$db->update_user($data,$id);
			header("location:index.php?mod=user&act=list");
			exit();
		}
	}else{
		loadview("layout",$data);
	}
	
?>