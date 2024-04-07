<div class="content_link">
  <a href="/" title="Trang chủ">Trang chủ</a> &raquo; <a href="javascript:void(0)" title=""><span class="sanpham">Tin tức
</span></a>
</div>
<div id="content" style="height:auto">
    	<div id="bg_left_right">
    	<div id="content_left">
          <style>
            	#content_product{padding:10px 0px;margin-bottom: 10px;box-shadow: 1px 1px 10px 1px #ccc;}
          </style>
      	<div id="content_product">
                  <?php
				  	if(isset($data['listnews']) && $data['listnews'] != NULL){
						foreach($data['listnews'] as $value){
				  ?>
                    <div class="news_list_new">
                      <a href="<?php echo base_url.'tin-tuc/'.$value['news_rewrite'].'/n'.$value['news_id'].'.html' ;?>" title="<?php echo $value['news_title']; ?>">
                      <img style="width:120px;height:80px;" src="<?php echo base_url."uploads/news/thumb/".$value['news_images'];?>" alt="<?php echo $value['news_title']; ?>" title="<?php echo $value['news_title']; ?>" /></a>
                      <h3 class="news_list_new_title"><a href="<?php echo base_url.'tin-tuc/'.$value['news_rewrite'].'/n'.$value['news_id'].'.html' ;?>" title="<?php echo $value['news_title']; ?>"><?php echo $value['news_title']; ?></a></h3>
                      <span class="news_dates">Cập nhật: <?php echo $value['news_date']; ?></span>
                      <p class="news_fulls"><?php echo $value['news_info']; ?></p>
                      <p class="news_rights"><a href="<?php echo base_url.'tin-tuc/'.$value['news_rewrite'].'/n'.$value['news_id'].'.html' ;?>" title="xem tiếp">» xem tiếp</a></p>
                  </div>
                    <div class="clss"></div>
                    <?php } }else{}?>
        </div>
          
          <div class="content_sort">
            <style>
              	.cssOrder table{margin:0px auto;}
            </style>
          <div class="cssOrder" style="width:710px;text-align:center;margin:3px 2px 0px 2px;">
          	<div class="paging">
            	<?php echo $data['pagelist'];?>
            </div>
          </div>
        </div>
      </div>
      
          <div id="content_right">
      	<div id="right_top_top">
        	<h3 class="right_title">
            DANH MỤC TIN TỨC
          </h3>
          <ul class="category">
          <!-- echo "<li><a href='".base_url."".$value['cago_rewrite']."/ac".$value['cago_id'].".html' title='".$value['cago_name']."'><span class='disc'>•</span>".$value['cago_name']."</a></li>"; -->
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
        <div id="free_ship">
        </div>
      </div>
          
      </div>
      <!--End List product-->