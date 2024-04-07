<div class="content_link">
  <a href="/" title="Trang chủ">Trang chủ</a> &raquo; <a href="" title="">Tin tức</a> &raquo; <a href="javascript:void(0)" title=""><span class="sanpham"><?php echo $data['detail']['news_title']?></span></a>
</div>

<div id="content" style="height:auto">
  <div id="bg_left_right">
    <div id="content_left">
      <style>
            	#content_product{padding:10px 0px;box-shadow: 1px 1px 10px 1px #ccc;}
          </style>
      <div id="content_product">
        <h1 class="news_detail_title"><?php echo $data['detail']['news_title']?></h1>
        <p class="news_detail_date">Cập nhật: <?php echo $data['detail']['news_date']?></p>
        <img class="news_detail_img" src="<?php echo base_url."uploads/news/thumb/".$data['detail']['news_images'];?>" alt="<?php echo $data['detail']['news_title']?>" title="<?php echo $data['detail']['news_title']?>">
        <p class="news_detail_description"><?php echo $data['detail']['news_info']?></p>
        <div class="news_detail_full">
        	<?php echo $data['detail']['news_full']?>
        </div>
        <h3 class="news_detail_list">Các tin khác</h3>
        <ul class="news_detail_listnews">
        	<?php
				if(isset($data['other_list']) && $data['other_list'] != NULL){
					foreach($data['other_list'] as $value){
						echo "<li><a href='".base_url.'tin-tuc/'.$value['news_rewrite'].'/n'.$value['news_id'].'.html'."' title='".$value['news_title']."'>".$value['news_title']."</a></li>";
					}
				}else{
					echo "<li>Không có tin liên quan nào !</li>";
				}
			?>
        </ul>
      </div>
    </div>
    <div id="content_right">
      <div id="right_top_top">
        <h3 class="right_title"> DANH MỤC TIN TỨC </h3>
        <ul class="category">
			<?php
				if(isset($data['cate']) && $data['cate']!= NULL){
					foreach($data['cate'] as $value){
						echo "<li><a href='".base_url."".$value['cago_rewrite']."/ac".$value['cago_id'].".html'><span class='disc'>•</span>".$value['cago_name']."</a></li>";
					}
				}else{
					echo "<li>Chưa cập nhật !</li>";
				}
            ?>
        </ul>
      </div>
      <div id="free_ship"> </div>
    </div>
  </div>
  <!--End List product-->