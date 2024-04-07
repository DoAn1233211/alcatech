<?php
	session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $data['title'] ;?></title>
<meta name="keywords" content="CÔNG TY TNHH MÁY TÍNH VIỆT THẢO - LAPTOP THÁI HÀ" />
<meta name="description" content="CÔNG TY TNHH MÁY TÍNH VIỆT THẢO - LAPTOP THÁI HÀ" />
<base href="<?php echo  base_url ;?>" />
<?php loadview("scripts");?>

</head>
<body>
	<?php
        loadview("header",$data);
        loadview("content",$data);
        loadview("buttom",$data);
    ?>
</body>
</html>