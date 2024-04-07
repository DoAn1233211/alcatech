<?php
	$data = array();
	$data['title'] = "Thêm mới tin tuyển dụng";
	$data['template'] = "recruitment/add_rec";
	$data['act'] = 4;
	$db = new libraries_recruitment;
	if(isset($_POST['ok'])){
		$title 	= $_POST['rec_title'];
		$author	= $_POST['rec_author'];
		$info	= $_POST['rec_info'];
		$full	= $_POST['rec_full'];
		$rewrite = replace($_POST['rec_title']);
		$dir = "../uploads/recruitment/thumb/"; //Bạn nên thay đổi đường dẫn cho phù hợp 
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
			 echo "<script>alert('Định dạng file không hợp lệ !'); window.location.href='index.php?mod=recruitment&act=add'</script>";       
			//Debug  
		   //$name =  $_FILES["upload"]["name"];  
		   //$type =    $_FILES["upload"]["type"];  
		   //$size =    $_FILES["upload"]["size"];  
		   //$tmp =     $_FILES["upload"]["name"];      
			}
			$data = array(
				"rec_title" 	=> $title,
				"rec_author"	=> $author,
				"rec_info"		=> $info,
				"rec_full"		=> $full,
				"rec_images"	=> $img,
				"rec_rewrite"	=> $rewrite,
				"rec_date"		=> date('d-m-Y')
			);
			$db->add_rec($data);
			header("location:index.php?mod=recruitment&act=list");
			exit();
	}
	loadview("layout",$data);
?>