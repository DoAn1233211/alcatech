<?php
	ob_start();
	//session_start();
    require("../libraries/config.php");
	//require("../libraries/database.php");
	//require("libraries/user.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Welcome to Administrator</title>
<link media="screen" rel="stylesheet" type="text/css" href="styles/login.css"  />
<link media="screen" rel="stylesheet" type="text/css" href="styles/login-dark.css"  />
<script  type="text/javascript" src="<?php echo base_url;?>public/admin/scripts/jquery-1.7.1.js"></script>
<script  type="text/javascript" src="<?php echo base_url;?>admin/public/scripts/ajax_admin.js"></script>
<script type="text/javascript">
	var links = "<?php echo base_url ;?>";
</script>
<!--script language="javascript">
	function checklog(){
		if(document.frmlog.username.value == ""){
			alert("Please enter your name!");
			document.frmlog.username.focus();
			return false;
		}
		if(document.frmlog.password.value == ""){
			alert("Please enter your Password!");
			document.frmlog.password.focus();
			return false;
		}else{
			return true;
		}
	}
</script-->
</head>

<body>
	<!--[if !IE]>start wrapper<![endif]-->
	<div id="wrapper">
	<div id="wrapper2">
	<div id="wrapper3">
	<div id="wrapper4">
	<span id="login_wrapper_bg"></span>
	
	<div id="stripes">	
		<!--[if !IE]>start login wrapper<![endif]-->
		<div id="login_wrapper">
        <span id="result_login" style='color:#F00'></span>
			<!-- <?php /*
				if(isset($_POST['ok'])){
					$user = $_POST['username'];
					$pass = md5($_POST['password']);
					$db = new libraries_user;
					$data = $db->check_login($user,$pass);
					if($data == FALSE){
						echo "<span style='color:#F00'>Tài khoản không hợp lệ</span>";
					}else{
						$_SESSION['ses_userid'] = $data['user_id'];
						$_SESSION['ses_user'] = $data['user_name'];
						$_SESSION['ses_level'] = $data['user_level'];
						header("location:index.php");
						die();
					}					
				} */
			?> -->
			<div class="error">
				<div class="error_inner">
					<strong>Access Denied</strong> | <span>user/password combination wrong</span>
				</div>
			</div>	
			<!--[if !IE]>start login<![endif]-->
			<form action="javascript:void(0)" method="post" name="frmlog">
				<fieldset>		
					<h1>Please log in</h1>
					<div class="formular">
						<span class="formular_top"></span>
						
						<div class="formular_inner">
						
						<label>
							<strong>Username:</strong>

							<span class="input_wrapper">
								<input name="username" id="username" type="text" />
							</span>
						</label>
						<label>
							<strong>Password:</strong>
							<span class="input_wrapper">
								<input name="password" id="password" type="password" />

							</span>
						</label>
						<label class="inline">
							<input class="checkbox" name="" type="checkbox" value="" />
							remember me on this computer
						</label>	
						<ul class="form_menu">
							<li><span class="button"><span><span><em>Đồng ý</em></span></span><input type="submit" id="ok" name="ok"/></span></li>
							<li><span class="button"><span><span><a href="../index.php">Quay lại</a></span></span></span></li>
						</ul>
						
						</div>
						
						<span class="formular_bottom"></span>
						
					</div>
				</fieldset>
			</form>
			<!--[if !IE]>end login<![endif]-->
			
			<!--[if !IE]>start reflect<![endif]-->
			<span class="reflect"></span>
			<span class="lock"></span>
			<!--[if !IE]>end reflect<![endif]-->	
		</div>

		<!--[if !IE]>end login wrapper<![endif]-->
	    </div>
		</div>
     	</div>
		</div>	
	</div>
	<!--[if !IE]>end wrapper<![endif]-->
</body>
</html>
<?php
	ob_end_flush();
?>
