<style type="text/css">
#content_product {
	height: auto;
	float: left;
	width: 960px;
}
</style>
<div id="popupContact">
  <div id="popupContactClose" > <a style="cursor:pointer; font-size: 30px;color:white;" onclick='closePop();'> <img src="<?php echo base_url."public/images/";?>ico_close.png" alt="" /></a> </div>
  <p id="contactArea"><a href="javascript:void(0)" target="_blank"><img src="<?php echo base_url."public/images/";?>popup_popup_popup_924_pop-01.png" alt="" /></a></p>
</div>
<div id="backgroundPopup"></div>
<div id="slider">
  <div id="wowslider-container1">
    <div class="ws_images">
      <?php
					if(isset($data['list_slide']) && $data['list_slide'] != NULL){
						foreach($data['list_slide'] as $items){
							echo "<a href='javascript:void(0)' title='".$items['slide_title']."'><img alt='".$items['slide_title']."' src='".base_url."public/images/slider/".$items['slide_image']."' height='454' width='960' /></a>";
						}
					}else{
						echo "Chưa cập nhật !";
					}
				?>
      <!--a href="#"><img alt="" src="<?php echo base_url."public/images/";?>slider.png" height="454" width="960" /></a>
                <a href="#"><img alt="" src="<?php echo base_url."public/images/";?>1.jpg" height="454" width="960" /></a>
                <a href="#"><img alt="" src="<?php echo base_url."public/images/";?>2.jpg" height="454" width="960" /></a--> 
    </div>
    <div class="ws_bullets">
      <div>&nbsp;</div>
    </div>
  </div>
</div>
<div id="content">
<div id="content_product">
	<div class="list_menu_title">
		Sản phẩm mới
	</div>
  <ul class="list_product">
    <?php 
			if(isset($data['list_pro_new']) && $data['list_pro_new'] != NULL){
				$stt = 1;
				foreach($data['list_pro_new'] as $value){
		?>
    <?php
		if($stt % 4 == 0){
	?>
    <li style="margin-right:0px;">
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
					
	}else{
		?>
    <li>
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
		}
		$stt++;
	?>
    <?php } }else{echo "<li style='height:auto;width:940px;padding:10px;'>Sản phẩm chưa cập nhật !</li>";}?>
  </ul>
</div>
<!--End List product-->

<div id="content_product">
	<div class="list_menu_title">
		Sản phẩm Khuyến mại
	</div>
  <ul class="list_product">
    <?php 
			if(isset($data['list_pro_saleoff']) && $data['list_pro_saleoff'] != NULL){
				$stt = 1;
				foreach($data['list_pro_saleoff'] as $value){
		?>
    <?php
		if($stt % 4 == 0){
	?>
    <li style="margin-right:0px;">
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
					
	}else{
		?>
    <li>
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
		}
		$stt++;
	?>
    <?php } }else{echo "<li style='height:auto;width:940px;padding:10px;'>Sản phẩm chưa cập nhật !</li>";}?>
  </ul>
</div>
<!--End List product-->

<div id="content_product">
	<div class="list_menu_title">
		Sản phẩm Bán chạy
	</div>
  <ul class="list_product">
    <?php 
			if(isset($data['list_pro_bestsale']) && $data['list_pro_bestsale'] != NULL){
				$stt = 1;
				foreach($data['list_pro_bestsale'] as $value){
		?>
    <?php
		if($stt % 4 == 0){
	?>
    <li style="margin-right:0px;">
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
					
	}else{
		?>
    <li>
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
		}
		$stt++;
	?>
    <?php } }else{echo "<li style='height:auto;width:940px;padding:10px;'>Sản phẩm chưa cập nhật !</li>";}?>
  </ul>
</div>
<!--End List product-->

<div id="content_product">
	<div class="list_menu_title">
		Sản phẩm Hot
	</div>
  <ul class="list_product">
    <?php 
			if(isset($data['list_pro_hot']) && $data['list_pro_hot'] != NULL){
				$stt = 1;
				foreach($data['list_pro_hot'] as $value){
		?>
    <?php
		if($stt % 4 == 0){
	?>
    <li style="margin-right:0px;">
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
					
	}else{
		?>
    <li>
      <div class="tooltip" style="left: 157.5px; top: 66px; display: none;">
        <div class="bgtip">
          <h2 class="stickyTitle" style="text-align:left"><?php echo $value['pro_name'] ;?></h2>
          <p style="text-align:left"><strong>Giá :</strong> <span style="color: red;font-weight: bold;"> 
		  	<?php 
				if($value['pro_price'] == ''){
					echo "Liên hệ";
				}else{
					echo $value['pro_price'] ;
				}
			?> VND 
          </span></p>
          <p style="border-bottom: 1px dotted #ccc;">&nbsp;</p>
          <p>&nbsp;</p>
          <div class="hunv_summary" style="text-align:left">- 
            Dell Vostro 5460 Core i3 3110M (2.4Ghz), Ram 2GB Buss 1600Mhz , HDD 500GB 5400 RPM, Display 14" Led (1366x768), VGA Intel HD 4000, Pin 3Cell, Dos <br>
          </div>
        </div>
      </div>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_new' src='".base_url."public/images/new.png' alt='new'>";
		}
	  ?>
      <?php
	  	if($value['pro_new'] == 1){
			echo "<img class='pro_hot' src='".base_url."public/images/hot.png' alt='hot'>";
		}
	  ?>
      <div class="product_img"> <a href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>" title="<?php echo $value['pro_name'] ;?>"> <img class="pro_images" src="<?php echo base_url."public/images/".$value['pro_images'];?>" alt="<?php echo $value['pro_name'] ;?>"></a>
        <div class="pro_price"> <?php echo number_format($value['pro_price']) ;?> VND </div>
      </div>
      <div class="product_info"> 
        <!--  <p class="promotion"><span class="km_red">Khuyến mại:</span> Chuột Quang, Bộ vệ sinh Laptop, Túi Xách, Phần mềm virus bản quyền.</p> -->
        <p class="promotion"><a style="color: #1481de;" href="<?php echo base_url.$value['pro_name_rewrite'].'/p'.$value['pro_id'].'.html' ;?>"><?php echo $value['pro_name'] ;?></a></p>
        <p class="pro_addcate"><a href="index.php?page=shopping&act=add&pid=<?php echo $value['pro_id']; ?>" title="Mua hàng"> <img src="<?php echo base_url."public/images/";?>buy.png" alt="Mua hàng"></a></p>
      </div>
    </li>
    <?php
		}
		$stt++;
	?>
    <?php } }else{echo "<li style='height:auto;width:940px;padding:10px;'>Sản phẩm chưa cập nhật !</li>";}?>
  </ul>
</div>
<!--End List product-->


<!--div id="content_mid">
  <div id="content_news">
    <h2 class="news_title">TIN TỨC</h2>
    <div class="cls_border"></div>
    <div id="news_content">
      <div id="news_content_top">
        <div class="news_img"> <a href="#" title=""><img class="img_img" src="<?php echo base_url."public/images/";?>hot_news.jpg" alt="" /></a> </div>
        <span class="news_date">04/08/2013</span>
        <h3 class="news_content_top_title"> <a href="#" title="Ấn tượng công nghệ full HD của smartphone giá rẻ tempor incidi dunt ut iabore et  dolore managa  aliqua. Ut">Ấn tượng công nghệ full HD của smartphone giá rẻ tempor incidi dunt ut iabore et  dolore managa  aliqua. Ut</a> </h3>
        <p class="news_info">HKPhone Revo LEAD là chiếc smartphone tích hợp công nghệ màn hình Full HD sắc nét với mức giá rẻ nhất hiện nay.</p>
      </div>
      <div id="news_content_left">
        <div class="news_thumb_list">
          <div class="news_thumb"> <a href="#" title="Giới trẻ, người già đề mê Revo max"><img class="img_thumb" src="<?php echo base_url."public/images/";?>list_news.jpg" alt="" /></a> </div>
          <h3 class="news_thumb_title"><a href="#" title="Giới trẻ, người già đề mê Revo max">Giới trẻ, người già đề mê Revo max</a></h3>
        </div>
        <div class="thumb_cls"></div>
        <div class="news_thumb_list">
          <div class="news_thumb"> <a href="#" title="Giới trẻ, người già đề mê Revo max"><img class="img_thumb" src="<?php echo base_url."public/images/";?>list_news.jpg" alt="" /></a> </div>
          <h3 class="news_thumb_title"><a href="#" title="Giới trẻ, người già đề mê Revo max">Giới trẻ, người già đề mê Revo max</a></h3>
        </div>
        <div class="thumb_cls"></div>
        <div class="news_thumb_list">
          <div class="news_thumb"> <a href="#" title="Giới trẻ, người già đề mê Revo max"><img class="img_thumb" src="<?php echo base_url."public/images/";?>list_news.jpg" alt="" /></a> </div>
          <h3 class="news_thumb_title"><a href="#" title="Giới trẻ, người già đề mê Revo max">Giới trẻ, người già đề mê Revo max</a></h3>
        </div>
      </div>
      <div id="news_content_right">
        <ul class="list_news">
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
          <li><a href="#" title="Giới trẻ, người già đều mê Revo MAX">Giới trẻ, người già đều mê Revo MAX</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div id="content_video">
    <h2 class="video_title">VIDEO</h2>
    <div class="cls_border"></div>
    <div id="video_play"> <a class="right_video_item" href="/pandang-pertama-alcatel-one-touch-idol-x/a25.html" title="Pandang Pertama : Alcatel One Touch Idol X"><img style="float:left" src="<?php echo base_url."public/images/";?>video.png" width="378" height="263" alt="Pandang Pertama : Alcatel One Touch Idol X"> <span class="right_video_item_play">Xem video</span> </a> </div>
    <div id="video_list">
      <ul class="list_video">
        <li><a href="#" title="">Giới trẻ, người già đều mê Revo MAX</a></li>
        <li><a href="#" title="">Giới trẻ, người già đều mê Revo MAX</a></li>
        <li><a href="#" title="">Giới trẻ, người già đều mê Revo MAX</a></li>
      </ul>
    </div>
  </div>
</div-->
<!--End content_mid--> 
