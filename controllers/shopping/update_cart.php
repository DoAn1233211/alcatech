<?php
	session_start();
	$db = new Model_mcart;
	$db->update_cart();
	redirect("gio-hang");
?>