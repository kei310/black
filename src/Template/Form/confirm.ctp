<?php

	$name = $_POST['name'];
	$age = $_POST['age'];
	$job = $_POST['job'];
	$profile = $_POST['profile'];
;?>



<!doctype html>
<html lang="ja">
<head>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

<meta charset="utf-8">
<meta property="og:site_name" content="" />
<title></title>
<meta name="description" content="<?=$htmldescription?>">
<meta name="keywords" content="<?=$htmlkeywords?>">
<meta name="theme-color" content="">
<meta name="viewport" content="width=640,user-scalable=no">
<!-- <link href="<?=WEBROOT?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?=WEBROOT?>css/layout_pc.css" rel="stylesheet" type="text/css" media="screen and (min-width:661px)">
<link href="<?=WEBROOT?>css/layout_sp.css" rel="stylesheet" type="text/css" media="screen and (max-width:660px)">
<link href="<?=WEBROOT?>css/colors.css" rel="stylesheet" type="text/css">
<link href="<?=WEBROOT?>css/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="/favicon.ico"> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script>window.jQuery.easing.def || document.write('<script src="/js/jquery.easing.min.js"><\/script>')</script>
<!-- <script src="<?=WEBROOT?>js/jquery.cookie.js"></script>
<script src="<?=WEBROOT?>js/owl.carousel.min.js"></script>
<script src="<?=WEBROOT?>js/jquery.common.js"></script> -->
</head>
<body>
<div id="fullWrap">
	<?php echo $this->data['name'];?>
	<?php echo $this->data['age'];?><br>
	<?php echo $this->data['job'];?><br>
	<?php echo $this->data['profile'];?>
</div>
</body>
</html>