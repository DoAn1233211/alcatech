<div class="content_link"> <a href="/" title="Trang chủ">Trang chủ</a> » <a href="javascript:void(0)" title=""><span class="sanpham">Đăng nhập</span></a> </div>
<div id="content" style="height:auto">
<div class="border" style="margin-bottom: 10px;box-shadow: 1px 1px 10px 1px #ccc;">
  <div class="mainhome whome" style="margin-bottom: 20px;">
    <form action="/ajax/customer_login.php" method="post" name="loginForm" enctype="multipart/form-data">
      <!--important-->
      <input type="hidden" name="return_url" value="/taikhoan">
      <input type="hidden" name="store_id" value="">
      <input type="hidden" name="secure_key" value="32f480f5181680327ab656d08263670f">
      <table class="shadow cor table_register" cellspacing="0" cellpadding="6" style="width:100%;">
        <tbody>
          <tr>
            <td style="width: 50%;" id="login_col"><div id="login_title" style="padding: 5px 0px 10px; font-size: 13px; color:#118cd2"><b>Thông tin khách hàng đăng nhập hệ thống</b></div>
              <input type="hidden" name="login" id="login" value="yes">
              <table cellpadding="5" cellspacing="0">
                <tbody>
                  <tr>
                    <td>Email đăng nhập</td>
                    <td><input class="shopping_info_cus" type="text" size="25" name="email" id="email"></td>
                  </tr>
                  <tr>
                    <td>Mật khẩu</td>
                    <td><input class="shopping_info_cus" type="password" size="25" name="password" id="password"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><div style="position: relative;">
                        <input class="shopping_info_cus contact_sub" type="submit" value="Đăng nhập">
                        <span style="position: absolute;right: -15px;top:7px;"><a href="#">Quên mật khẩu</a></span> </div></td>
                  </tr>
                </tbody>
              </table></td>
            <td width="10px">&nbsp;</td>
            <td valign="top" style="line-height: 18px;"><div style="padding: 5px 0px 10px; font-size: 13px; color: rgb(88, 88, 88);"><b>Bạn chưa là thành viên</b></div>
              Đăng ký là thành viên để hưởng nhiều lợi ích và đặt mua hàng dễ dàng hơn.
              <p><a title="Click đăng ký tài khoản miễn phí" href="<?php echo base_url."dang-ky.html" ;?>" style="color: rgb(1, 172, 241); font-weight: bold; text-decoration: none;">Đăng ký tài khoản</a></p></td>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</div>
