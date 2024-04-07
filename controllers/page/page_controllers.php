<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "view"				: require("controllers/page/page_detail.php");
			break;
		}
	}
?> 