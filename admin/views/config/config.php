				<div class="section">
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Cấu hình website</h2>
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
                                	<div class="error_red"><?php if(isset($error)) { echo "<p>".$error."</p>"; } ?>
										<?php //echo validation_errors();?>
									</div>
                                    <script type="text/javascript">
										function checkFileUl() {
											var file = document.getElementById("upload").value;
											var allow_ext = /(\.GIF|\.gif|\.png|\.PNG|\.jpg|\.JPG|\.jpeg|\.JPEG|^$)$/i; 
											if (allow_ext.test(file)) {
												return true;
											} else {
												alert('Khong duoc upload file co duoi la ' + file.split('.').pop());
											}
											return false;             
										}
									</script>
									<form action="<?php echo base_url."admin/index.php?mod=config&act=edit";?>" method="post" name="sac" onsubmit="return checkuser()" enctype="multipart/form-data">
                                    <div class="form_items">
                                    	<div class="form_items_left">Tiêu đề website</div>
                                        <div class="form_items_right"><input name="config_title" type="text" value="<?php echo $data['info']['config_title']; ?>" size="35" /></div>
                                    </div>
                            		<div class="form_items">
                                    	<div class="form_items_left">Keywords</div>
                                        <div class="form_items_right">
                                        	<textarea name="config_key" cols="40" rows="4"><?php echo $data['info']['config_key']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Description</div>
                                        <div class="form_items_right">
                                        	<textarea name="config_des" id="config_des" cols="40" rows="4"><?php echo $data['info']['config_des']; ?></textarea> 
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Logo website</div>
                                        <div class="form_items_right">
                                        <?php
										if($data['info']['config_logo'] != NULL){
											echo "<img src='".base_url."/public/images/".$data['info']['config_logo']."' width='80' />";
										}
										?>
                                        <input type="file" name="upload" id="upload" size="30" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Nội dung footer</div>
                                        <div class="form_items_right">
                                        <textarea name="config_footer" id="config_footer" cols="40" rows="4"><?php echo $data['info']['config_footer']; ?></textarea> 
                                            <script type="text/javascript">
												CKEDITOR.replace( 'config_footer' );
											</script> 
                                        <!--?php 
										$fck = new FCKeditor('config_footer');
										$fck->BasePath = sBASEPATH;
								        $fck->Value  = $get['config_footer'];					
										$fck->Width  = '100%';
										$fck->Height = 400;
										$fck->Create();
									   ?-->
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        	<input type="submit" name="ok" value="Edit Config" class="magin" onclick="return checkFileUl();"/>
                                            <input type="reset" name="Reset" id="button" value="Nhập Lại" class="magin"/>
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