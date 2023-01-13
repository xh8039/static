<?php

/**
 * @package 默认引导页
 * @description 这是由易航开发的第一款默认主题
 * @author 易航
 * @version 1.0
 * @link http://blog.bri6.cn
 */
$this->include('public/common.php');
$link = $this->getLink();
$title = $this->site->title;
?>
<!--声明：此网站为易航原创主题，不是网上泛滥的萃绿网址导航页-->
<!DOCTYPE html>
<html lang="zh">

<head>
	<?= $this->header() ?>
	<meta name="Author" content="易航">
	<link rel="stylesheet" type="text/css" href="<?= $this->cdn('twitter-bootstrap/5.2.0/css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?= $this->themeUrl('assets/css/index.css') ?>" />
	<script type="text/javascript" src="<?= $this->cdn('jquery/3.6.0/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->cdn('layer/3.5.1/layer.js'); ?>"></script>
</head>

<body>
	<div class="box">
		<h1><?= $title ?></h1>
		<div class="zbox">
			<ul class="box-lb">
				<?php
				foreach ($link as $key => $value) {
					$li = <<<HTML
					<li>
						<a href="{$value->link}" target="_blank">{$value->name}</a>
					</li>
					HTML;
					echo $li;
				}
				?>
			</ul>
		</div>
	</div>
	<div class="tishi">
		<p>将本站收藏至浏览器书签，永不迷路</p>
		<button id="gb-ts">×</button>
	</div>
	<div class="footer">
		<p><?= $this->site->copyright ?></p>
		<p><?= $this->site->icp ?></p>
		<p class="yqlj">
			<span>友情链接：</span>
			<span style="display:block;">做上本站友链后从贵站进入本站，贵站即可加入本站友链!</span>
			<span style="display:block;margin-bottom:10px">使用SSL安全证书的需要在头部加入：<textarea><meta name="referrer" content="always"></textarea></span>
			<?php
			$friend = $this->getFriend();
			foreach ($friend as $value) {
				$a = element('a');
				$a->attr([
					'href' => 'http://' . $value->domain,
					'title' => $value->description,
					'target' => '_blank',
				]);
				echo $a->get();
			}
			?>
		</p>
	</div>
	<script type="text/javascript" src="<?= $this->themeUrl('assets/js/index.js') ?>"></script>
	<?= $this->footer() ?>
</body>

</html>