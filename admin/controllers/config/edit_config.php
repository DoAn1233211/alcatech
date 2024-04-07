<?php
	$data = array();
	$data['title'] = "Cấu hình website";
	$data['template'] = "config/config";
	$data['act'] = 10;
	$db = new libraries_config;
	$data['info'] = $db->getdata(1);
	if(isset($_POST['ok'])){
		$title 	= $_POST['config_title'];
		$keys 	= $_POST['config_key'];
		$des 	= $_POST['config_des'];
		$footer = $_POST['config_footer'];
		$dir = "../public/images/"; //Bạn nên thay đổi đường dẫn cho phù hợp 
		//Kiều file, Gif, jpeg, zip ::bạn có thể sửa đổi nếu thích 
		$types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");     
		//Check to determine if the submit button has been pressed  
		//Shorten Variables  
			 $tmp_name = $_FILES["upload"]["tmp_name"];  
			 $new_name = $_FILES["upload"]["name"]; 
		//Check MIME Type  
			if (in_array($_FILES["upload"]["type"], $types)){                     
				 //Move file from tmp dir to new location  
				move_uploaded_file($tmp_name,$dir . $new_name);   
				  $img =  $_FILES["upload"]["name"];
			}else{                 
			//Print Error Message  
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
			//Debug  
		   //$name =  $_FILES["upload"]["name"];  
		   //$type =    $_FILES["upload"]["type"];  
		   //$size =    $_FILES["upload"]["size"];  
		   //$tmp =     $_FILES["upload"]["name"];      
			}       
		$data = array(
			"config_title" 	=> $title,
			"config_key"	=> $keys,
			"config_des"	=> $des,
			"config_footer"	=> $footer,
			"config_logo"	=> $img
			
		);
		$db->update_config($data,1);
		header("location:index.php");
		exit();
	}
	loadview("layout",$data);
?>