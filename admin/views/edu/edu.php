				<div class="section">
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Đào tạo</h2>
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
									<form action="<?php echo base_url."admin/index.php?mod=education&act=edit";?>" method="post" name="sac" onsubmit="return checkuser()" enctype="multipart/form-data">
                                    <div class="form_items">
                                    	<div class="form_items_left">Mô tả</div>
                                        <div class="form_items_right">
                                        <textarea name="edu_info" id="edu_info" cols="40" rows="4"><?php echo $data['info']['edu_info']; ?></textarea> 
                                            <script type="text/javascript">
												CKEDITOR.replace( 'edu_info' );
											</script> 
                                        <!--?php 
										$fck = new FCKeditor('intro_full');
										$fck->BasePath = sBASEPATH;
										$fck->Value  = $intro['intro_full'];
										$fck->Width  = '100%';
										$fck->Height = 400;
										$fck->Create();
										?-->
                                        </div>
                                    </div>
                            		<div class="form_items">
                                    	<div class="form_items_left">Nội dung</div>
                                        <div class="form_items_right">
                                        <textarea name="edu_full" id="edu_full" cols="40" rows="4"><?php echo $data['info']['edu_full']; ?></textarea> 
                                            <script type="text/javascript">
												CKEDITOR.replace( 'edu_full' );
											</script> 
                                        <!--?php 
										$fck = new FCKeditor('intro_full');
										$fck->BasePath = sBASEPATH;
										$fck->Value  = $intro['intro_full'];
										$fck->Width  = '100%';
										$fck->Height = 400;
										$fck->Create();
										?-->
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        	<input type="submit" name="ok" value="Edit Service" class="magin"/>
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