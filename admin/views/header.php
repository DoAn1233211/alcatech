<script type="text/javascript">
	$(document).ready(function(){
		var $items = $("ul#menu li a");
		$items.eq(<?php if(isset($data['act'])){echo $data['act'];}else{ echo 0;} ?>).addClass("selected_lk");
	});
</script>
<div id="header_main_menu">
		<span id="header_main_menu_bg"></span>
		<!--[if !IE]>start header<![endif]-->
		<div id="header">
			<div class="inner">
				<h1 id="logo"><a href="<?php echo base_url."admin"; ?>"><img src="<?php echo base_url; ?>public/images/logo.png" /></a></h1>
				
				<!--[if !IE]>start user details<![endif]-->
				<div id="user_details">
					<ul id="user_details_menu">
						<li class="welcome">Welcome <strong><a href="javascript:viod(0)"><?php echo $_SESSION['ses_user'] ;?></a> (<a class="new_messages" href="javascript:viod(0)">1 new message</a>)</strong></li>
						
						<li>
							<ul id="user_access">
								<li class="first"><a style="font-weight:bold" href="<?php echo base_url?>" target="_blank" title="Xem trang chủ">View home</a></li>
								<li class="last"><a style="font-weight:bold" href="<?php echo base_url."admin/logout.php";?>" title="Thoát">Log out</a></li>
							</ul>
						</li>
						
						
					</ul>
					
					<div id="server_details">
						<dl>
							<dt>Server time :</dt>
							<dd>
								<?php
									date_default_timezone_set('Asia/Ho_Chi_Minh');
									echo date('H:i:s - d/m/Y');
							 	;?>
                             </dd>
						</dl>
						<dl>
							<dt>Last login ip :</dt>
							<dd>
								<?php
									 //Gets the IP address
									 $ip = getenv("REMOTE_ADDR"); 
									 echo $ip; 
							 	;?>
                             </dd>
						</dl>
					</div>
					
				</div>
				
				<!--[if !IE]>end user details<![endif]-->
			</div>
		</div>
		<!--[if !IE]>end header<![endif]-->
		
		<!--[if !IE]>start main menu<![endif]-->
		<div id="main_menu">
			<div class="inner">
			<ul id="menu">
				<li>
					<a href="<?php echo base_url."admin"; ?>"><span class="l"><span></span></span><span class="m"><em>Trang chủ</em><span></span></span><span class="r"><span></span></span></a></li>
                <li><a href="<?php echo base_url."admin/index.php?mod=menu&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Danh mục</em><span></span></span><span class="r"><span></span></span></a></li>
				<li>
					<a href="<?php echo base_url."admin/index.php?mod=user&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Thành viên</em><span></span></span><span class="r"><span></span></span></a>
                   	<!--ul>
						<li><a href="<?php //echo base_url."admin/user"; ?>" class="selected_lk"><span class="l"><span></span></span><span class="m"><em>Danh sách thành viên</em><span></span></span><span class="r"><span></span></span></a></li>
						<li><a href="<?php //echo base_url."admin/user/add"; ?>"><span class="l"><span></span></span><span class="m"><em>Thêm mới</em><span></span></span><span class="r"><span></span></span></a></li>
					</ul-->
				</li>
				<li><a href="<?php echo base_url."admin/index.php?mod=news_cate&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Chuyên mục</em><span></span></span><span class="r"><span></span></span></a></li>
                <li><a href="<?php echo base_url."admin/index.php?mod=recruitment&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>ND cố định</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=news&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Tin tức</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=products&act=list"; ?>"><span class="l"><span></span></span><span class="m"><em>Sản phẩm</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=guide&act=edit"; ?>"><span class="l"><span></span></span><span class="m"><em>HD Mua hàng</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=introduction&act=edit"; ?>"><span class="l"><span></span></span><span class="m"><em>Giới thiệu</em><span></span></span><span class="r"><span></span></span></a></li>
				<li><a href="<?php echo base_url."admin/index.php?mod=contact&act=edit"; ?>"><span class="l"><span></span></span><span class="m"><em>Liên hệ</em><span></span></span><span class="r"><span></span></span></a></li>
                <li><a href="<?php echo base_url."admin/index.php?mod=config&act=edit"; ?>"><span class="l"><span></span></span><span class="m"><em>Cấu hình</em><span></span></span><span class="r"><span></span></span></a></li>
			</ul>
			</div>
			<span class="sub_bg"></span>
		</div>
		<!--[if !IE]>end main menu<![endif]-->
		
		</div>