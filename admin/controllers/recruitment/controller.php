<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list" : require("controllers/recruitment/list_rec.php");
			break;
			case "add" : require("controllers/recruitment/add_rec.php");
			break;
			case "del" : require("controllers/recruitment/del_rec.php");
			break;
			case "edit" : require("controllers/recruitment/edit_rec.php");
			break;
		}
	}
?>