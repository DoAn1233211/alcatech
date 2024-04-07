<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" 	: require("controllers/news_category/list_cate.php");
			break;
			case "add" 		: require("controllers/news_category/add_cate.php");
			break;
			case "del" 		: require("controllers/news_category/del_cate.php");
			break;
			case "edit" 	: require("controllers/news_category/edit_cate.php");
			break;
			case "active"	: require("controllers/news_category/process_active.php");
			break;
		}
	}
?>