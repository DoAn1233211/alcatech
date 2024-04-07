				<div class="section">
                <script type="text/javascript">
					function chkallClick(o) {
						var form = document.sac;
						for (var i = 0; i < form.elements.length; i++) {
							if (form.elements[i].type == "checkbox" && form.elements[i].name!="checkall") {
								form.elements[i].checked = document.sac.checkall.checked;
							}
						}
					}
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
								<h2 class="menu_title">Hỗ trợ trực tuyến</h2>
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
								<li><a href="<?php echo base_url."admin/index.php?mod=support&act=add"; ?>" name=""><span><span>Thêm mới</span></span></a></li>
							</ul>
							<!--[if !IE]>start  tabs<![endif]-->
							<!--[if !IE]>end  tabs<![endif]-->
							</div>
							<!--[if !IE]>start table_wrapper<![endif]-->
							<div class="table_wrapper">
								<div class="table_wrapper_inner" id="tab1">
                            <form action="index.php?mod=support&act=list" method="post" name="sac">
								<table cellpadding="0" cellspacing="0" width="905">
									<tbody>
                                    <tr>
										<th width="24"><input type="checkbox" name="checkall" onclick="chkallClick(this)"/></th>
									  	<th width="211"><a href="#">Tên hiển thị</a></th>
									  	<th width="145"><a href="#">Nick yahoo</a></th>
									  	<th width="138"><a href="#">Phone number</a></th>
									  	<th width="140"><a href="#">Nick skype</a></th>
									  	<th width="173"><a href="#">Email</a></th>
									  	<th width="72"><a href="#">Actions</a></th>
									</tr>
                                    <?php
									if(isset($data['list']) && $data['list'] != NULL){
										foreach($data['list'] as $items){
												echo "<tr class='second'>";
												echo "<td><input type='checkbox'/></td>";
												echo "<td>".$items['sup_name']."</td>";
												echo "<td>".$items['sup_yahoo']."</td>";
												echo "<td>".$items['sup_phone']."</td>";
												echo "<td>".$items['sup_sky']."</td>";
												echo "<td>".$items['sup_email']."</td>";
												echo "<td>";
													echo "<div class='actions_menu'><ul>";
														echo "<li><a href='index.php?mod=support&act=edit&sid=".$items['sup_id']."' class='edit'>Edit</a></li>";
														echo "<li><a href='index.php?mod=support&act=del&sid=".$items['sup_id']."' class='delete' onclick='return check()'>Del</a></li>";
													echo "</ul></div>";
												echo "</td>";
												echo "</tr>";
										}
									}else{
										echo "<tr>";
										echo "<td colspan='7'>Không có dữ liệu</td>";
										echo "</tr>";
									}
									?>
								</tbody></table>
                            </form>
                            	<div id="pagination"><?php  echo $data['listpage'];?></div>
							</div>
                            <div class="table_wrapper_inner" id="tab2">
                            	<div class="form_user">
                            	<form action="javascript:void(0)">
                                	<div class="form_items">
                                    	<div class="form_item_left">Tên tài khoản</div>
                                        <div class="form_item_right"><input type="text" id="keyword" size="25" /></div>
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