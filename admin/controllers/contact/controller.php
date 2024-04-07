<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "edit" : require("controllers/contact/edit_contact.php");
			break;
			case "list" : require("controllers/contact/list_contact.php");
			break;
			case "view" : require("controllers/contact/detail_contact.php");
			break;
			case "del" : require("controllers/contact/del_contact.php");
			break;
		}
	}
?>