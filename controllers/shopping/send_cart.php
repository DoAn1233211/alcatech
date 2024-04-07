<?php
	session_start();
	$db = new Model_mdel;
	if(isset($_POST['type'])){
		$name	= $_POST['cart_name'];
		$email	= $_POST['cart_email'];
		$phone	= $_POST['cart_tel'];
		$address = $_POST['cart_address'];
		$message = $_POST['cart_message'];
		$length = strlen($phone);
		if($name == "" || $email == "" || $phone == "" || $address == "" || $message == ""){
			echo "1";
			die();
		}else{
			if(is_numeric($phone)){
				if($length > 9 && $length < 12){
					if(filter_var($email, FILTER_VALIDATE_EMAIL)){
						$data = array(
						"name"	=> $name,
						"email" => $email,
						"phone" => $phone,
						"local" => $address,
						"message"	=> $message,
						"date"	=> date('Y/m/d')
					);
					$db->insert("tbl_order",$data);
					session_destroy();
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
	}
?>