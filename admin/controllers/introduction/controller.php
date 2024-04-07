<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "edit" : require("controllers/introduction/edit_intro.php");
			break;
		}
	}
?>