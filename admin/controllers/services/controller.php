<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "edit" : require("controllers/services/edit_services.php");
			break;
		}
	}
?>