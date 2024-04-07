<?php
	ob_start();
	session_start();
	if($_SESSION['ses_level'] != 1){
		header("location:login.php");
		exit();
	}
	require("../libraries/config.php");
	require("../libraries/functions.php");
	require("../libraries/database.php");
	if(isset($_GET['mod'])){
		switch($_GET['mod']){
			case "menu" 		: require("controllers/menu/controller.php");
			break;
			case "user" 		: require("controllers/user/controller.php");
			break;
			case "support" 		: require("controllers/sup/controller.php");
			break;
			case "products" 	: require("controllers/products/controller.php");
			break;
			case "news" 		: require("controllers/news/controller.php");
			break;
			case "news_cate" 	: require("controllers/news_category/controller.php");
			break;
			case "introduction" : require("controllers/introduction/controller.php");
			break;
			case "guide" 		: require("controllers/guide/controller.php");
			break;
			case "contact" 		: require("controllers/contact/controller.php");
			break;
			case "config" 		: require("controllers/config/controller.php");
			break;
			case "customer" 	: require("controllers/customer/controller.php");
			break;
			case "product" 		: require("controllers/product.php");
			break;
			case "recruitment" 	: require("controllers/recruitment/controller.php");
			break;
			case "slideshow" 	: require("controllers/slideshow/controller.php");
			break;
			case "services" 	: require("controllers/services/controller.php");
			break;
			case "education" 	: require("controllers/edu/controller.php");
			break;
			case "active" 		: require("controllers/process_active.php");
			break;
			default 			: require("controllers/home.php");
		}
	}else{
		require("controllers/home.php");
	}
	ob_end_flush();
?>