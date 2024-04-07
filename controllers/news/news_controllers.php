<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list"				: require("controllers/news/news_list.php");
			break;
			case "view"				: require("controllers/news/news_detail.php");
			break;
			case "list_cago"		: require("controllers/news/news_cago.php");
			break;
			default					: require("controllers/news/news_list.php");
		}
	}
?> 