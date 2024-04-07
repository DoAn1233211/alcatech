<?php
	ob_start();
	session_start();
    require("../libraries/config.php");
	require("../libraries/database.php");
	require("libraries/user.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Welcome to Administrator</title>
<link media="screen" rel="stylesheet" type="text/css" href="styles/login.css"  />
<link media="screen" rel="stylesheet" type="text/css" href="styles/login-dark.css"  />
<script language="javascript">
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
</script>
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
			<?php
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
				}
			?>
<!-- <?php
session_start();
$user = $_POST['username'];
$pass = md5($_POST['password']);
$mysqli=mysqli_connect('localhost','root','','alcatech');
$query = "SELECT * FROM tbl_user WHERE user_name='$user' AND user_password='$pass'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$data=mysqli_fetch_array($result);
if( $num_row >=1 ) {
echo 'true';
$_SESSION['ses_userid'] = $data['user_id'];
$_SESSION['ses_user'] = $data['user_name'];
$_SESSION['ses_level'] = $data['user_level'];
}else{
echo 'false';
}					
?>
 -->			<div class="error">
				<div class="error_inner">
					<strong>Access Denied</strong> | <span>user/password combination wrong</span>
				</div>
			</div>	
			<!--[if !IE]>start login<![endif]-->
			<form action="login1.php" method="post" name="frmlog" onsubmit="return checklog();">
				<fieldset>		
					<h1>Please log in</h1>
					<div class="formular">
						<span class="formular_top"></span>
						
						<div class="formular_inner">
						
						<label>
							<strong>Username:</strong>

							<span class="input_wrapper">
								<input name="username" type="text" />
							</span>
						</label>
						<label>
							<strong>Password:</strong>
							<span class="input_wrapper">
								<input name="password" type="password" />

							</span>
						</label>
						<label class="inline">
							<input class="checkbox" name="" type="checkbox" value="" />
							remember me on this computer
						</label>	
						<ul class="form_menu">
							<li><span class="button"><span><span><em>Đồng ý</em></span></span><input type="submit" name="ok"/></span></li>
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
