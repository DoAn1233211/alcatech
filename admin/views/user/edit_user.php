				<div class="section">
                <script type="text/javascript">
					function checkuser(){
						var form = document.sac;
						if(form.username.value == ""){
							alert("Vui lòng nhập Tên tài khoản");
							form.username.focus();
							return false;
						}
						if(form.password.value == NULL){
							alert("Vui lòng nhập Mật khẩu");
							form.password.focus();
							return false;
						if(form.repass.value == ""){
							alert("Vui lòng nhập lại mật khẩu");
							form.repass.focus();
							return false;
						}
						if(form.password.value != form.repass.value){
							alert("Nhập lại mẩu khẩu chưa đúng");
							form.password.focus();
							return false;
						}
						}
						if(form.name.value == ""){
							alert("Vui lòng nhập Họ tên");
							form.name.focus();
							return false;
						}
						if(form.phone.value == ""){
							alert("Vui lòng nhập Số điện thoại");
							form.phone.focus();
							return false;
						}
						if(isNaN(form.phone.value)){
							alert("Số điện thoại không đúng định dạng");
							form.phone.focus();
							return false;
						}
						if(form.adress.value == ""){
							alert("Vui lòng nhập Địa chỉ");
							form.adress.focus();
							return false;
						}
						if(form.email.value == ""){
							alert("Vui lòng nhập Email");
							form.email.focus();
							return false;
						}
						if(form.email.value.indexOf('@') == -1){
							alert("Email không đúng định dạng");
							form.email.focus();
							return false;
						}
						if(form.email.value.indexOf('@') == 0){
							alert("Trước @ phải có dữ liệu");
							form.email.focus();
							return false;
						}
						if(form.email.value.indexOf('@') == form.email.value.length -1  ){
							alert("Sau @ phải có dữ liệu");
							form.email.focus();
							return false;
						}
						if(form.email.value.indexOf('.',form.email.value.indexOf('@')) == -1){
							alert("Sau @ phải có dấu chấm");
							form.email.focus();
							return false;
						}
						if(form.email.value.indexOf('.') - form.email.value.indexOf('@') == 1){
							alert("Giữa  @ và dấu châm phải có dữ liệu");
							form.email.focus();
							return false;
						}else{
							return true;
						}
					}
				</script>
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Sửa thông tin thành viên</h2>
							</div>
						</div>
						<span class="title_wrapper_bottom"></span>
					</div>
					<!--[if !IE]>end title wrapper<![endif]-->
					
					<!--[if !IE]>start section content<![endif]-->
					<div class="section_content">
						<span class="section_content_top"></span>
						
						<div class="section_content_inner">
                        	<div class="table_tabs_menu">
							<!--[if !IE]>start  tabs<![endif]-->
							<!--[if !IE]>end  tabs<![endif]-->

							</div>
				<!--[if !IE]>start table_wrapper<![endif]-->

							<div class="table_wrapper" style="background:none;">
								<div class="table_wrapper_inner">
                                	<div class="error_red"><?php if(isset($data['error'])) { echo "<p>".$data['error']."</p>"; } ?></div>
									<form action="index.php?mod=user&act=edit&uid=<?php echo $data['info']['user_id'];?>" method="post" name="sac" onsubmit="return checkuser()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tên tài khoản</div>
                                        <div class="form_items_right"><input type="text" name="username" size="30" value="<?php echo $data['info']['user_name'] ;?>"/></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Mật khẩu</div>
                                        <div class="form_items_right"><input type="password" name="password" size="30"  /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Nhập lại mật khẩu</div>
                                        <div class="form_items_right"><input type="password" name="repass" size="30"  /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Cấp độ</div>
                                        <div class="form_items_right">
                                        	<select name="level" id="level" <?php if($data['info']['user_id'] == 1 ){ echo 'disabled="disabled"';} ?>>
                                                <option value="2" <?php if($data['info']['user_level'] == 2){ echo "selected = 'selected'"; }?>>-- Thành viên -- </option>
                                                <option value="1" <?php if($data['info']['user_level'] == 1){ echo "selected = 'selected'"; }?>>-- Administrator -- </option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Họ tên</div>
                                        <div class="form_items_right"><input type="text" name="fullname" size="30" value="<?php echo $data['info']['user_fullname']; ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Giới tính</div>
                                        <div class="form_items_right">
                                        	<select name="gender">
                                            	<option value="1" <?php if($data['info']['user_gender'] == 1){ echo "selected = 'selected'"; }?>>-- Nam -- </option>
      											<option value="0" <?php if($data['info']['user_gender'] == 0){ echo "selected = 'selected'"; }?>>-- Nữ -- </option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Trạng thái</div>
                                        <div class="form_items_right">
                                        	<select name="status" <?php if($data['info']['user_id'] == 1 ){ echo 'disabled="disabled"';} ?>>
                                            	<option value="1" <?php if($data['info']['user_status'] == 1){ echo "selected = 'selected'"; }?>>-- Active -- </option>
      											<option value="0" <?php if($data['info']['user_status'] == 0){ echo "selected = 'selected'"; }?>>-- Not Active -- </option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Số điện thoại</div>
                                        <div class="form_items_right"><input type="text" name="phone" size="30" value="<?php echo $data['info']['user_phone']; ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Địa chỉ</div>
                                        <div class="form_items_right"><input type="text" name="address" size="30" value="<?php echo $data['info']['user_address']; ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Email</div>
                                        <div class="form_items_right"><input type="text" name="email" size="30" value="<?php echo $data['info']['user_email']; ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right"><input type="submit" name="ok" value="Edit User" class="padding"  />
                                        <input type="reset" value="Nhập lại" class="padding"  />
                                        </div>
                                    </div>
                                </form>
								</div>
							</div>
							<!--[if !IE]>end table_wrapper<![endif]-->
						</div>
						<span class="section_content_bottom"></span>
					</div>
					<!--[if !IE]>end section content<![endif]-->
				</div>