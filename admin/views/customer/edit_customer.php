				<div class="section">
                <script type="text/javascript">
					function checkpro(){
						var form = document.sac;
						if(form.customer_name.value == ""){
							alert("Vui lòng nhập tên khách hàng");
							form.customer_name.focus();
							return false;
						}
						if(isNaN(form.customer_order.value)){
							alert("Thứ tự phải là chữ số");
							form.customer_order.focus();
							return false;
						}	}
				</script>
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Sửa thông tin khách hàng</h2>
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
                                	<div class="error_red"><?php if(isset($data['errors'])) { echo "<p>".$data['errors']."</p>"; } ?>
										<!--?php echo validation_errors();?-->
									</div>
                                    <script type="text/javascript">
										function checkFileUl() {
											var file = document.getElementById("img").value;
											var allow_ext = /(\.GIF|\.gif|\.png|\.PNG|\.jpg|\.JPG|\.jpeg|\.JPEG|^$)$/i; 
											if (allow_ext.test(file)) {
												return true;
											} else {
												alert('Khong duoc upload file co duoi la ' + file.split('.').pop());
											}
											return false;             
										}
										function checkFileUl() {
											var file = document.getElementById("avatar").value;
											var allow_ext = /(\.GIF|\.gif|\.png|\.PNG|\.jpg|\.JPG|\.jpeg|\.JPEG|^$)$/i; 
											if (allow_ext.test(file)) {
												return true;
											} else {
												alert('Khong duoc upload file co duoi la ' + file.split('.').pop());
											}
											return false;             
										}
										function checkFileUl() {
											var file = document.getElementById("website").value;
											var allow_ext = /(\.GIF|\.gif|\.png|\.PNG|\.jpg|\.JPG|\.jpeg|\.JPEG|^$)$/i; 
											if (allow_ext.test(file)) {
												return true;
											} else {
												alert('Khong duoc upload file co duoi la ' + file.split('.').pop());
											}
											return false;             
										}
									</script>
									<form action="<?php echo base_url."admin/index.php?mod=customer&act=edit&cid=".$data['info']['customer_id']."";?>" method="post" name="sac" onsubmit="return checkpro()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tên công ty</div>
                                        <div class="form_items_right"><input name="customer_name" type="text" size="30" value="<?php echo $data['info']['customer_name'] ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Tên khách hàng</div>
                                        <div class="form_items_right"><input name="customer_user" type="text" size="30" value="<?php echo $data['info']['customer_user'] ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Loại khách hàng</div>
                                        <div class="form_items_right">
                                        <select name="cate_id">
                                      		 <?php
                                            foreach($data['items'] as $list){
                                                echo "<option value='".$list['cate_id']."'>".$list['cate_name']."</option>";
                                            }
                                            ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Trạng thái</div>
                                        <div class="form_items_right">
                                        	<select name="status">
                                            	<option value="1" <?php if($data['info']['customer_status'] == 1){ echo "selected = 'selected'"; }?>>-- Active -- </option>
      											<option value="0" <?php if($data['info']['customer_status'] == 0){ echo "selected = 'selected'"; }?>>-- Not Active -- </option>                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Điạ chỉ</div>
                                        <div class="form_items_right"><input name="customer_address" type="text" size="30" value="<?php echo $data['info']['customer_address'] ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Website url</div>
                                        <div class="form_items_right"><input name="customer_url" type="text" size="30" value="<?php echo $data['info']['customer_url'] ?>" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<!--div class="form_items_left">Thứ tự hiển thị</div>
                                        <div class="form_items_right"><input name="customer_order" type="text" size="30" value="<?php echo $data['info']['customer_order'] ?>" /></div>
                                    </div-->
                                    <div class="form_items">
                                    	<div class="form_items_left">Ý kiến khách hàng</div>
                                        <div class="form_items_right">                                        
											<textarea name="customer_info" id="customer_info" cols="40" rows="4"><?php echo $data['info']['customer_info']; ?></textarea> 
                                            <script type="text/javascript">
												CKEDITOR.replace( 'customer_info' );
											</script>                             
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Logo công ty</div>
                                        <div class="form_items_right">
                                        <?php
										if($data['info']['customer_image'] != NULL){
											echo "<img src='".base_url."uploads/customer/thumb/".$data['info']['customer_image']."' width='110' />";
										}
										?>
                                        <input type="file" name="img" size="30" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Avatar khách hàng</div>
                                        <div class="form_items_right">
                                        <?php
										if($data['info']['customer_avatar'] != NULL){
											echo "<img src='".base_url."uploads/customer/thumb/".$data['info']['customer_avatar']."' width='110' />";
										}
										?>
                                        <input type="file" name="avatar" size="30" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Hình ảnh website</div>
                                        <div class="form_items_right">
                                        <?php
										if($data['info']['customer_website'] != NULL){
											echo "<img src='".base_url."uploads/customer/thumb/".$data['info']['customer_website']."' width='110' />";
										}
										?>
                                        <input type="file" name="website" size="30" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        	<input type="submit" name="ok" value="Edit Customer" class="magin" onclick="return checkFileUl();"/>
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