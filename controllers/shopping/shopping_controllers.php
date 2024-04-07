<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" 	: require("controllers/shopping/list_cart.php");
			break;
			case "add"		: require("controllers/shopping/add_cart.php");
			break;
			case "update"	: require("controllers/shopping/update_cart.php");
			break;
			case "del"		: require("controllers/shopping/del_cart.php");
			break;
			case "send"		: require("controllers/shopping/send_cart.php");
			break;
		}
	}
?>