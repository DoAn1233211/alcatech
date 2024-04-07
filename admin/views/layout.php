<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $data['title']; ?></title>
<link href="<?php echo base_url;?>public/admin/styles/admin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url;?>public/admin/styles/admin-white.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url;?>public/admin/styles/styles.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="<?php echo base_url."public/images/favicon.ico" ;?>" />
<?php 
	loadview("scripts");
?>
</head>

<body>
	<div id="wrapper">
		<?php loadview("header",$data); ?>
        <?php loadview("content",$data); ?>
    </div>
    	<?php loadview("bottom",$data); ?>
</body>
</html>