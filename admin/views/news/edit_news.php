				<div class="section">
                	<script type="text/javascript">
					function checkuser(){
						var form = document.sac;
						if(form.news_title.value == ""){
							alert("Vui lòng nhập tiêu đề tin");
							form.news_title.focus();
							return false;
						}
						if(form.news_rewrite.value == ""){
							alert("Vui lòng nhập rewrite link");
							form.news_rewrite.focus();
							return false;
						}
						if(form.news_author.value == ""){
							alert("Vui lòng nhập tác giả");
							form.news_author.focus();
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
								<h2 class="menu_title">Sửa tin tức</h2>
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
									<form action="<?php echo base_url."admin/index.php?mod=news&act=edit&nid=".$data['info']['news_id'].""; ?>" method="post" name="sac" onsubmit="return checkuser()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tiêu đề tin</div>
                                        <div class="form_items_right"><input name="news_title" type="text" id="news_title" size="35" value="<?php echo $data['info']['news_title'];?>" /></div>
                                    </div>
                                    <!--div class="form_items">
                                    	<div class="form_items_left">Rewrite link</div>
                                        <div class="form_items_right"><input name="news_rewrite" type="text" id="news_rewrite" size="35" value="<?php echo $data['info']['news_rewrite'];?>"  /></div>
                                    </div-->
                                    <div class="form_items">
                                    	<div class="form_items_left">Tác giả</div>
                                        <div class="form_items_right"><input name="news_author" type="text" id="news_author" size="35" value="<?php echo $data['info']['news_author'];?>"/></div>
                                    </div>
                                    <!--div class="form_items">
                                    	<div class="form_items_left">Thuộc chuyên mục</div>
                                        <div class="form_items_right">
                                        <select name="cago_id">
                                        <?php
										foreach($listcago as $items){
											echo "<option value='".$items['cago_id']."'>".$items['cago_name']."</option>";
										}
										?>
                                        </select>
                                        </div>
                                    </div-->
                                    <div class="form_items">
                                    	<div class="form_items_left">Mô tả tin</div>
                                        <div class="form_items_right"><textarea name="news_info" cols="35" rows="3" id="news_info"><?php echo $data['info']['news_info'];?></textarea></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Thuộc chuyên mục</div>
                                        <div class="form_items_right">
                                        	<select name="news_cate" onchange="show_cago(this.value)">
										  <?php
                                                foreach($data['cate'] as $item){
                                                    echo "<option value='".$item['cago_id']."' ";
													if($data['info']['cago_id'] == $item['cago_id']){
														echo "selected='selected'";
													}
													echo ">".$item['cago_name']."</option>";
                                                }
                                            ?>
                                          </select>
                                          <div id="list"></div>
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Nội dung chi tiết</div>
                                        <div class="form_items_right">
                                            <textarea name="news_full" id="news_full" cols="40" rows="4"><?php echo $data['info']['news_full'];?></textarea> 
                                            <script type="text/javascript">
												CKEDITOR.replace( 'news_full' );
											</script>                                         </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">Hình ảnh</div>
                                        <div class="form_items_right"><img src="<?php echo base_url."uploads/news/thumb/".$data['info']['news_images'].""?>" width="150" height="130" /><input type="file" name="upload" id="upload" size="25" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        	<input type="submit" name="ok" value="Edit News" class="magin" onclick="return checkFileUl();"/>
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