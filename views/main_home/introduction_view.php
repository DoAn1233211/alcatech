<div class="content_link">
  <a href="/" title="Trang chủ">Trang chủ</a> » <a href="javascript:void(0)" title=""><span class="sanpham">Giới thiệu</span></a>
</div>
<div id="content" style="height:auto">
<!--div class="border"-->
<div class="con_page" style="box-shadow: 1px 1px 10px 1px #ccc;float:left;height:auto;width:940px;padding:10px;margin:10px 0px;">
	<?php
		if($data['intro']['intro_full'] == ""){
			echo "Nội dung đang chờ cập nhật và chỉnh sửa";
		}else{
			echo $data['intro']['intro_full'];
		}
	?>
</div>