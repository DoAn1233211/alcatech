<?php
	$data = array();
	$data['title'] = "Thêm mới sản phẩm";
	$data['template'] = "products/add_products";
	$data['act'] = 6;
	$db = new libraries_products;
	$data['cate'] = $db->list_cate();
	if(isset($_POST['ok'])){
		$name	= $_POST['pro_name'];
		$rewrite = replace($_POST['pro_name']);
		$price	= $_POST['pro_price'];
		$market	= $_POST['pro_market'];
		$qty	= $_POST['pro_qty'];
		$promotion = $_POST['pro_promotion'];
		$video = $_POST['pro_video'];
		$info = $_POST['pro_info'];
		$war	= $_POST['pro_war'];
		$full	= $_POST['pro_full'];
		$cate	= $_POST['pro_cate'];
		$new = $_POST['pro_new'];
		$hot = $_POST['pro_hot'];
		$saleoff = $_POST['pro_saleoff'];
		$sale = $_POST['pro_sale'];
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
				"pro_name" 	=> $name,
				"pro_name_rewrite" => $rewrite,
				"pro_price"	=> $price,
				"pro_war"		=> $war,
				"pro_full"		=> $full,
				"pro_images"	=> $img,
				"pro_info"		=> $info,
				"cate_id"	=> $cate,
				"pro_market" =>$market,
				"pro_qty" => $qty,
				"pro_promotion" => $promotion,
				"pro_video" => $video,
				"pro_new" => $new,
				"pro_hot" => $hot,
				"pro_saleoff" => $saleoff,
				"pro_bestsale" => $sale
			);
			$db->add_pro($data);
			header("location:index.php?mod=products&act=list");
			exit();
	}
	loadview("layout",$data);
?>