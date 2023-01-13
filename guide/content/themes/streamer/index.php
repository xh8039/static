<?php

/**
 * @package 暗黑流光
 * @description 这是一款由易航在网络收集的暗黑流光引导页并优化排版
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
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<title><?= $title ?></title>
	<meta name="keywords" content="<?= $this->site->keywords ?>" />
	<meta name="description" content="<?= $this->site->description ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= $this->site->favicon ?>">
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/style.css') ?>">
</head>

<body>
	<div class="centerBox">
		<div class="center-list">
			<div class="centerBody">
				<img src="<?= $this->themeUrl('assets/img/ds.png') ?>">
				<?php
				foreach ($link as $key => $value) {
				?>
					<p class="btn-p">
						<a href="<?= $value->link ?>" target="_blank" title="<?= $value->name ?>" alt="<?= $value->name ?>"><?= $value->name ?></a>
					</p>
				<?php
				}
				?>
				<font style="color: #fffff;font-size:12px;letter-spacing: 11px;font-weight: 100;padding-left:20px;">敢于想象&nbsp;&nbsp;勇于创造</font>
			</div>
		</div>
		<div class="footer">
			<div class="center-footer">
				<p class="banquan"><?= $this->site->icp ?></p>
				<p class="banquan"><?= $this->domain ?></p>
			</div>
		</div>
	</div>
	<script src="<?= $this->themeUrl('assets/js/simplex-noise.min.js') ?>"></script>
	<script src="<?= $this->themeUrl('assets/js/index.js') ?>"></script>
	<?= $this->footer() ?>
</body>

</html>