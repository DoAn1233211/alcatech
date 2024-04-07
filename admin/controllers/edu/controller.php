<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "edit" : require("controllers/edu/edit_edu.php");
			break;
		}
	}
?>