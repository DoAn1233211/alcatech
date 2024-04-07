<!--link href="<?php echo base_url;?>admin/public/styles/bootstrap.css" rel="stylesheet" type="text/css" /-->

<script  type="text/javascript" src="<?php echo base_url;?>public/admin/scripts/jquery-1.7.1.js"></script>
<script  type="text/javascript" src="<?php echo base_url;?>public/admin/scripts/cufon-yui.js"></script>
<script  type="text/javascript" src="<?php echo base_url;?>public/admin/scripts/UTM_Facebook_KT_400.font.js"></script>
<script  type="text/javascript" src="<?php echo base_url;?>public/ckeditor/ckeditor.js"></script>
<script  type="text/javascript" src="<?php echo base_url;?>public/admin/scripts/behaviour.js"></script>
<script  type="text/javascript" src="<?php echo base_url;?>admin/public/scripts/ajax_admin.js"></script>
<script type="text/javascript">
	Cufon.replace('h2.menu_title');
</script>
<script type="text/javascript">
$(document).ready(function(){
$(".dashboard_menu li a").each(function(){
url = location.href.toLowerCase();
if (this.href.toLowerCase() == url) {
	$(".dashboard_menu li a").removeClass("acctive");
	$(this).addClass("acctive");
  }
 });
});
</script>
<script type="text/javascript">
	var links = "<?php echo base_url ;?>";
</script>
<script type="text/javascript">
$(document).ready(function(){
$(".dashboard_menu li a").each(function(){
url = location.href.toLowerCase();
if (this.href.toLowerCase() == url) {
	$(".dashboard_menu li a").removeClass("accctive");
	$(this).parent().addClass("accctive");
  }
 });
});
</script>