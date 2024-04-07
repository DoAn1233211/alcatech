<?php
	$data = array();
	$data['title'] = "Thêm mới tin tức";
	$data['template'] = "news/add_news";
	$data['act'] = 5;
	$news = new libraries_news;
	$data['cate'] = $news->list_cate();
	//debug($data['cate']);
	if(isset($_POST['ok'])){
		$title 	= $_POST['news_title'];
		$author	= $_POST['news_author'];
		$info	= $_POST['news_info'];
		$full	= $_POST['news_full'];
		$cate	= $_POST['news_cate'];
		$rewrite = replace($_POST['news_title']);
		$dir = "../uploads/news/thumb/"; //Bạn nên thay đổi đường dẫn cho phù hợp 
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
				"news_title" 	=> $title,
				"news_author"	=> $author,
				"news_info"		=> $info,
				"news_full"		=> $full,
				"news_images"	=> $img,
				"news_rewrite" 	=> $rewrite,
				"news_date"		=> date('d-m-Y'),
				"cago_id"		=> $cate
			);
			$news->add_news($data);
			header("location:index.php?mod=news&act=list");
			exit();
	}
	loadview("layout",$data);
?>