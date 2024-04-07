<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "edit" : require("controllers/config/edit_config.php");
			break;
		}
	}
?>