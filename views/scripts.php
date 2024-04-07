<link rel="shortcut icon" href="<?php echo base_url."public/images/favicon.ico" ;?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url."public/styles/style.css";?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url."public/styles/popup.css";?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url."public/styles/magiczoom.css";?>" />
<script type="text/javascript" src="<?php echo base_url."public/js/jquery1.10.2.min.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/tabs.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/tooltip.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/popup.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/jqueryEasing.js";?>"></script>
<script type="text/javascript" src="<?php echo base_url."public/js/ajax.js";?>"></script>

<script src="<?php echo base_url."public/js/magiczoom.js";?>" type="text/javascript"></script> 
<script type="text/javascript">
	MagicZoom.options = {
	'disable-zoom' : false,
	'selectors-change' : 'mouseover'
	}
</script> 
<script type="text/javascript">
	var links = "<?php echo base_url ;?>";
</script>
<script type="text/javascript">
$(function() {
$(window).scroll(function() {
if($(this).scrollTop() != 0) {
	$('#bttop').fadeIn();
	} else {
	$('#bttop').fadeOut();
	}
});

$('#bttop').click(function() {
	$('body,html').animate({scrollTop:0},300);
});
});
</script>
<script type="text/javascript">
	$(window).scroll(function(){
		t = parseInt($(window).scrollTop());
		
		if(t < 100) $('#banner_left_scroll,#banner_right_scroll').stop().animate({marginTop:t},500,"easeOutBack");
		else $('#banner_left_scroll,#banner_right_scroll').stop().animate({marginTop:t},500,"easeOutBack");
	})
</script> 
<script type="text/javascript">
$(document).ready(function(){
$("#menu_top .list_menutop li a").each(function(){
url = location.href.toLowerCase();
if (this.href.toLowerCase() == url) {
	$("#menu_top .list_menutop li a").removeClass("active");
	$(this).addClass("active");
  }
 });
});
</script>
<script type="text/javascript">
	$(document).ready(function(e) {
        $(".send_cart").hide();
		$(".send_info").click(function(){
			$(".send_cart").slideToggle("slow");
			
		});
    });
</script>