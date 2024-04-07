<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "edit" : require("controllers/guide/edit_guide.php");
			break;
		}
	}
?>