<div class="content_link">
  <a href="/" title="Trang chủ">Trang chủ</a> » <a href="javascript:void(0)" title=""><span class="sanpham">Giỏ hàng</span></a>
</div>
<div id="content" style="height:auto">
<!--div class="border"-->
<style type="text/css">
	.form_items_right {
	float: left;
	width: 770px;
	height: auto;
	}
</style>
<div class="con_page" style="box-shadow: 1px 1px 10px 1px #ccc;float:left;height:auto;width:940px;padding:10px;margin:10px 0px;">
	<div class="shopping_txt" style="font-weight:bold;font-family:Tahoma; font-size:12px;margin:10px;">Hướng dẫn:</div>
    <ul style="font-family:Tahoma; font-size:12px; line-height:18px;padding-left: 15px;margin: 10px 0;">
        <li class="shopping_txt">Để cập nhật số lượng sản phẩm cần mua, vui lòng điền số lượng vào ô tương ứng rồi, trang web sẽ tự động cập nhật lại tổng giá trị mới nhất cho quý khách.</li>
        <li class="shopping_txt">Nếu quý khách không muốn đặt mua sản phẩm nữa, click Xóa để loại bỏ sản phẩm</li>
        <li class="shopping_txt">Khi quý khách thỏa mãn với đơn hàng của mình, vui lòng click nút <b class="send_info" style="color:#1daae6;cursor:pointer;">Gửi đơn hàng</b>.</li>
    </ul>
    
	<form action="index.php?page=shopping&act=update" method="post">
  <table id="table-shopping-cart" width="100%" >
    <tr id='shopping-cart-first-row'>
      <td class="table-shopping-cart_title" id='shopping-cart-stt-col'>STT</td>
      <td class="table-shopping-cart_title">Sản phẩm</td>
      <td class="table-shopping-cart_title" id='shopping-cart-price-col'>Giá bán</td>
      <td class="table-shopping-cart_title" id='shopping-cart-quantity-col'>Số lượng</td>
      <td class="table-shopping-cart_title" id='shopping-cart-sum-col'>Thành tiền</td>
      <td class="table-shopping-cart_title" id='shopping-cart-del-col'>Xóa</td>
    </tr>
    <?php
	$total = 0;
	if(isset($_SESSION['cart']) && $_SESSION['cart'] != NULL){
		$stt = 0;
		foreach($_SESSION['cart'] as $key => $value){
			$stt ++;
	?>
    <tr>
      <td><?php echo $stt ;?></td>
      <td>
        <table>
          <tr>
            <td style="border:0px"><img class="cart_img" src="<?php echo base_url."public/" ;?>images/<?php echo $value['images'] ;?>" /></td>
            <td style="border:0px"><a class="cart_link" href="index.php?page=product&act=view&pid=<?php echo $value['id'] ;?>" title="<?php echo $value['name'] ;?>"><b><?php echo $value['name'] ;?></b></a></td>
          </tr>
        </table>
        </td>
      <td><span id=""><?php echo number_format($value['price']) ;?></span> VND </td>
      <td>
      	  <input name="cart_qty[]" id="" value="<?php echo $value['qty'] ;?>" onchange="" size="10" />
          <input type="hidden" name="cart_num[]" id="" value="<?php echo $value['id'] ;?>" onchange="" size="10" />
      </td>
      <td><span id=''><?php $total_1 = $value['price'] * $value['qty'];  echo number_format($total_1) ;?></span> VND</td>
      <td><a href="index.php?page=shopping&act=del&pid=<?php echo $value['id'] ;?>&type=one">Xóa</a></td>
    </tr>
     <?php $total = $total + $total_1 ;?>
    <?php } }else{
		echo"<tr><td colspan='6' align='right'>Không có sản phẩm nào trong giỏ hàng</td></tr><tr>";
		}
	 ?>
    
      <td colspan='2' align='right'>
      	<div class='buy'><input type="submit" style="height:32px;" class="contact_sub" name="ok" value="Cập nhật giỏ hàng"  title="Cập nhật giỏ hàng"></div>
        <div style="margin-left:20px;" class='buy'><a class="contact_sub" href="index.php?page=shopping&act=del&type=all" title="Xóa tất">Xóa giỏ hàng</a></div> 
      </td>
      <td colspan='4'><b><span id='total_value'>Tổng giá trị :&nbsp; <?php echo number_format($total) ;?></span> VND</b></td>
    </tr>
    
    <tr>
    <td colspan='6' align='right'>
    	<div class="margin_auto">
            <div class='buy'><a class="contact_sub" href="index.php" title="Mua thêm">Mua hàng</a></div>
            <div style="margin-left:20px;" class='buy'><a class="send_info contact_sub" href="javascript:void(0)" title="Xóa tất">Gửi đơn hàng</a></div>
        </div>
        
      </td>
    </tr>
  </table>
</form>
	
	<div class="send_cart">
    	<div class="contact_info" id="cart_scroll" style="width: 920px;margin:10px;">
    	<div class="contact_view cart_view">
        	
        </div>
    	<form action="javascript:void(0)" method="post">
        	<div class="form_items">
            	<div class="form_items_left">&nbsp;</div>
                <div class="form_items_right" style="padding: 5px 0px 10px;font-size: 15px;color: #118cd2;font-weight: bold;">Thông tin khách hàng</div>
            </div>
        	<div class="form_items">
            	<div class="form_items_left">Họ &amp; tên <span class="red">*</span></div>
                <div class="form_items_right"><input class="inputtxt" type="text" size="50" placeholder="Họ và tên" name="cart_name" id="cart_name"></div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
            	<div class="form_items_left">Email <span class="red">*</span></div>
                <div class="form_items_right"><input class="inputtxt" type="text" size="50" placeholder="Email" name="cart_email" id="cart_email"></div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
            	<div class="form_items_left">Điện thoại <span class="red">*</span></div>
                <div class="form_items_right"><input class="inputtxt" type="text" size="50" placeholder="Số điện thoại" name="cart_tel" id="cart_tel"></div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
            	<div class="form_items_left">Địa chỉ <span class="red">*</span></div>
                <div class="form_items_right"><input class="inputtxt" type="text" size="50" placeholder="Địa chỉ" name="cart_address" id="cart_address"></div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
            	<div class="form_items_left">Nội dung <span class="red">*</span></div>
                <div class="form_items_right"><textarea rows="8" name="cart_message" id="cart_message" placeholder="Nội dung khác" style="width:329px;"></textarea></div>
            </div>
            <div class="cls"></div>
            <div class="form_items">
            	<div class="form_items_left">&nbsp;</div>
                <div class="form_items_right"><input class="contact_sub" type="submit" value="Gửi đơn hàng" name="ok" id="send_all" /></div>
            </div>
            <div class="cls"></div>
        </form>
    </div>
	</div>
</div>