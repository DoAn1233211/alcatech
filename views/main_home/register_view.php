<div class="content_link"> <a href="/" title="Trang chủ">Trang chủ</a> » <a href="javascript:void(0)" title=""><span class="sanpham">Đăng ký</span></a> </div>
<div id="content" style="height:auto">
<div class="mainbox-body"> 
  <script type="text/javascript" src="/includes/tpl_script/profiles_scripts.js"></script> 
  <script type="text/javascript" src="/includes/tpl_script/tabs.js"></script>
  <div class="tabs clear cm-j-tabs cm-track">
    <style>
      
      .fieldheader
      {
      background-color: #f1f1f1;
      text-transform: uppercase;
      color: #ea3907;
      font-size: 11px;
      font-weight: bold;
      border: none;
      }
      
      h2 { font-size:18px; font-weight:normal}
      
    </style>
  </div>
  <div class="cm-tabs-content clear" id="tabs_content">
    <div id="content_general">
      <div class="border" style="margin-bottom: 10px;box-shadow: 1px 1px 10px 1px #ccc;">
        <h2 style="margin:10px;"><font color="#118cd2">Đăng ký tài khoản để mua sắm tốt hơn</font> </h2>
        <form method="post" action="/ajax/customer_register.php" enctype="multipart/form-data" onsubmit="return check_field();">
          <fieldset style="border: none;" class="shadow cor">
            <div class="bgg_in_spm"></div>
            <table width="100%" id="register" class="table_register">
              <tbody>
                <tr>
                  <td valign="top"><table cellpadding="4" cellspacing="0" id="tb_register" style="width: 100%;">
                      <tbody>
                        <tr>
                          <td colspan="2" class="fieldheader"><span class="icon_1">&nbsp;</span><font color="#118cd2"> Thông tin Đăng nhập</font></td>
                        </tr>
                        <tr>
                          <td width="150px">Địa chỉ Email</td>
                          <td><input class="shopping_info_cus" type="text" name="email" id="email" size="20" value="">
                            <b style="color: #ff0000;">*</b> <span id="check_user"></span></td>
                        </tr>
                        <tr>
                          <td>Mật khẩu</td>
                          <td><input class="shopping_info_cus" type="password" name="password" id="password" size="20">
                            <b style="color: #ff0000;">*</b> <span class="explain"></span></td>
                        </tr>
                        <tr>
                          <td>Nhập lại mật khẩu</td>
                          <td><input class="shopping_info_cus" type="password" name="password1" id="password1" size="20">
                            <b style="color: #ff0000;">*</b> <span class="explain"></span></td>
                        </tr>
                        <tr>
                          <td colspan="2" class="fieldheader"><span class="icon_2">&nbsp;</span><font color="#118cd2"> Thông tin</font></td>
                        </tr>
                        <tr>
                          <td>Ảnh đại diện (nếu có)</td>
                          <td><input type="file" name="avatar" id="avatar" class="boxInput" size="40" value="">
                            (dung lượng file tối đa 100KB, ảnh PJG hoặc GIF)</td>
                        </tr>
                        <tr>
                          <td>Họ và tên</td>
                          <td><input class="shopping_info_cus" type="text" name="full_name" id="full_name" size="40" value="">
                            <b style="color: #ff0000;">*</b></td>
                        </tr>
                        <tr>
                          <td>Giới tính</td>
                          <td><input type="radio" checked="checked" name="sex" value="male">
                            Nam
                            <input type="radio" name="sex" value="female">
                            Nữ </td>
                        </tr>
                        <tr>
                          <td>Tỉnh/Tp</td>
                          <td><select class="shopping_info_cus" name="province">
                              <option value="1">Hà nội</option>
                              <option value="2">TP HCM</option>
                              <option value="5">Hải Phòng</option>
                              <option value="4">Đà Nẵng</option>
                              <option value="6">An Giang</option>
                              <option value="7">Bà Rịa-Vũng Tàu</option>
                              <option value="13">Bình Dương</option>
                              <option value="15">Bình Phước</option>
                              <option value="16">Bình Thuận</option>
                              <option value="14">Bình Định</option>
                              <option value="8">Bạc Liêu</option>
                              <option value="10">Bắc Giang</option>
                              <option value="9">Bắc Kạn</option>
                              <option value="11">Bắc Ninh</option>
                              <option value="12">Bến Tre</option>
                              <option value="18">Cao Bằng</option>
                              <option value="17">Cà Mau</option>
                              <option value="3">Cần Thơ</option>
                              <option value="24">Gia Lai</option>
                              <option value="25">Hà Giang</option>
                              <option value="26">Hà Nam</option>
                              <option value="27">Hà Tĩnh</option>
                              <option value="30">Hòa Bình</option>
                              <option value="28">Hải Dương</option>
                              <option value="29">Hậu Giang</option>
                              <option value="31">Hưng Yên</option>
                              <option value="32">Khánh Hòa</option>
                              <option value="33">Kiên Giang</option>
                              <option value="34">Kon Tum</option>
                              <option value="35">Lai Châu</option>
                              <option value="38">Lào Cai</option>
                              <option value="36">Lâm Đồng</option>
                              <option value="37">Lạng Sơn</option>
                              <option value="39">Long An</option>
                              <option value="40">Nam Định</option>
                              <option value="41">Nghệ An</option>
                              <option value="42">Ninh Bình</option>
                              <option value="43">Ninh Thuận</option>
                              <option value="44">Phú Thọ</option>
                              <option value="45">Phú Yên</option>
                              <option value="46">Quảng Bình</option>
                              <option value="47">Quảng Nam</option>
                              <option value="48">Quảng Ngãi</option>
                              <option value="49">Quảng Ninh</option>
                              <option value="50">Quảng Trị</option>
                              <option value="51">Sóc Trăng</option>
                              <option value="52">Sơn La</option>
                              <option value="53">Tây Ninh</option>
                              <option value="56">Thanh Hóa</option>
                              <option value="54">Thái Bình</option>
                              <option value="55">Thái Nguyên</option>
                              <option value="57">Thừa Thiên-Huế</option>
                              <option value="58">Tiền Giang</option>
                              <option value="59">Trà Vinh</option>
                              <option value="60">Tuyên Quang</option>
                              <option value="61">Vĩnh Long</option>
                              <option value="62">Vĩnh Phúc</option>
                              <option value="63">Yên Bái</option>
                              <option value="19">Đắk Lắk</option>
                              <option value="22">Đồng Nai</option>
                              <option value="23">Đồng Tháp</option>
                              <option value="21">Điện Biên</option>
                              <option value="20">Đăk Nông</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td>Địa chỉ nhận hàng</td>
                          <td><input class="shopping_info_cus" type="text" name="address" id="address" size="50" value=""></td>
                        </tr>
                        <!--
                                                  <tr>
                                                      <td>Điện thoại bàn</td>
                                                      <td><input type="text" name="tel" id="tel" class="boxInput" size="40"  value=""/></td>
                                                  </tr>-->
                        <tr>
                          <td>Điện thoại di động</td>
                          <td><input class="shopping_info_cus" type="text" name="mobile" id="mobile" size="40" value=""></td>
                        </tr>
                        <tr>
                          <td>Mã bảo mật</td>
                          <td><img id="captchaimg" src="<?php echo base_url."public/images/";?>captcha.jpg"><br>
                            <input class="shopping_info_cus" type="text" size="10" name="register_captcha">
                            (<a id="change-image" onclick="document.getElementById('captchaimg').src='/includes/captcha/captcha.php?'+Math.random();" href="javascript:;">Xem mã khác</a>) </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td> (*) Thông tin bắc buộc
                            <div style="padding-bottom: 10px;">
                              <label for="cb_rules_agree" class="full">
                                <input style="margin: 0;" type="checkbox" name="agree" id="cb_rules_agree" tabindex="1" value="1" onclick="agreeTerm()">
                                Tôi muốn nhận các thông tin khuyến mại qua email.</label>
                            </div></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td><input type="hidden" name="return_url" value="http://alcatelonetouch.vn/dang-ky">
                            <input type="hidden" name="secure_key" value="32f480f5181680327ab656d08263670f">
                            <input class="shopping_info_cus contact_sub" type="submit" value="Đăng ký"></td>
                        </tr>
                      </tbody>
                    </table></td>
                </tr>
              </tbody>
            </table>
          </fieldset>
        </form>
      </div>
      
      <!---->
      <div class="clear"></div>
      
      <!--end-wrap--> 
      
      <script type="text/javascript">
          function check_field() {
          var error = "";
          var email = document.getElementById('email').value;
          if (email.length < 4) error += "- Bạn chưa nhập email\n";
          var password = document.getElementById('password').value;
          if (password.length < 5) error += "- Bạn chưa nhập mật khẩu\n";
          var password1 = document.getElementById('password1').value;
          if (password != password1) error += "- Mật khẩu nhập lại không chính xác\n";
          var full_name = document.getElementById('full_name').value;
          if (full_name.length < 3) error += "- Bạn chưa nhập tên";
          
          var mobile = document.getElementById('mobile').value;
          if (mobile.length <= 6){
          error += "- Điện thoại không hợp lệ\n";
          }
          if (error != "") {
          alert(error);
          return false;
          }
          return true;
          }
        </script> 
    </div>
    <!--div class="buttons-container center"> <span   class="button-submit-action">
                          <input   type="submit" name="dispatch[profiles.add.]"  value="Đăng ký" />
                          </span> </div--> 
  </div>
</div>
