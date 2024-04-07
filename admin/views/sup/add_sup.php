				<div class="section">
                <script type="text/javascript">
					function checkuser(){
						var form = document.sac;
						if(form.sup_name.value == ""){
							alert("Vui lòng nhập tên hiển thị");
							form.sup_name.focus();
							return false;
						}
						if(form.sup_yahoo.value == ""){
							alert("Vui lòng nhập nick yahoo");
							form.sup_yahoo.focus();
							return false;
						}
					}
				</script>
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Hỗ trợ trực tuyến</h2>
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
                                	<div class="error_red"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?></div>
									<form action="<?php echo base_url."admin/index.php?mod=support&act=add"; ?>" method="post" name="sac" onSubmit="return checkuser()">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tên hiển thị</div>
                                        <div class="form_items_right"><input name="sup_name" type="text" size="35"></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Nick yahoo</div>
                                        <div class="form_items_right"><input name="sup_yahoo" type="text" size="35"></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Phone number</div>
                                        <div class="form_items_right"><input name="sup_phone" type="text" id="sup_phone" size="35" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Nick skype</div>
                                        <div class="form_items_right"><input name="sup_sky" type="text" id="sup_sky" size="35" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Email</div>
                                        <div class="form_items_right"><input type="text" name="sup_email" size="30" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right"><input type="submit" name="ok" value="Add Now" class="padding"  />
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