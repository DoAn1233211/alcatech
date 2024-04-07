<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>Welcome to Administrator</title>
<link media="screen" rel="stylesheet" type="text/css" href="<?php echo base_url;?>public/admin/styles/login.css"  />
<link media="screen" rel="stylesheet" type="text/css" href="<?php echo base_url;?>public/admin/styles/login-dark.css"  />

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
			<div class="error">
				<div class="error_inner">
					<strong>Access Denied</strong> | <span>user/password combination wrong</span>
				</div>
			</div>	
			<!--[if !IE]>start login<![endif]-->
            <?php 
				if(isset($error)){
					echo "<font color='red'>$error</font>";
				}
			?>
			<form action="<?php echo base_url;?>admin/verify" method="post">
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
							<li><span class="button"><span><span><a href="#">Quay lại</a></span></span></span></li>
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