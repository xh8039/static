<?php

/**
 * @package 冷黑灯光
 * @description 来自用户投稿
 * @author 易航
 * @version 1.0
 * @link http://blog.bri6.cn
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
$link = $this->getLink();
?>
<!DOCTYPE html>
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?></title>
	<meta name="keywords" content="<?= $this->site->keywords ?>" />
	<meta name="description" content="<?= $this->site->description ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= $this->site->favicon ?>">
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/buttons.css') ?>">
	<link rel="stylesheet" id="patternfly-adjusted-css" href="<?= $this->themeUrl('assets/css/app.css') ?>" type="text/css" media="all">
	<script type="text/javascript" src="<?= $this->cdn('jquery/3.6.1/jquery.min.js') ?>"></script>
	<!-- <link rel="stylesheet" href="<?= $this->cdn('twitter-bootstrap/3.3.7/css/bootstrap.min.css') ?>" type="text/css" media="all"> -->
	<script src="<?= $this->cdn('twitter-bootstrap/3.3.7/js/bootstrap.min.js') ?>"></script>
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/index.css') ?>">
	<style>
		.home .jumbotron {
			padding: 0;
		}
	</style>
</head>

<body class="home page page-id-194 page-template page-template-page-homepage page-template-page-homepage-php custom-background" ondragstart="window.event.returnValue=false" oncontextmenu="window.event.returnValue=false" onselectstart="event.returnValue=false">
	<header role="banner">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
						<span class="icon-bar">
						</span>
					</button>
					<a class="navbar-brand" id="logo" title="<?= $title ?>" href="/"><?= $title ?></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul id="menu-primary" class="nav navbar-nav navbar-right">
						<?php
						foreach ($link as $key => $value) {
						?>
							<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown">
								<a class="dropdown-toggle" href="<?= $value->link ?>"><?= $value->name ?></a>
							</li>
						<?php
						}
						?>
					</ul>
				</div>
				<!-- end .navbar-collapse -->
			</div>
			<!-- end .container -->
		</nav>
		<!-- end .navbar -->
	</header>
	<!-- end header -->
	<div class="jumbotron">
		<div class="container" style="padding-top:100px">
			<div class="splash">
				<div class="content">
					<img src="http://q.qlogo.cn/headimg_dl?dst_uin=<?= $this->site->QQ ?>&spec=640" alt="PatternFly logo" id="qq" class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
					<h1 class="wow fadeIn animated" data-wow-delay="750ms" style="visibility: visible; animation-delay: 750ms; animation-name: fadeIn;">
						<?= $title ?>
					</h1>
					<p class="description wow fadeIn animated" data-wow-delay="1250ms" style="visibility: visible; animation-delay: 1250ms; animation-name: fadeIn;"><?= $this->site->description ?></p>
					<?php
					foreach ($link as $key => $value) {
					?>
						<a href="<?= $value->link ?>" class="button button-glow button-border button-rounded button-primary"><?= $value->name ?>
						</a>&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
					}
					?>
					<br><br><br><br><br><br>
					<div style="width: 100%;bottom: 30px;box-sizing: border-box;left: 0;">
						<a href="http://www.miitbeian.gov.cn/"><?= $this->site->icp ?></a></p>
						Copyright © 2017-2023<a href="/"> <?= $title ?></a> 版权所有
					</div>
				</div>
			</div>
		</div>
		<canvas id="canvas" width="100%" height="100%"></canvas>
	</div>
	<script src="<?= $this->themeUrl('assets/js/hovertreewelcome.js') ?>"></script>
	<script src="<?= $this->themeUrl('assets/js/mian.js') ?>" type="text/javascript"></script>
	<?= $this->footer() ?>
</body>

</html>