<?php

/**
 * @package 简约浏览器主页
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
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/index.css') ?>">
	<style>
		body {
			background-image: url('<?= $this->site->background_PC ?>') !important;
		}
	</style>
</head>

<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
	<div id="content">
		<br />
		<div class="search_part">
			<br /><br /><br /><br /><br /><br /><br /><br /><br />
			<img class="smaller" src="<?= $this->themeUrl('assets/img/Google.gif') ?>" width=33%></img>
			<form id="search_form" onsubmit="return search()" class="search_bar" target="_blank">
				<input type="submit" id="search_submit" value="凸^-^凸">
				<span>
					<i id="clear" onclick="clear_seach()"></i>
					<div class="si"><input class="search" type="text" value="" onkeyup="get_suggest()" onfocus="get_suggest()" onpaste="get_suggest()" autocomplete="off" id="search_input" placeholder="百度一下！"></div>
				</span>
				<div id="suggest" style="display:none">
					<ul id="suglist"></ul>
					<div class="close" onclick="close_sug()">| 收起</div>
				</div>
			</form>
			<form target="_blank" style="display: none;" action="https://www.baidu.com/s" id="gosearch" method="get">
				<input name="wd" id="wd">
			</form>
		</div>
		<br />
		<div>
			<?php
			foreach ($link as $key => $value) {
			?>
				<div class="box">
					<a href="<?= $value->link ?>"></a>
					<p>
						<?= $value->image(['class'=>'icon']) ?>
					</p>
					<p class="url"><?= $value->name ?></p>
				</div>
			<?php
			}
			?>
		</div>
	</div>
	<script type="text/javascript" src="<?= $this->themeUrl('assets/js/index.js') ?>"></script>
	<?= $this->footer() ?>
</body>

</html>