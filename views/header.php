<div id="bg_header">
  <div id="header">
  	<div id="header_logo">
    	<a href="<?php echo base_url ;?>" title="logo"><img src="<?php echo base_url."public/images/";?>logo.png" alt="logo" /></a>
    </div>
    <div id="header_support">
    	<a rel="nofollow" title="Hỗ trợ trực tuyến" href="ymsgr:sendim?nhatgai195&amp;m=Hỏi+về+dịch vụ alcate"><img class="img_support" src="<?php echo base_url."public/images/";?>support.png" alt="support" /></a>
    </div>
    <div id="header_right">
    	<div id="header_right_top">
      	<div id="header_right_top_payment">
        	<p class="txt_color" title="Thanh toán khi nhận hàng">THANH TOÁN</p>khi nhận hàng
        </div>
        <div id="header_right_top_free">
        	<p class="txt_color" title="Miễn phí giao hàng">MIỄN PHÍ</p>
        	giao hàng
        </div>
        <div id="header_right_top_hotline">
        	<p class="txt_color" title="Hotline 0976 256 106">HOTLINE</p><span class="number_hotline">0976 256 106</span>
        </div>
      </div>
      <div id="bg_header_right_bottom">
        <div id="header_right_bottom_login">
            <a rel="nofollow" href="<?php echo base_url."dang-ky.html" ;?>" title="Đăng ký">Đăng ký</a> |
            <a rel="nofollow" href="<?php echo base_url."dang-nhap.html" ;?>" title="Đăng nhập">Đăng nhập</a> 
        </div>
        <div id="header_right_bottom"><span class="cate_cate">Giỏ hàng</span><br>Có <a rel="nofollow" href="<?php echo base_url ; ?>gio-hang"><span class="number_cate"><b id="count_shopping_cart_store"><?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);}else{echo "0";};?></b></span></a> sản phẩm
        </div>
      </div>
    </div>
  </div>
</div>
<div id="bg_content">
  <div id="contener">
  	<div id="bttop" title="Lên đầu trang" style=""><img src="<?php echo base_url."public/images/";?>scoll_top.png" alt=""></div>
      <div id="banner_left_scroll">
        <a href="#"><img alt="Khuyến mại" src="<?php echo base_url."public/images/";?>rv0482710009.jpg" /></a>
    </div>
    <div id="banner_right_scroll">
        <a href="#"><img alt="Khuyến mại" src="<?php echo base_url."public/images/";?>rv0482710009.jpg" /></a>
    </div>
    <div id="menu_top">
    	<ul class="list_menutop">
      	<li class="li_ac"><a class="active" href="<?php echo base_url ;?>" title="Trang chủ">Trang chủ</a></li>
        <li class="li_ac"><a href="<?php echo base_url."gioi-thieu.html" ;?>" title="Giới thiệu">Giới thiệu</a></li>
        <li><a href="<?php echo base_url."san-pham.html" ;?>" title="Sản phẩm">Sản phẩm</a>
			<ul>
				<li><a href="#">Acer</a></li>
				<li><a href="#">Asus</a></li>
				<li><a href="#">Dell</a></li>
				<li><a href="#">Sony</a></li>
			</ul>
		</li>
        <li><a href="<?php echo base_url."tin-tuc.html" ;?>" title="Tin tức">Tin tức</a></li>
        <li><a href="<?php echo base_url."video/ac200.html" ;?>" title="Video">Video</a></li>
        <li><a href="<?php echo base_url."lien-he.html" ;?>" title="Hỗ trợ">Liên hệ</a></li>
      </ul>
      <div id="bg_search">
      	<form action="#" method="get" enctype="multipart/form-data">
        	<div id="search">
          	<input class="txt_search" placeholder="Từ khóa tìm kiếm ..." />
          </div>
          <div id="submit">
          	<input class="btn_search" type="submit" value="" />
          </div>
        </form>
      </div>
    </div>
    <!--End menu_top-->
    
