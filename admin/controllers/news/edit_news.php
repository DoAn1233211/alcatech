<?php
	$data = array();
	$data['title'] = "Sửa tin tức";
	$data['template'] = "news/edit_news";
	$data['act'] = 5;
	$id = $_GET['nid'];
	$news = new libraries_news;
	$data['info'] = $news->getdata($id);
	$data['cate'] = $news->list_cate();
	if(isset($_POST['ok'])){
		$title 	= $_POST['news_title'];
		$author	= $_POST['news_author'];
		$info	= $_POST['news_info'];
		$full	= $_POST['news_full'];
		$cate	= $_POST['news_cate'];
		$rewrite = replace($_POST['news_title']);
		$dir = "../uploads/news/thumb/"; //đường dẫn
		//Kiểu file, Gif, jpeg, zip ::bạn có thể sửa đổi nếu thích 
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
			if($_FILES["upload"]["name"] !=NULL){
				$data = array(
					"news_title" 	=> $title,
					"news_author"	=> $author,
					"news_info"		=> $info,
					"news_full"		=> $full,
					"news_rewrite" 	=> $rewrite,
					"news_images"	=> $img,
					"news_date"		=> date('d-m-Y'),
					"cago_id"		=> $cate
				);
			}else{
				$data = array(
					"news_title" 	=> $title,
					"news_author"	=> $author,
					"news_info"		=> $info,
					"news_full"		=> $full,
					"news_rewrite" => $rewrite,
					//"news_images"	=> $img,
					"news_date"		=> date('d-m-Y'),
					"cago_id"		=> $cate
				);
			}
			$news->update_news($data,$id);
			header("location:index.php?mod=news&act=list");
			exit();
	}
	loadview("layout",$data);
?>