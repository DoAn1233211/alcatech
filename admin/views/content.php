<div id="content">
			<div class="inner">
				<!--[if !IE]>start section<![endif]-->
				<div class="section">
					
					<!--[if !IE]>start title wrapper<![endif]-->
					<div class="title_wrapper">
						<span class="title_wrapper_top"></span>
						<div class="title_wrapper_inner">
							<span class="title_wrapper_middle"></span>
							<div class="title_wrapper_content">
								<h2 class="menu_title">Menu Nhanh</h2>
								<ul class="section_menu right">
									
								</ul>
							</div>
						</div>
						<span class="title_wrapper_bottom"></span>
					</div>
					<!--[if !IE]>end title wrapper<![endif]-->
					
					<!--[if !IE]>start section content<![endif]-->
					<div class="section_content">
						<span class="section_content_top"></span>
						
						<div class="section_content_inner">
							<!--[if !IE]>start dashboard menu<![endif]-->
								<div class="dashboard_menu_wrapper">
								<ul class="dashboard_menu">
									<li><a href="<?php echo base_url."admin/index.php?mod=customer&act=list"; ?>" class="d1"><span>Khách hàng</span></a></li>
									<li><a href="<?php echo base_url."admin/index.php?mod=support&act=list"; ?>" class="d2"><span>Support</span></a></li>
									<li><a href="<?php echo base_url."admin/index.php?mod=slideshow&act=list"; ?>" class="d3"><span>Slide show</span></a></li>
									<li><a href="<?php echo base_url."admin/index.php?mod=services&act=edit"; ?>" class="d4"><span>Dịch vụ</span></a></li>
									<li><a href="<?php echo base_url."admin/index.php?mod=education&act=edit"; ?>" class="d5"><span>Đào tạo</span></a></li>
									<li><a href="javascript:void(0)" class="d6"><span>Đơn đặt hàng</span></a></li>
									<li><a href="<?php echo base_url."admin/index.php?mod=contact&act=list"; ?>" class="d7"><span>Khách hàng liên hệ</span></a></li>
									<li><a href="javascript:void(0)" class="d8"><span>Security</span></a></li>
								</ul>
								</div>
								<!--[if !IE]>end dashboard menu<![endif]-->	
						</div>
						
						<span class="section_content_bottom"></span>
					</div>
					<!--[if !IE]>end section content<![endif]-->
				</div>
				<!--[if !IE]>start section<![endif]-->
                <script type="text/javascript">
					$(document).ready(function(){
                        var $tab  = $("ul.table_tabs li a");
							$obj = $(".table_wrapper_inner");
							$tab.click(function(){
								$item = $(this).attr("name");
								if($item != ""){
									$(".selected").removeClass("selected");
									$(this).addClass("selected");
									$obj.hide();
									$("#"+$item).show();
									return false;
								}else{
									return true;
								}
							});
                    });
				</script>
				<?php loadview($data['template'],$data) ;?>
			</div>
		</div>