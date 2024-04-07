<?php
	$data = array();
	$data['title'] = "Liên hệ";
	$db = new model_mdel;
	if(isset($_POST['type'])){
		$name	= $_POST['con_name'];
		$email	= $_POST['con_email'];
		$phone	= $_POST['con_phone'];
		$message = $_POST['con_message'];
		$length = strlen($phone);
		if($name == "" || $email == "" || $phone == "" || $message == ""){
			echo 1;
		}else{
			if(is_numeric($phone)){
				if($length > 9 && $length < 12){
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						$data = array(
						"con_name"	=> $name,
						"con_email" => $email,
						"con_phone" => $phone,
						"con_email" => $email,
						"con_full"	=> $message,
						"con_date"	=> date('Y/m/d')
					);
					$db->insert("tbl_contact",$data);
					echo 4;
					}else{
						echo 5;
					}
				}else{
					echo 3;
				}
			}else{
				echo 2;
			}
		}
		die();
	}
	$data['template'] = "main_home/contact_view";
	loadview("layout",$data);
?>