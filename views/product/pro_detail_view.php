<div class="content_link">
  <a href="/" title="Trang chủ">Trang chủ</a> &raquo; <a href="#" title=""><span class="sanpham"><?php echo $data['pro_detail']['pro_name'] ;?></span></a>
</div>

<div id="content" style="height:auto">
<div id="bg_left_right">
  <div id="content_left">
    <div id="detail_product">
      <div id="pro_images">
        <div id="pro_images_image"> 
        <a href="<?php echo base_url."public/images/".$data['pro_detail']['pro_images'] ;?>" title="" class="MagicZoom" id="Zoomer" rel="selectors-effect-speed: 600" style="position: relative; display: inline-block; text-decoration: none; outline: 0px; margin: auto; width: 240px;"><img class="pro_detail_img" src="<?php echo base_url."public/images/".$data['pro_detail']['pro_images'] ;?>" style="max-width: 240px; max-height: 242px; opacity: 1; visibility: visible;">
          <div class="MagicZoomPup" style="z-index: 10; position: absolute; overflow: hidden; display: none; visibility: hidden; width: 238px; height: 240px; opacity: 0.5; left: 0px; top: 0px;"></div>
          <div class="MagicZoomHint" style="display: block; overflow: hidden; position: absolute; visibility: visible; z-index: 1; left: 2px; right: auto; top: 2px; bottom: auto; opacity: 0.75; max-width: 236px;">Zoom</div>
          </a> 
          <!--img class="pro_detail_img"  src="/media/product/250_229_1_test.jpg" alt="Dell Vostro 5460 Core i3 3110-2GB-500GB" /--> 
        </div>
        <div id="pro_images_info">
          <ul class="pro_thumb_list">
            
            <!--li><a href="javascript:void(0)" title="" name="/media/product/250_229_1_test.jpg"><img src="/media/product/120_229_1_test.jpg" alt="Dell Vostro 5460 Core i3 3110-2GB-500GB" /></a></li-->
            <li><a href="<?php echo base_url."public/images/".$data['pro_detail']['pro_images'] ;?>" title="" rel="zoom-id:Zoomer;" rev="<?php echo base_url."public/images/".$data['pro_detail']['pro_images'] ;?>" style="outline: 0px; display: inline-block;"> <img src="<?php echo base_url."public/images/".$data['pro_detail']['pro_images'] ;?>" alt=""></a></li>
            
            <!--li><a href="javascript:void(0)" title="" name="/media/product/250_229_2_test.jpg"><img src="/media/product/120_229_2_test.jpg" alt="Dell Vostro 5460 Core i3 3110-2GB-500GB" /></a></li-->
            <li><a href="<?php echo base_url."public/images/";?>229_2_test.jpg" title="" rel="zoom-id:Zoomer;" rev="<?php echo base_url."public/images/";?>229_2_test.jpg" style="outline: 0px; display: inline-block;"> <img src="<?php echo base_url."public/images/";?>229_2_test.jpg" alt=""></a></li>
            
            <!--li><a href="javascript:void(0)" title="" name="product_lagre.png"><img src="/includes/images/product_thumb.png" alt="" /></a></li-->
          </ul>
        </div>
      </div>
      <div id="pro_info">
        <h2 class="detail_title"><?php echo $data['pro_detail']['pro_name'] ;?></h2>
        <p class="detail_des"><?php echo $data['pro_detail']['pro_info'] ;?></p>
        <p class="warranty"><span style="font-weight:bold;">Bảo hành:</span> 
			<?php if($data['pro_detail']['pro_war'] == ''){echo "Liên hệ";}else{echo $data['pro_detail']['pro_war'];};?>
        </p>
        <p class="promotions"><span style="text-decoration:underline;font-weight:bold;">Khuyến mãi:</span> <?php if($data['pro_detail']['pro_promotion'] == ''){echo "Liên hệ";}else{echo $data['pro_detail']['pro_promotion'];};?></p>
        <p class="status">Trạng thái: <span style="color:#f00;"> <?php if($data['pro_detail']['pro_promotion'] == ''){echo "Hết hàng";}else{echo "Còn hàng";};?></span></p>
        <p class="price">Giá: <span style="color:#f00;font-size:16px;"> <?php if($data['pro_detail']['pro_price'] == ''){echo "Liên hệ";}else{echo number_format($data['pro_detail']['pro_price']);};?> <span style="text-decoration:underline">VND</span></span></p>

        <p class="market_price">Giá thị trường: <span style="text-decoration:line-through;color:#666;"> 
		<?php if($data['pro_detail']['pro_market'] == ''){echo "Liên hệ";}else{echo number_format($data['pro_detail']['pro_market']);};?> VNĐ
        </span></p>
        
        <!-- <p class="market_price">Lưu sản phẩm: <a title="Lưu sản phẩm" href="javascript:;" onClick="user_like_content(229, 'pro')" class="btnlike"><img style="width:35px;height:35px" src="<?php echo base_url."public/images/";?>saved.jpg"></a></p> -->
        <div class="synthesis">
          <div class="cssOrder" style="float:left;"><span style="font-size:14px">Số lượng</span>
            <select id="s_quantity">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
          <div class="cssOrder" style="float:right;"> <a href="index.php?page=shopping&act=add&pid=<?php echo $data['pro_detail']['pro_id']; ?>" title="Mua hàng"><img src="<?php echo base_url."public/images/";?>add_cate_detail.png" alt=""></a> </div>
        </div>
        <div class="share_this"> <span class="st_facebook" displaytext="" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="chicklets facebook"></span><img src="http://w.sharethis.com/images/check-small.png" style="position: absolute; top: -6px; right: auto; width: 13px; height: 13px; max-width: 13px; max-height: 13px; display: none; left: 8px;"></span></span> <span class="st_twitter" displaytext="" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="chicklets twitter"></span><img src="http://w.sharethis.com/images/check-small.png" style="position: absolute; top: -6px; right: auto; width: 13px; height: 13px; max-width: 13px; max-height: 13px; display: none; left: 8px;"></span></span> <span class="st_googleplus" displaytext="" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="chicklets googleplus"></span><img src="http://w.sharethis.com/images/check-small.png" style="position: absolute; top: -6px; right: auto; width: 13px; height: 13px; max-width: 13px; max-height: 13px; display: none; left: 8px;"></span></span> <span class="st_sharethis" displaytext="" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span class="chicklets sharethis"></span><img src="http://w.sharethis.com/images/check-small.png" style="position: absolute; top: -6px; right: auto; width: 13px; height: 13px; max-width: 13px; max-height: 13px; display: none; left: 8px;"></span></span> 
          <script type="text/javascript">var switchTo5x=true;</script> 
          <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> 
          <script type="text/javascript">stLight.options({publisher: "a7e862b4-2800-4bf5-9a3a-015522fcf16b", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script> 
        </div>
      </div>
    </div>
    <div id="info_product">
      <div class="tabs_list">
        <ul class="product_tabs">
          <li><a href="javascript:void(0)" class="active" name="0">Thông số</a></li>
          <li><a href="javascript:void(0)" name="1">Bài viết</a></li>
          <li><a href="javascript:void(0)" name="2">Video</a></li>
          <li><a href="javascript:void(0)" name="3">Phụ kiện</a></li>
        </ul>
      </div>
      <div class="des_detail_pro" style="display: block;">
        <?php if($data['pro_detail']['pro_full'] == ''){echo "Chưa cập nhật !";}else{echo $data['pro_detail']['pro_full'];};?>
      </div>
      <div class="des_detail_pro" style="display: none;">
        <div id="content_block_discussion" class="wysiwyg-content hidden">
          <div id="content_discussion">
            <p>Hiện tại chưa có ý kiến đánh giá nào về sản phẩm. Hãy là người đầu tiên chia sẻ cảm nhận của bạn. <a style="color:#1daae6" href="javascript:;" onClick="toggleview('w_review')">Viết đánh giá</a></p>
            <div id="w_review" style="display: none;line-height: 26px;"> 
              
              <!--Form gui y kien danh gia san pham-->
              
              <form action="/ajax/post_product_review.php" method="post" enctype="multipart/form-data">
                <h3>Gửi ý kiến đánh giá sản phẩm</h3>
                <div><b>Cho điểm</b>
                  <select name="product_review_rating">
                    <option value="5" selected="selected">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                  </select>
                </div>
                <br>
                <div><b>Tiêu đề</b> (<span style="color:#FF0000">bắt buộc</span>)</div>
                <input class="shopping_info_cus" type="text" name="product_review_subject" size="60">
                <br>
                <div><b>Nội dung chi tiết </b> (<span style="color:#FF0000">bắt buộc</span>)</div>
                <textarea name="product_review_content" cols="60" rows="10"></textarea>
                <br>
                <div><b>Tên của bạn </b> (<span style="color:#FF0000">để hiển thị</span>)</div>
                <input class="shopping_info_cus" type="text" name="product_review_person" size="60">
                <br>
                <div><b>Email của bạn</b> (<span style="color:#FF0000">ẩn, chỉ dùng để xác thực đánh giá</span>)</div>
                <input class="shopping_info_cus" type="text" name="product_review_person_email" size="60">
                <div><img src="/includes/captcha/captcha.php?v="><br>
                  <input class="shopping_info_cus" type="text" size="10" name="product_review_captcha">
                </div>
                <br>
                <!--set value = 1 neu muon duyet san pham, = 0 neu cac danh gia phai duoc kiem duyet -->
                <input type="hidden" name="approve_review" value="1">
                
                <!--important-->
                <input type="hidden" name="product_review_return_url" value="http://alcatelonetouch.vn/dell-vostro-5460-core-i3-3110-2gb-500gb.html">
                <input type="hidden" name="product_id" value="229">
                <input type="hidden" name="store_id" value="">
                <input type="hidden" name="product_review_hash" value="c0a3b70d4631d515108e64124a901b5b">
                
                <!--for editing-->
                <input type="hidden" name="product_review_id" value="">
                <input type="hidden" name="product_review_edit" value="0">
                <input style="width:90px;background: #1daae6;color:#fff" class="shopping_info_cus" type="submit" value="Gửi ý kiến">
              </form>
            </div>
            <div class="clear"></div>
            <script type="text/javascript">
                  function toggleview(element1) {
                      element1 = document.getElementById(element1);
                      if (element1.style.display == 'block' || element1.style.display == '')
                          element1.style.display = 'none';
                      else
                          element1.style.display = 'block';
                      return;
                  }
              </script> 
          </div>
        </div>
      </div>
      <div class="des_detail_pro" style="display: none;">
        <p>
        <?php if($data['pro_detail']['pro_video'] != NULL){?>
          <iframe src="http://www.youtube.com/embed/<?php echo $data['pro_detail']['pro_video'] ;?>?wmode=transparent" frameborder="0" width="716" height="460"></iframe>
         <?php }else{echo "Chưa cập nhật !";};?>
        </p>
      </div>
      <div class="des_detail_pro" style="display: none;">
        <ul class="list_product list_product_3n">
          <p style="margin:10px;">Sản phẩm đang cập nhật !</p>
        </ul>
      </div>
    </div>
  </div>
  <div id="content_right">
    <div id="right_top_top">
      <h3 class="right_title"> DANH MỤC SẢN PHẨM </h3>
      <ul class="category">
        <li><a href="/dien-thoai.html" title="Điện Thoại"><span class="disc">•</span> Điện Thoại</a></li>
        <li><a href="/may-tinh-bang.html" title="Máy Tính Bảng"><span class="disc">•</span> Máy Tính Bảng</a></li>
        <li><a href="/phu-kien.html" title="Phụ Kiện"><span class="disc">•</span> Phụ Kiện</a></li>
        <li><a href="/laptop.html" title="Laptop"><span class="disc">•</span> Laptop</a></li>
      </ul>
    </div>
    <div id="free_ship"> </div>
  </div>
</div>
<!--End List product-->