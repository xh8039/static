<?php

/**
 * @package 二次元导航发布页
 * @description 来自网络收集
 * @author 易航
 * @version 1.0
 * @link http://blog.bri6.cn
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
$link = $this->getLink();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<meta name="keywords" content="<?= $this->site->keywords ?>" />
	<meta name="description" content="<?= $this->site->description ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= $this->site->favicon ?>">
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="black" name="apple-mobile-web-app-status-bar-style">
	<meta content="telephone=no" name="format-detection">
	<link href="<?= $this->themeUrl('css/style.css') ?>" rel="stylesheet" type="text/css">
</head>

<body>
	<section class="aui-scrollView">
		<div class="aui-dot-head">
			<img src="//www.xingmaogexing.com/4kbizhi" alt="">
			<div class="aui-dot-body">
				<h1><?= $this->options->title ?></h1>
				<h5>
					<font color="red"><?= $this->options->description ?></font>
				</h5>
				<h5>
					<font color="red">永久网址：<?= $this->domain ?></font>
				</h5>
			</div>
		</div>
		<div class="aui-chg-box">
			<h2 class="b-line"><?= $this->options->tip ?></h2>
			<div class="aui-chg-link">
				<?php
				foreach ($link as $key => $value) {
				?>
					<a href="<?= $value->link ?>" target="_blank" class="aui-flex b-line">
						<div class="aui-logo-block">
							<img src="<?= $value->logo ?>" onerror="this.src='<?= $this->themeUrl('img/dg.png') ?>'">
						</div>
						<div class="aui-flex-box">
							<h3><?= $value->name ?></h3>
						</div>
						<div class="aui-button-dot">
							<button>进入</button>
						</div>
					</a>
				<?php
				}
				?>
			</div>
		</div>
	</section>
	<?= $this->footer() ?>
</body>

</html>