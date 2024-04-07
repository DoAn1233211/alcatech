	<?php
		$data = array();
		$data['title'] = "Thêm mới thành viên";
		$data['template'] = "user/add_user";
		$data['act'] = 2;
		$db = new libraries_user;
		if(isset($_POST['ok'])){
			$data = array(
				"user_name" => $_POST['username'],
				"user_password" => md5($_POST['password']),
				"user_fullname" => $_POST['fullname'],
				"user_address" => $_POST['address'],
				"user_phone" => $_POST['phone'],
				"user_email" => $_POST['email'],
				"user_gender" => $_POST['gender'],
				"user_level" => $_POST['level'],
			);
			$name = $db->check_user_name($_POST['username']);
			$email = $db->check_user_email($_POST['email']);
			if($name == FALSE || $email == FALSE){
				$data['template'] = "user/add_user";
				$data['error'] = "Người dùng này đã tồn tại!";
				loadview("layout",$data);
			}else{
				$db->add_user($data);
				header("location:index.php?mod=user&act=list");
				exit();
			}
		}else{
			loadview("layout",$data);
		}
	?>