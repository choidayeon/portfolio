<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
<meta property="og:image" content="/og_logo.png">
<meta property="og:image:type" content="image/png">
<title>CHOI's Protfolio</title>

<link rel="stylesheet" href="/css/fonts.css">
<link rel="stylesheet" href="/js/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/style_t.css">
<link rel="stylesheet" href="/css/style_m.css">

<script type="text/javascript" src="/js/jquery-1.9.1.min.js"></script>
    
</head>

<body>

<div id="wrapper">
	<!--header-->
	<header id="header">
		<div class="center">
			<a href="/"><h1>Choi Dayeon <span>PORTFOLIO</span></h1></a>
			<nav id="nav" class="hd_btm">
			<!-- nav -->
			<? include_once("navi.php");?>
			<!-- //navi -->
			</nav>
			<div id="btn_nav"><a href="#;" class="btn_hbg"><span>메뉴보기</span></a></div>
		</div>
	</header>
  <?php if (!defined('_INDEX_')) { ?>
		<!--contents-->
		<section id="contents" class="sub">
		<section id="sub_contents" class="center sub<?php echo $mainNum?> sub<?php echo $mainNum.$subNum?>">

	<?php } ?>
