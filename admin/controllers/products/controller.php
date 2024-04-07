<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/products/list_products.php");
			break;
			case "add" : require("controllers/products/add_products.php");
			break;
			case "del" : require("controllers/products/del_products.php");
			break;
			case "edit" : require("controllers/products/edit_products.php");
			break;
		}
	}
?>