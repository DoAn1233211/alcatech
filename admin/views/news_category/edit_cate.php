				<div class="section">
                <script type="text/javascript">
					function checkuser(){
						var form = document.sac;
						if(form.article_title.value == ""){
							alert("Vui lòng nhập tiêu đề tin");
							form.article_title.focus();
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
								<h2 class="menu_title">Sửa danh mục</h2>
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
                                	<div class="error_red">
										<!--?php echo validation_errors();?-->
									</div>
									<form id="form_hide" action="javascript:void(0)" method="post" name="sac" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div id="cago_id" style="display:none"><?php echo $data['info']['cago_id'] ;?></div>
                                    	<div class="form_items_left">Tiêu đề</div>
                                        <div class="form_items_right"><input name="menu" type="text" id="cago_title" size="35" value="<?php echo $data['info']['cago_name'] ;?>" /></div>
                                    </div>
                                    <!-- <div class="form_items">
                                    	<div class="form_items_left">Trạng thái</div>
                                        <div class="form_items_right">
                                        	<select name="status" id="cago_status">
                                            	<option value="1" <?php if($data['info']['cago_status'] == 1){ echo "selected = 'selected'"; }?>>-- Active -- </option>
      											<option value="0" <?php if($data['info']['cago_status'] == 0){ echo "selected = 'selected'"; }?>>-- Not Active -- </option>                                                
                                            </select>
                                        </div>
                                    </div> -->
                                    <!--div class="form_items">
                                    	<div class="form_items_left">Rewrite link</div>
                                        <div class="form_items_right"><input name="rewrite" type="text" id="rewrite" size="35" value="<?php echo $data['info']['cago_rewrite'] ;?>" /></div>
                                    </div>
                                    <!--div class="form_items">
                                    	<div class="form_items_left">Thứ tự hiển thị</div>
                                        <div class="form_items_right"><input name="article_order" type="text" id="article_order"  size="35" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Mô tả</div>
                                        <div class="form_items_right"><textarea name="article_info" id="article_info" cols="40" rows="4"></textarea></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Nội dung chi tiết</div>
                                        <div class="form_items_right">
                                        <!--?php 
										$fck = new FCKeditor('article_full');
										$fck->BasePath = sBASEPATH;
										//$fck->Value  = $get['article_value'];
										$fck->Width  = '100%';
										$fck->Height = 400;
										$fck->Create();
									   ?-->  
                                        <!--/div-->
                                    <!--/div-->
                                    <!--div class="form_items">
                                    	<div class="form_items_left">Hình ảnh</div>
                                        <div class="form_items_right">
											<input type="file" name="img" size="25" />
                                        </div>
                                    </div-->
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        	<input type="submit" name="ok" id="edit_cago" value="Edit Menu" class="magin"/>
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