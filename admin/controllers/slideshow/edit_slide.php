<?php
	$data = array();
	$data['title'] = "Sửa slide show";
	$data['template'] = "slideshow/edit_slide";
	$db = new libraries_slideshow;
	$id = $_GET['sid'];
	$data['info'] = $db->getdata($id);
	if(isset($_POST['ok'])){
		$title 	= $_POST['slide_title'];
		$status 	= $_POST['status'];
		//$alt 	= $_POST['slide_alt'];
		$dir = "../public/images/slider/";
		$types = array("image/gif","image/GIF","image/JPG","image/jpg","image/JPEG","image/jpeg","image/png","image/PNG","application/x-zip-compressed","application/msword","application/vnd.ms-excel");     
			 $tmp_name = $_FILES["upload"]["tmp_name"];  
			 $new_name = $_FILES["upload"]["name"]; 
			if (in_array($_FILES["upload"]["type"], $types)){                     
				move_uploaded_file($tmp_name,$dir . $new_name);   
				  $img =  $_FILES["upload"]["name"];
			}else{
			 echo "<script>alert('Định dạng file không hợp lệ !');</script>";       
			}
			if($_FILES["upload"]["name"] !=NULL){
				$data = array(
					"slide_title" 	=> $title,
					"slide_alt"	=> $title,
					"slide_status" 	=> $status,
					"slide_image"	=> $img
				);
			}else{
				$data = array(
					"slide_title" 	=> $title,
					"slide_alt"	=> $title,
					"slide_status" 	=> $status,
					//"slide_image"	=> $img
				);
			}
			$db->update_slide($data,$id);
			header("location:index.php?mod=slideshow&act=list");
			exit();
	}
	loadview("layout",$data);
?>