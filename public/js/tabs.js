// JavaScript Document
$(document).ready(function(e) {
	$("ul.pro_thumb_list li a").click(function(){
		name = $(this).attr("name");
		$("#pro_images_image").html("<img class='pro_detail_img' src='images/"+name+"' width='130' height='242' />");
	});
	
	//Tabs product_info
	var $obj  = $("ul.product_tabs li a");
	var $show = $(".des_detail_pro");
	$show.hide();
	$show.eq(0).show();
	$obj.click(function(){
		//$show.eq(0).fadeIn();
		$val = $(this).attr("name");
		$show.hide();
		$(".active").removeClass("active");
		$(this).addClass("active");
		$show.eq($val).fadeIn();
		return false;
	});
});