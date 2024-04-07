<?php
	$data = array();
	$data['title'] = "Sửa thông tin khách hàng";
	$data['template'] = "customer/edit_customer";
	$db = new libraries_customer;
	$id = $_GET['cid'];
	$data['info'] = $db->getdata($id);
	$data['items'] = $db->list_cate();
	$data['errors'] = "";
	if(isset($_POST['ok'])){
		$name	= $_POST['customer_name'];
		$user	= $_POST['customer_user'];
		$cate_id		= $_POST['cate_id'];
		$address = $_POST['customer_address'];
		$url	= $_POST['customer_url'];
		$info	= $_POST['customer_info'];
		$status	= $_POST['status'];
		$dir = "../uploads/customer/thumb/";
		$update = array(
				"customer_name"	=> $name,
				"customer_user"	=> $user,
				"cate_id"	=> $cate_id,
				"customer_address"	=> $address,
				"customer_url"	=> $url,
				"customer_info"	=> $info,
				"customer_status"	=> $status
		);
		$types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");     
			 $tmp_img = $_FILES["img"]["tmp_name"];
			 $new_img = $_FILES["img"]["name"];
			if($new_img != NULL){
				if (in_array($_FILES["img"]["type"], $types)){                     
					move_uploaded_file($tmp_img,$dir . $new_img);   
					$update['customer_image'] =  $_FILES["img"]["name"];
				}else{                 
					$data['errors'] = "Ảnh không đúng định dạng!";
					loadview("layout",$data);
					//echo "<script>alert('Định dạng file không hợp lệ !')/script>"; 
					//return FALSE;      
				}
			}
			 $tmp_avatar = $_FILES["avatar"]["tmp_name"];
			 $new_avatar = $_FILES["avatar"]["name"];
			if($new_avatar != NULL){
				if(in_array($_FILES["avatar"]["type"], $types)){                     
					move_uploaded_file($tmp_avatar,$dir . $new_avatar);   
  				  $update['customer_avatar'] =  $_FILES["avatar"]["name"];
				}else{                 
					$data['errors'] = "Ảnh không đúng định dạng!";
					loadview("layout",$data);
				}
			}
			 $tmp_website = $_FILES["website"]["tmp_name"];  
			 $new_website = $_FILES["website"]["name"]; 
			if($new_website != NULL){
				if (in_array($_FILES["website"]["type"], $types)){                     
					move_uploaded_file($tmp_website,$dir . $new_website);   
					$update['customer_website'] =  $_FILES["website"]["name"];
				}else{                 
					$data['errors'] = "Ảnh không đúng định dạng!";
					loadview("layout",$data);
				}
			}
		$db->update_customer($update,$id);
		header("location:index.php?mod=customer&act=list");
		exit();
	}
	loadview("layout",$data);
?>