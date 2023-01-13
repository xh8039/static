<?php

/**
 * @package 小枫引导页
 * @description 小枫原创引导页，由易航整理至引导系统
 * @author 小枫
 * @version 1.0
 * @link https://gitee.com/xfwlclub/simple-guide-page
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
$link = $this->getLink();
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<title><?= $title ?></title>
	<meta name="keywords" content="<?= $this->site->keywords ?>" />
	<meta name="description" content="<?= $this->site->description ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= $this->site->favicon ?>">
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/normalize.css') ?>">
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/style.css') ?>">
	<script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
	<section class="content">
		<div class="box">
			<img src="http://q4.qlogo.cn/headimg_dl?dst_uin=<?= $this->options->qq ?>&spec=640" alt="">
			<!-- 名称 -->
			<h2><?= $title ?></h2>
			<!-- 售后 -->
			<div class="as">
				<p>添加售后群</p>
				<p><?= $this->options->group ?></p>
				<p>售后客服添加</p>
			</div>
			<!-- 超链接 -->
			<ul class="site">
				<?php
				foreach ($link as $key => $value) {
				?>
					<li><a href="<?= $value->link ?>" target="_blank" rel="noopener noreferrer"><?= $value->name ?></a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</section>
	<script src="<?= $this->themeUrl('assets/js/flexible.js') ?>"></script>
	<?= $this->footer() ?>
</body>

</html>