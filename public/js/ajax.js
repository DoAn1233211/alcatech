// JavaScript Document
//Contact form
$(document).ready(function(e) {
    $("#contact_send").click(function(){
		name	= $("#contact_name").val();
		email	= $("#contact_email").val();
		phone	= $("#contact_tel").val();
		message = $("#contact_message").val();
		$val = "abc";
		$.ajax({
			"url" : "index.php?page=contact",
			"type" : "post",
			"data" : "con_name="+name+"&con_email="+email+"&con_phone="+phone+"&con_message="+message+"&type="+$val,
			"async" : "false",
			beforeSend : function(){
				$(".contact_view").html("Đang load dữ liệu ...");
			},
			success: function(results){
				if(results == 1){
					$(".contact_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Vui lòng nhập đầy đủ thông tin");
				}else if(results == 2){
					$(".contact_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Số điện thoại không hợp lệ");
				}else if(results == 3){
					$(".contact_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Số điện thoại không đúng, vui lòng kiểm tra lại");
				}else if(results == 5){
					$(".contact_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Email không đúng định dạng, vui lòng kiểm tra lại");
					return false;
				}else{
					$(".contact_view").css("color","#639537").html("<img class='check_suscess' src='"+links+"public/admin/images/check_suscess.png' />Ý kiến của bạn đã được gửi, chúng tôi sẽ liên hệ với bạn trong thời gian gần nhất !.");
					$("#contact_name").val("");
					$("#contact_email").val("");
					$("#contact_tel").val("");
					$("#contact_message").val("");
				}
			}
		});
		return false;
	});
});

//Send Shopping cart

$(document).ready(function(){
	$("#send_all").click(function(){
		cart_name		= $("#cart_name").val();
		cart_email		= $("#cart_email").val();
		cart_tel		= $("#cart_tel").val();
		cart_address	= $("#cart_address").val();
		cart_message	= $("#cart_message").val();
		val = "abc";
		$.ajax({
			"url"	: "index.php?page=shopping&act=send",
			"type"	: "post",
			"data"	: "cart_name="+cart_name+"&cart_email="+cart_email+"&cart_tel="+cart_tel+"&cart_address="+cart_address+"&cart_message="+cart_message+"&type="+val,
			"async"	: "false",
			beforeSend : function(){
				$(".cart_view").html("Đang load dữ liệu ...");
			},
			success: function(results_cart){
				if(results_cart == 1){
					$(".cart_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Vui lòng nhập đầy đủ thông tin");
				}else if(results_cart == 2){
					$(".cart_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Số điện thoại không hợp lệ");
				}else if(results_cart == 3){
					$(".cart_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Số điện thoại không đúng, vui lòng kiểm tra lại");
				}else if(results_cart == 5){
					$(".cart_view").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Email không đúng định dạng, vui lòng kiểm tra lại");
					return false;
				}else{
					$(".cart_view").css("color","#639537").html("<img class='check_suscess' src='"+links+"public/admin/images/check_suscess.png' />Đơn hàng của bạn đã được gửi, chúng tôi sẽ liên hệ với bạn trong thời gian gần nhất !.");
					$("#cart_name").val("");
					$("#cart_email").val("");
					$("#cart_tel").val("");
					$("#cart_address").val("");
					$("#cart_message").val("");
				}
			}
		})
		return false;
	});
});