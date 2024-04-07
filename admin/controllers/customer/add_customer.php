<?php
	$data = array();
	$data['title'] = "Thêm mới khách hàng";
	$data['template'] = "customer/add_customer";
	$db = new libraries_customer;
	$data['items'] = $db->list_cate();
	if(isset($_POST['ok'])){
		$name	= $_POST['customer_name'];
		$user	= $_POST['customer_user'];
		$cate_id		= $_POST['cate_id'];
		$address = $_POST['customer_address'];
		$url	= $_POST['customer_url'];
		$info	= $_POST['customer_info'];
		$dir = "../uploads/customer/thumb/";
		$types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");     
			 $tmp_img = $_FILES["img"]["tmp_name"];
			 $tmp_avatar = $_FILES["avatar"]["tmp_name"];
			 $tmp_website = $_FILES["website"]["tmp_name"];  
			 $new_img = $_FILES["img"]["name"];
			 $new_avatar = $_FILES["avatar"]["name"];
			 $new_website = $_FILES["website"]["name"]; 
			if (in_array($_FILES["img"]["type"], $types)){                     
				move_uploaded_file($tmp_img,$dir . $new_img);   
				  $img =  $_FILES["img"]["name"];
			}else{                 
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
			}
			if (in_array($_FILES["avatar"]["type"], $types)){                     
				move_uploaded_file($tmp_avatar,$dir . $new_avatar);   
				  $avatar =  $_FILES["avatar"]["name"];
			}else{                 
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
			}
			if (in_array($_FILES["website"]["type"], $types)){                     
				move_uploaded_file($tmp_website,$dir . $new_website);   
				  $website =  $_FILES["website"]["name"];
			}else{                 
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
			}
			$data = array(
				"customer_name"	=> $name,
				"customer_user"	=> $user,
				"cate_id"	=> $cate_id,
				"customer_address"	=> $address,
				"customer_url"	=> $url,
				"customer_info"	=> $info,
				"customer_image"	=> $img,
				"customer_avatar"	=> $avatar,
				"customer_website"	=> $website
			);
			$db->add_customer($data);
			header("location:index.php?mod=customer&act=list");
			exit();
	}
	loadview("layout",$data);
?>