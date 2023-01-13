<?php

/**
 * @package 粉色网址发布页
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
<html>

<head>
	<?= $this->header() ?>
	<link rel="stylesheet" href="<?= $this->themeUrl('index.css') ?>">
</head>

<body>
	<div id="all">
		<div class="wrapper">
			<div class="main">
				<h1><?= $title ?></h1>
				<div class="content">
					<div class="content-top">
						<h2>请 Ctrl+D 收藏本页到浏览器收藏夹<br>本站永久地址：http://<?= $this->domain ?></h2>
						<ul>
							<?php
							foreach ($link as $key => $value) {
							?>
								<li>
									<?= $value->name ?>
									<a href="<?= $value->link ?>" target="_blank"><i><?= $value->link ?></i></a>
									</span></span>
								</li>
							<?php
							}
							?>
							<li>
								<span>近期部分国产浏览器屏蔽网址，电脑请安装<a href="https://www.google.cn/chrome/" target="_blank">chrome浏览器</a>访问，手机请安装<a href="" target="_blank">X浏览器</a>访问。<span>
							</li>
						</ul>
					</div>
				</div>
				<p class="footer"><?= $this->site->copyright ?></p>
			</div>
			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
	<div style='display:none'></div>
	<?= $this->footer() ?>
</body>

</html>