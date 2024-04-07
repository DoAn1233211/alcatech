<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/user/list_user.php");
			break;
			case "add" : require("controllers/user/add_user.php");
			break;
			case "del" : require("controllers/user/del_user.php");
			break;
			case "edit" : require("controllers/user/edit_user.php");
			break;
		}
	}
?>