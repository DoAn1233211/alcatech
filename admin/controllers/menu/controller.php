<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/menu/list_menu.php");
			break;
			case "add" : require("controllers/menu/add_menu.php");
			break;
			case "del" : require("controllers/menu/del_menu.php");
			break;
			case "edit" : require("controllers/menu/edit_menu.php");
			break;
		}
	}
?>