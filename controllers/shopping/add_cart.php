<?php
	session_start();
	if(isset($_GET['pid'])){
		$id = $_GET['pid'];
		$db = new Model_mcart;
		$data = $db->add_cart($id);
		$_SESSION['cart'][$id]['name'] = $data['pro_name'];
		$_SESSION['cart'][$id]['id'] = $data['pro_id'];
		if(isset($_SESSION['cart'][$id]['qty'])){
			$_SESSION['cart'][$id]['qty'] = $_SESSION['cart'][$id]['qty']+1;
		}else{
			$_SESSION['cart'][$id]['qty'] = 1;
		}
		$_SESSION['cart'][$id]['price'] = $data['pro_price'];
		$_SESSION['cart'][$id]['images'] = $data['pro_images'];
		redirect("gio-hang");
		//header("location:index.php?page=shopping&act=list");
	}else{
		die("Vui lòng chọn sản phẩm bạn muốn mua !");
	}
	//debug($data);
?>