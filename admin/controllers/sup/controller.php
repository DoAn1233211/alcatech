<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/sup/list_sup.php");
			break;
			case "add" : require("controllers/sup/add_sup.php");
			break;
			case "del" : require("controllers/sup/del_sup.php");
			break;
			case "edit" : require("controllers/sup/edit_sup.php");
			break;
		}
	}
?>