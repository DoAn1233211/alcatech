<?php
	if(isset($_GET['act'])){
		switch($_GET['act']){
			case "list"		: require("controllers/video/video_list.php");
			break;
			case "view"		: require("controllers/video/video_detail.php");
			break;
			default			: require("controllers/video/video_list.php");
		}
	}
?> 