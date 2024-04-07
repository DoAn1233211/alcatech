<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/customer/list_customer.php");
			break;
			case "add" : require("controllers/customer/add_customer.php");
			break;
			case "del" : require("controllers/customer/del_customer.php");
			break;
			case "edit" : require("controllers/customer/edit_customer.php");
			break;
		}
	}
?>