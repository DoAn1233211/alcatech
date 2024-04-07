				<div class="section">
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Thông tin liên hệ: <a href="javascript:void(0)"><?php echo $data['info']['con_name'] ;?></a></h2>
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
									</div>
                            		<div class="form_items">
                                    	<div class="form_items_left"><h4>Nội dung chi tiết</h4></div>
                                        <div class="form_items_right">
                                        		<?php
													if($data['info'] == FALSE){
														echo "<h4>Không có dữ liệu</h4>";
													}else{
														echo "<table width='100%' class='none'>";
														echo "<tr>";
														echo "<td width='150' style='line-height:1px'><h4>Tên người liên hệ </h4></td><td width='250'>".$data['info']['con_name']."</td>";
														echo "</tr>";
														echo "<tr>";
														echo "<td style='line-height:1px'><h4>Email </h4></td><td>".$data['info']['con_email']."</td>";
														echo "</tr>";
														echo "<tr>";
														echo "<td style='line-height:1px'><h4>Điện thoại </h4></td><td>".$data['info']['con_phone']."</td>";
														echo "</tr>";
														echo "<tr>";
														echo "<td style='line-height:1px'><h4>Ngày gửi </h4></td><td>".$data['info']['con_date']."</td>";
														echo "</tr>";			
														echo "<tr>";
														echo "<td colspan='2'><h5 class='ok' style='margin:10px 0px 10px 0px; line-height:10px'>Nội dung liên hệ</h5></td>";
														echo "</tr>";
														echo "<tr>";
														echo "<td colspan='2' style='line-height:30px; text-align:justify'>".$data['info']['con_full']."</td>";
														echo "</tr>";
														echo "</table>";
													}
												?>
                                                <p style="line-height:20px; text-align:justify"></p>
 
                                        <!--?php 
										$fck = new FCKeditor('contact_value');
										$fck->BasePath = sBASEPATH;
										$fck->Value  = $getdata['contact_value'];
										$fck->Width  = '100%';
										$fck->Height = 400;
										$fck->Create();
										?-->
                                        </div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_items_left">&nbsp;</div>
                                        <div class="form_items_right">
                                        </div>
                                    </div>
								</div>
							</div>
							<!--[if !IE]>end table_wrapper<![endif]-->
						</div>
						<span class="section_content_bottom"></span>
					</div>
					<!--[if !IE]>end section content<![endif]-->
				</div>