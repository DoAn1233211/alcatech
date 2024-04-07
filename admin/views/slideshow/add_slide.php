				<div class="section">
                	<script type="text/javascript">
					function checkuser(){
						var form = document.sac;
						if(form.slide_title.value == ""){
							alert("Vui lòng nhập tiêu đề ảnh");
							form.slide_title.focus();
							return false;
						}
						if(form.slide_alt.value == ""){
							alert("Vui lòng nhập alt ảnh");
							form.slide_alt.focus();
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
								<h2 class="menu_title">Thêm mới slideshow</h2>
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
									<form action="<?php echo base_url."admin/index.php?mod=slideshow&act=add"; ?>" method="post" name="sac" onsubmit="return checkuser()" enctype="multipart/form-data">
                            		<div class="form_items">
                                    	<div class="form_items_left">Tiêu đề ảnh</div>
                                        <div class="form_items_right"><input name="slide_title" type="text" id="slide_title" size="35"/></div>
                                    </div>
                                    <!--div class="form_items">
                                    	<div class="form_items_left">Alt ảnh</div>
                                        <div class="form_items_right"><input name="slide_alt" type="text" id="slide_alt" size="35"  /></div>
                                    </div-->
                                    <div class="form_items">
                                    	<div class="form_items_left">Hình ảnh</div>
                                        <div class="form_items_right"><input type="file" name="upload" id="upload" size="25" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        	<input type="submit" name="ok" value="Edit slide" class="magin" onclick="return checkFileUl();"/>
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