<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/news/list_news.php");
			break;
			case "add" : require("controllers/news/add_news.php");
			break;
			case "del" : require("controllers/news/del_news.php");
			break;
			case "edit" : require("controllers/news/edit_news.php");
			break;
		}
	}
?>