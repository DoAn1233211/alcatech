<?php
	require("libraries/config.php");
	require("libraries/database.php");
	require("libraries/functions.php");
	if(isset($_GET['page'])){
		switch($_GET['page']){
			case "home" 		: require("controllers/home.php");
			break;
			case "introduction" : require("controllers/introduction.php");
			break;
			case "product"		: require("controllers/product/pro_controllers.php");
			break;
			case "news" 		: require("controllers/news/news_controllers.php");
			break;
			case "contact"		: require("controllers/contact.php");
			break;
			case "video"		: require("controllers/video/video_controllers.php");
			break;
			case "register"		: require("controllers/register.php");
			break;
			case "login"		: require("controllers/login.php");
			break;
			case "page"			: require("controllers/page/page_controllers.php");
			break;
			case "shopping"		: require("controllers/shopping/shopping_controllers.php");
			break;
			default				: require("controllers/home.php");
		}
	}else{
		require("controllers/home.php");
	}
?>