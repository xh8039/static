<?php

/**
 * @package 炫酷引导页
 * @description 来自网络收集，由易航整理至引导系统并优化
 * @author 月涩
 * @version 1.0
 * @link http://blog.bri6.cn
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
$link = $this->getLink();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title><?= $title ?></title>
	<meta name="keywords" content="<?= $this->site->keywords ?>" />
	<meta name="description" content="<?= $this->site->description ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= $this->site->favicon ?>">
	<link rel="stylesheet" type="text/css" href="<?= $this->themeUrl('assets/css/style.css') ?>">
	<link href="<?= $this->cdn('aplayer/1.10.1/APlayer.min.css') ?>" rel="stylesheet">
	<script type="text/javascript" src="https://at.alicdn.com/t/font_2962400_gpo2ebvd428.js"></script>
	<script src="<?= $this->cdn('jquery/3.6.1/jquery.min.js') ?>"></script>
	<script src="<?= $this->cdn('aplayer/1.10.1/APlayer.min.js') ?>"></script>
	<script src="<?= $this->cdn('color-thief/2.3.2/color-thief.min.js') ?>"></script>
	<script src="<?= $this->themeUrl('assets/js/MusicPlayer.js') ?>"></script>
	<style type=text/css>
		html body {
			background-image: url(<?= $this->options->background ?>);
		}
	</style>
</head>
</style>

<body>
	<div class="qqimg">
		<img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?= $this->options->qq ?>&spec=640">
	</div>
	<div class="solid-ht"></div>
	<div class="solid-wh"></div>
	<div class="title">
		<i>
			<h1><?= $this->options->title ?></h1>
		</i>
		<p><?= $this->options->fable ?></p>
	</div>
	<div class="solid-wh"></div>
	<div class="solid-ht"></div>
	<div class="nav">
		<ul>
			<?php
			foreach ($link as $key => $value) {
			?>
				<li><a href="<?= $value->link ?>" target="_blank"><?= $value->name ?></a></li>
			<?php
			}
			?>
		</ul>
	</div>
	<div class="contact">
		<h3>点击下方支助我一点吧</h3>
		<a href="JavaScript:;">
			<svg class="icon" aria-hidden="true">
				<use xlink:href="#icon-QQ"></use>
			</svg>
			<span> Q Q</span>
		</a>
		<a href="JavaScript:;">
			<svg class="icon" aria-hidden="true">
				<use xlink:href="#icon-zhifubao"></use>
			</svg>
			<span> 支付宝</span>
		</a>
		<a href="JavaScript:;">
			<svg class="icon" aria-hidden="true">
				<use xlink:href="#icon-weixinzhifu"></use>
			</svg>
			<span> 微信</span>
		</a>
	</div>
	<div class="zs-qq">
		<p>请扫描以下二维码向我付款</p>
		<img src="" />
		<p>非常感谢你的每一赞助</p>
		<p>你们的每一笔赞助,我都会记在心里</p>
		<button id="btn">确定</button>
	</div>
	<div class="copyright">
		<p>Copyright © 2021-2022. <?= $title ?></p>
	</div>
	</div>
	<script>
		$(function() {
			$(".contact a").eq(0).click(function() { //qq二维码
				$(".zs-qq img").attr("src", "<?= trim($this->options->QQPicture) ?>");
				$(".zs-qq").show();
			})
			$(".contact a").eq(1).click(function() { //支付宝二维码
				$(".zs-qq img").attr("src", "<?= trim($this->options->Alipay) ?>");
				$(".zs-qq").show();
			})
			$(".contact a").eq(2).click(function() { //微信二维码
				$(".zs-qq img").attr("src", "<?= trim($this->options->WeChat) ?>");
				$(".zs-qq").show();
			})
			$("#btn").click(function() {
				$(".zs-qq").hide();
			})
		})
	</script>
	<?= $this->footer() ?>
</body>

</html>