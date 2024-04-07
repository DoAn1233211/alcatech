// Login
$(document).ready(function(e) {
    $("#ok").click(function(){
		$user = $("#username").val();
		$pass = $("#password").val(); 
		$.ajax({
			"url" : "process.php",
			"type" : "post",
			"data" : "username="+$user+"&password="+$pass,
			"async" : "false",
			beforeSend : function(){
				//$("#result_login").html("Đang load dữ liệu...");
				//<img class='check_suscess' src='"+links+"public/admin/images/load_form.gif' />
				$("#result_login").html("Đang load dữ liệu ...");
			},
			success: function(result){
				if($user == '' && $pass == ''){
					$("#result_login").html("Vui lòng nhập đầy đủ thông tin !");
				}else if($user == '' || $pass == ''){
					$("#result_login").html("Tài khoản hoặc mật khẩu không được để trống !");
				}else if(result == 'false'){
					$("#result_login").html("Tài khoản hoặc mật khẩu không đúng, vui lòng kiểm tra lại !");
				}
				else{
            		document.location='index.php';
				}
			}
		});
		return false;
	});
});

//Category
$(document).ready(function(e) {
	//links = "http://localhost/alcatech/";
	//Add category
    $("#add_cate").click(function(){
		$cate_title = $("#cate_title").val();
		$val = "abc";
		$.ajax({
			"url" : "index.php?mod=menu&act=add",
			"type" : "post",
			"data" : "cate_title="+$cate_title+"&type="+$val,
			"async" : "false",
			beforeSend : function(){
				$(".error_red").html("<img class='check_suscess' src='"+links+"public/admin/images/load_form.gif' />Đang load dữ liệu ...");
			},
			success: function(result_cate){
				if(result_cate == "false"){
					$(".error_red").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Vui lòng nhập đầy đủ thông tin");
					$("#cate_title").focus();
				}else{
					//$(".error_red").html(result_cate);
					$(".error_red").css("color","#619137").html("<img class='check_suscess' src='"+links+"public/admin/images/check_suscess.png' />Thêm mới thành công");
					$("#form_hide").fadeOut("slow");
					//$("#cate_title").val("");
					//$("#cate_title").focus();
				}
			}
		});
	});
	
	//Edit category
	$("#edit_cate").click(function(){
		$cate_title		= $("#cate_title").val();
		//$cate_status	= $("#cate_status").val();
		$cate_id		= $("#cate_id").text();
		$val = "abc";
		$.ajax({
			"url" : "index.php?mod=menu&act=edit",
			"type" : "post",
			"data" : "cate_title="+$cate_title+"&cate_id="+$cate_id+"&type="+$val,
			"async" : "false",
			beforeSend : function(){
				$(".error_red").html("<img class='check_suscess' src='"+links+"public/admin/images/load_form.gif' />Đang load dữ liệu ...");
			},
			success: function(result_cate){
				if(result_cate == 'false'){
					$(".error_red").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Vui lòng nhập đầy đủ thông tin");
				}else{
					//$(".error_red").html(result_cate);
					$(".error_red").css("color","#619137").html("<img class='check_suscess' src='"+links+"public/admin/images/check_suscess.png' />Sửa thông tin thành công");
					//$("#form_hide").fadeOut("slow");
					//$("#cate_title").val("");
				}
			}
		});
	});
	
	//Del category
	//links_del = "http://localhost/alcatech/";
	$(".delete").click(function(){
		$cate_id	= $(this).attr("name");
		$val = "abc";
		$.ajax({
			"url" : "index.php?mod=menu&act=del",
			"type" : "post",
			"data" : "cate_id="+$cate_id+"&type="+$val,
			"async" : "false",
			success: function(result_cate){
				$(".cate_id_"+$cate_id+"").fadeOut("slow");
			}
		});
		
	});
	
	//Active
	$(".status_active").live("click",function(){
		val = $(this).attr("name");
		rel = $(this).attr("rel");
		type = "abc";
		if(val == 1){
			$(this).html("Not active");
			$(this).attr("name","0");
		}else{
			$(this).html("Active");
			$(this).attr("name","1");
		}
		$.ajax({
			"url"	: "index.php?mod=active",
			"type"	: "post",
			"data"	: "val="+val+"&rel="+rel+"&type="+type,
			"async"	: "false",
			success: function(result_active){
				//$(".status_active").html(result_active);
			}
		});
	});
	
	//
});


//cagogories

$(document).ready(function(e) {
	//links = "http://localhost/alcagoch/";
	//Add cagogory
    $("#add_cago").click(function(){
		$cago_title = $("#cago_title").val();
		$val = "abc";
		$.ajax({
			"url" : "index.php?mod=news_cate&act=add",
			"type" : "post",
			"data" : "cago_title="+$cago_title+"&type="+$val,
			"async" : "false",
			beforeSend : function(){
				$(".error_red").html("<img class='check_suscess' src='"+links+"public/admin/images/load_form.gif' />Đang load dữ liệu ...");
			},
			success: function(result_cago){
				if(result_cago == "false"){
					$(".error_red").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Vui lòng nhập đầy đủ thông tin");
					$("#cago_title").focus();
				}else{
					//$(".error_red").html(result_cago);
					$(".error_red").css("color","#619137").html("<img class='check_suscess' src='"+links+"public/admin/images/check_suscess.png' />Thêm mới thành công");
					$("#form_hide").fadeOut("slow");
					//$("#cago_title").val("");
					//$("#cago_title").focus();
				}
			}
		});
	});
	
	//Edit cagogory
	$("#edit_cago").click(function(){
		$cago_title		= $("#cago_title").val();
		$cago_id		= $("#cago_id").text();
		$val = "abc";
		$.ajax({
			"url" : "index.php?mod=news_cate&act=edit",
			"type" : "post",
			"data" : "cago_title="+$cago_title+"&cago_id="+$cago_id+"&type="+$val,
			"async" : "false",
			beforeSend : function(){
				$(".error_red").html("<img class='check_suscess' src='"+links+"public/admin/images/load_form.gif' />Đang load dữ liệu ...");
			},
			success: function(result_cago){
				if(result_cago == 'false'){
					$(".error_red").css("color","#f00").html("<img class='check_suscess' src='"+links+"public/admin/images/check_error.png' />Vui lòng nhập đầy đủ thông tin");
				}else{
					//$(".error_red").html(result_cago);
					$(".error_red").css("color","#619137").html("<img class='check_suscess' src='"+links+"public/admin/images/check_suscess.png' />Sửa thông tin thành công");
					//$("#form_hide").fadeOut("slow");
					//$("#cago_title").val("");
				}
			}
		});
	});
	
	//Del cagogory
	//links_del = "http://localhost/alcagoch/";
	$(".delete_cago").click(function(){
		$cago_id	= $(this).attr("name");
		$val = "abc";
		$.ajax({
			"url" : "index.php?mod=news_cate&act=del",
			"type" : "post",
			"data" : "cago_id="+$cago_id+"&type="+$val,
			"async" : "false",
			success: function(result_cago){
				$(".cago_id_"+$cago_id+"").fadeOut("slow");
			}
		});
		
	});
	
	//Active
	$(".status_cago_active").live("click",function(){
		val = $(this).attr("name");
		rel = $(this).attr("rel");
		type = "abc";
		if(val == 1){
			$(this).html("Not active");
			$(this).attr("name","0");
		}else{
			$(this).html("Active");
			$(this).attr("name","1");
		}
		$.ajax({
			"url"	: "index.php?mod=news_cate&act=active",
			"type"	: "post",
			"data"	: "val="+val+"&rel="+rel+"&type="+type,
			"async"	: "false",
			success: function(result_active){
				//$(".status_cago_active").html(result_active);
			}
		});
	});
	
	//
});