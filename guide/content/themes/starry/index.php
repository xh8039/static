<?php

/**
 * @package 梦想启航
 * @description 来自葫芦侠，由易航整理至引导系统
 * @author 过客
 * @version 1.0
 * @link http://bbs.huluxia.com/wap/thread/234135.html?para=37HftN%2By37jfst%2Bx37ffsd%2B53p%2Ffst%2Bz37Tfsd%2Bz37U%3D
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
$link = $this->getLink();
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<meta name="keywords" content="<?= $this->site->keywords ?>" />
	<meta name="description" content="<?= $this->site->description ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?= $this->site->favicon ?>">
	<script>
		document.documentElement.className = "js";
		var supportsCssVars = function() {
			var e, t = document.createElement("style");
			return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
		};
		supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
	</script>
	<link href="<?= $this->themeUrl('assets/css/vendors.css') ?>" rel="stylesheet">
	<link href="<?= $this->themeUrl('assets/css/style.css') ?>" rel="stylesheet">
</head>

<body>
	<!--开始-->
	<div class="contnt">
		<header class="meng"><?= $title ?></header>
		<div class="messageDetails">
			<div class="storeup">
				<p><?= $this->options->message ?></p>
			</div>
			<?php
			foreach ($link as $key => $value) {
			?>
				<div class="link">
					<span><?= $value->name ?></span>
					<a target="_blank" href="<?= $value->link ?>"><?= $this->options->accessButton ?></a>
				</div>
			<?php
			}
			?>
		</div>
		<footer>
			<p>© 2020-2023 <a href="http://<?= $this->domain ?>"><?= $title ?></a>. All Rights Reserved</p>
		</footer>
	</div>
	<!--结束-->
	<div class="overlay"></div>
	<script type="text/javascript" src="<?= $this->themeUrl('assets/js/vendors.js') ?>"></script>
	<script type="text/javascript" src="<?= $this->themeUrl('assets/js/style.js') ?>"></script>
	<?= $this->footer() ?>
</body>

</html>