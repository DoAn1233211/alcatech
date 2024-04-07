<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/slideshow/list_slide.php");
			break;
			case "add" : require("controllers/slideshow/add_slide.php");
			break;
			case "del" : require("controllers/slideshow/del_slide.php");
			break;
			case "edit" : require("controllers/slideshow/edit_slide.php");
			break;
		}
	}
?>