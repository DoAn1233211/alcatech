				<div class="section">
                <script type="text/javascript">
					$(document).ready(function(e) {
                        $("#ok").click(function(){
							$val  = $("#keyword").val();
							$show = $("#user_show");
							$.ajax({
								"url"   : "<?php echo base_url;?>admin/articles/search",
								"type"  : "post",
								"data"  : "val="+$val,
								"acsync": false,
								success: function(result){
									$show.html(result)
								}
							});
						});
                    });
					function check(){
						if(confirm('Bạn có chắc muốn xóa không ?')){
							return true;
						}else{
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
								<h2 class="menu_title">Menu home</h2>
							</div>
						</div>
						<span class="title_wrapper_bottom"></span>
					</div>
					<!--[if !IE]>end title wrapper<![endif]-->
					
					<!--[if !IE]>start section content<![endif]-->
					<div class="section_content">
						<span class="section_content_top"></span>
						
						<div class="section_content_inner minheight">
                        	<div class="table_tabs_menu">
                            <ul class="table_tabs">
                            	<li><a href="#" name="tab1" class="selected"><span><span>Danh sách</span></span></a></li>
								<li><a href="#" name="tab2"><span><span>Tìm kiếm</span></span></a></li>
								<li><a href="<?php echo base_url; ?>admin/index.php?mod=news_cate&act=add" name=""><span><span>Thêm mới</span></span></a></li>
							</ul>
							<!--[if !IE]>start  tabs<![endif]-->
							<!--[if !IE]>end  tabs<![endif]-->
							</div>
							<!--[if !IE]>start table_wrapper<![endif]-->
							<div class="table_wrapper">
								<div class="table_wrapper_inner" id="tab1">
                            <form action="" method="post" name="sac">
								<table cellpadding="0" cellspacing="0" width="905">
									<tbody><tr>
									  <th width="38"><a href="#">Stt</a></th>
									  <th width="549"><a href="#">Tiêu đề</a></th>
                                      <th width="196"><a href="#">Rewrite link</a></th>
                                      <th width="194"><a href="#">Trạng thái</a></th>
									  <th width="120"><a href="#">Actions</a></th>
									</tr>
                               <?php
								if($data['list'] != NULL){
									$stt=0;
									foreach($data['list'] as $item){
										$stt++;
										echo "<tr class='cago_id_".$item['cago_id']."'>";	
										echo "<td>".$stt."</td>";
										echo "<td>".$item['cago_name']."</td>";
										echo "<td>".$item['cago_rewrite']."</td>";
										//echo "<td>".$item['article_order']."</td>";
										//echo "<td>".$item['article_date']."</td>";
										if($item['cago_status'] == 1){
											 echo "<td><a rel='".$item['cago_id']."' href='javascript:void(0)' name='".$item['cago_status']."' class='status_cago_active'>Active</a></td>";
										}else{
											echo "<td><a rel='".$item['cago_id']."' href='javascript:void(0)' name='".$item['cago_status']."' class='status_cago_active'>Not active</a></td>";
										}
										//echo "<td><a class='status_' name='".$item['cago_id']."' href='javscript:void(0)'>Not active</a></td>";
										echo "<td>";
												echo "<div class='actions_menu'><ul>";
													echo "<li><a href='index.php?mod=news_cate&act=edit&cid=".$item['cago_id']."' class='edit'>Edit</a></li>";
													echo "<li><a name='".$item['cago_id']."' href='javascript:void(0)' class='delete_cago cago_id' onclick='return check()'>Del</a></li>";
												echo "</ul></div>";
											echo "</td>";

										echo "</tr>";
									}
								}else{
									echo "<tr>";	
									echo "<td colspan='5'>Không có dữ liệu</td>";
									echo "</tr>";
								}
									?>
								</tbody></table>
                            </form>
                            	<div id="pagination"><?php echo $data['pagelist'];?></div>
							</div>
                            <div class="table_wrapper_inner" id="tab2">
                            	<div class="form_user">
                            	<form action="javascript:void(0)">
                                	<div class="form_items">
                                    	<div class="form_item_left">Tiêu đề</div>
                                        <div class="form_item_right"><input type="text" id="keyword" size="35" /></div>
                                    </div>
                                    <div class="form_items">
                                    	<div class="form_item_left">&nbsp;</div>
                                        <div class="form_item_right"><input type="submit" id="ok" value="Tìm kiếm" class="padding" /></div>
                                    </div>
                                </form>
                                </div>
                                <div id="user_show"></div>
                            </div>
						</div>
							<!--[if !IE]>end table_wrapper<![endif]-->
						</div>
						<!--[if !IE]>start pagination<![endif]-->
							<div class="pagination_wrapper">
							<span class="pagination_top"></span>
							<div class="pagination_middle">
							<div class="pagination">
								<!--<ul class="pag_list">
                                	<?php  //echo $this->pagination->create_links();?>
                                	
									<li><a href="#" class="pag_nav"><span><span>Previous</span></span></a> </li>
									<li><a href="#">1</a></li>
									<li><a href="#" class="current_page"><span><span>2</span></span></a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li>[...]</li>
									<li><a href="#">217</a></li>
									<li><a href="#" class="pag_nav"><span><span>Next</span></span></a> </li>
								</ul>-->
							</div>
							</div>
							<span class="pagination_bottom"></span>
							</div>
						<!--[if !IE]>end pagination<![endif]-->
						<span class="section_content_bottom"></span>
					</div>
					<!--[if !IE]>end section content<![endif]-->
				</div>