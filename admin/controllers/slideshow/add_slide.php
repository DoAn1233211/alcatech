<?php
	$data = array();
	$data['title'] = "Thêm mới slide show";
	$data['template'] = "slideshow/add_slide";
	$db = new libraries_slideshow;
	if(isset($_POST['ok'])){
		$title 	= $_POST['slide_title'];
		//$alt 	= $_POST['slide_alt'];
		$dir = "../public/images/slider/";
		$types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");     
			 $tmp_name = $_FILES["upload"]["tmp_name"];  
			 $new_name = $_FILES["upload"]["name"]; 
			if (in_array($_FILES["upload"]["type"], $types)){                     
				move_uploaded_file($tmp_name,$dir . $new_name);  
				//$random = date("dmYHis").rand(); 
				  $img =  $_FILES["upload"]["name"];
			}else{
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
			}
				$data = array(
					"slide_title" 	=> $title,
					"slide_alt"	=> $title,
					"slide_image"	=> $img
				);
			$db->add_slide($data);
			header("location:index.php?mod=slideshow&act=list");
			exit();
	}
	loadview("layout",$data);
?>