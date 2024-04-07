<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list"		: require("controllers/product/pro_list.php");
			break;
			case "view"	: require("controllers/product/pro_detail.php");
			break;
			default			: require("controllers/product/pro_list.php");
		}
	}
?>