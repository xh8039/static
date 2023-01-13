<?php

/**
 * @package 微导航
 * @description 来自网络收集
 * @author 六零
 * @version 1.0
 * @link https://gitee.com/LyLme/lylme_spage/
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
$sort = $this->getSort();
?>
<!DOCTYPE html>
<html lang="zh-CN" element::-webkit-scrollbar {display:none}>

<head>
	<?= $this->header() ?>
	<script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-2-M/jquery/3.5.1/jquery.min.js" type="application/javascript"></script>
	<link href="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.5.3/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/style.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/font.css') ?>" type="text/css">
	<link rel="stylesheet" href="<?= $this->themeUrl('assets/css/tag.css') ?>" type="text/css">
</head>

<body onload="FocusOnInput()">
	<div class="banner-video">
		<img src="<?= empty($this->site->background_PC) ? 'https://cn.bing.com//th?id=OHR.HuntsMesa_JA-JP3140979616_1920x1080.jpg' : $this->site->background_PC ?>">
		<div class="bottom-cover" style="background-image: linear-gradient(rgba(255, 255, 255, 0) 0%, rgb(244 248 251 / 0.6) 50%, rgb(244 248 251) 100%);"></div>
	</div>
	<div class="box">
		<div class="change-type">
			<div class="type-left" id="type-left">
				<ul>
					<li data-lylme="search">
						<a>搜索</a>
						<span></span>
					</li>
					<?php
					foreach ($sort as $key => $value) {
					?>
						<li data-lylme="group_<?= $value->id ?>">
							<a><?= $value->name ?></a>
							<span></span>
						</li>
					<?php
					}
					$friend = $this->getFriend();
					if (!empty($friend)) {
					?>
						<li data-lylme="group_friend">
							<a>友情链接</a>
							<span></span>
						</li>
					<?php
					}
					?>
				</ul>
			</div>
		</div>
	</div>
	<!--topbar开始-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="position: absolute; z-index: 10000;">
		<!--<a class="navbar-brand" href="/"><img src="./assets/img/logo.png" height="25"  title="LyLme_Spage"></a>-->
		<button class="navbar-toggler collapsed" style="border: none; outline: none;" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
			<svg class="icon" width="200" height="200">
				<use xlink:href="#icon-menus"></use>
			</svg>
		</button>
		<div class="type-right">
			<svg t="1651476001599" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="6329" width="200" height="200">
				<path d="M512 491.52l286.72-286.72-522.24 174.08L512 491.52zM137.216 337.92L866.304 96.256c16.384-6.144 34.816 4.096 40.96 20.48 2.048 6.144 2.048 14.336 0 20.48L665.6 866.304c-6.144 16.384-24.576 26.624-40.96 20.48-8.192-2.048-14.336-8.192-18.432-16.384L450.56 552.96 133.12 399.36c-16.384-8.192-22.528-26.624-14.336-43.008 2.048-8.192 10.24-14.336 18.432-18.432z" fill="#304ECE" p-id="6330"></path>
			</svg>
		</div>
		<div class="collapse navbar-collapse" id="navbarsExample05">
			<ul class="navbar-nav mr-auto">
				<?php
				(function () {
					$custom = [];
					$custom_text = $this->options->CustomNavs;
					if ($custom_text) {
						$custom_arr = explode("\r\n", $custom_text);
						if (count($custom_arr) > 0) {
							for ($i = 0; $i < count($custom_arr); $i++) {
								$title = explode("||", $custom_arr[$i])[0];
								$url = explode("||", $custom_arr[$i])[1];
								$custom[] = array("title" => trim($title), "url" => trim($url));
							};
						}
					}
					foreach ($custom as $key => $value) {
						$html = <<<HTML
						<li class="nav-item">
							<a class="nav-link" href="{$value['url']}">{$value['title']}</a>
						</li>
						HTML;
						echo $html;
					}
				})()
				?>
			</ul>
			<div id="main">
				<div id="show_date"></div>
				<div id="show_time"></div>
			</div>
		</div>
	</nav>
	<!--topbar结束-->
	<div class="container" style="margin-top:10vh; position: relative; z-index: 100;">
		<h2 class="title"><?= $this->options->title ?></h2>
		<p class="content"><?= $this->options->content ?></p>
		<!--搜索开始-->
		<div id="search" class="s-search">
			<div id="search-list" class="hide-type-list">
				<div class="search-group group-a s-current" style=" margin-top: 50px;">
					<ul class="search-type">
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-baidu" value="https://www.baidu.com/s?word=" data-placeholder="百度一下，你就知道">
							<label for="type-baidu" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-icon_baidulogo"></use>
								</svg>
								<span style="color:#0c498c">百度一下
								</span>
							</label>
						</li>
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-sogou" value="https://www.sogou.com/web?query=" data-placeholder="上网从搜狗开始">
							<label for="type-sogou" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-sougou"></use>
								</svg>
								<span style="color:#696a6d">搜狗搜索
								</span>
							</label>
						</li>
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q=" data-placeholder="微软必应搜索">
							<label for="type-bing" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-bing"></use>
								</svg>
								<span style="color:#696a6d">Bing必应
								</span>
							</label>
						</li>
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-zhihu" value="https://www.zhihu.com/search?q=" data-placeholder="有问题，上知乎">
							<label for="type-zhihu" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-zhihu"></use>
								</svg>
								<span style="color:#0084fe">知乎搜索
								</span>
							</label>
						</li>
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-bilibili" value="https://search.bilibili.com/all?keyword=" data-placeholder="(゜-゜)つロ 干杯~">
							<label for="type-bilibili" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-bili"></use>
								</svg>
								<span style="color:#00aeec">哔哩哔哩
								</span>
							</label>
						</li>
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-weibo" value="https://s.weibo.com/weibo/" data-placeholder="随时随地发现新鲜事">
							<label for="type-weibo" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-weibo"></use>
								</svg>
								<span style="color:#ff5722">微博搜索
								</span>
							</label>
						</li>
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-google" value="https://www.google.com.hk/search?hl=zh-CN&q=" data-placeholder="值得信任的搜索引擎">
							<label for="type-google" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-google00"></use>
								</svg>
								<span style="color:#3B83FA">谷歌搜索
								</span>
							</label>
						</li>
						<li>
							<input hidden="" checked="" type="radio" name="type" id="type-fanyi" value="https://translate.google.cn/?hl=zh-CN&sl=auto&tl=zh-CN&text=" data-placeholder="输入翻译内容（自动检测语言）">
							<label for="type-fanyi" style="font-weight:600">
								<svg class="icon" aria-hidden="true">
									<use xlink:href="#icon-fanyi"></use>
								</svg>
								<span style="color:#0084fe">在线翻译
								</span>
							</label>
						</li>
					</ul>
				</div>
			</div>
			<form action="https://www.baidu.com/s?wd=" method="get" target="_blank" id="super-search-fm">
				<input type="text" id="search-text" placeholder="百度一下，你就知道" style="outline:0" autocomplete="off">
				<button class="submit" type="submit">
					<svg style="width: 22px; height: 22px; margin: 0 20px 0 20px; color: #fff;" class="icon" aria-hidden="true">
						<use xlink:href="#icon-sousuo"></use>
					</svg>
					<span>
				</button>
				<ul id="word" style="display: none;"></ul>
			</form>
			<div class="set-check hidden-xs">
				<input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off">
			</div>
		</div>
		<?php
		foreach ($sort as $key => $value) {
		?>
			<ul class="mylist row">
				<li id="group_<?= $value->id ?>" class="title">
					<?= $value->image([
						'onerror' => "this.src='" . $this->themeUrl('assets/img/default-icon.png') . "'",
						'class' => 'icon'
					]) ?>
					<sapn><?= $value->name ?></sapn>
				</li>
				<?php
				$link = $this->getLink($value->id);
				foreach ($link as $key => $value) {
				?>
					<li class="col-3 col-sm-3 col-md-3 col-lg-1">
						<a rel="nofollow" href="<?= $value->link ?>" target="_blank">
							<?= $value->image(['onerror' => "this.src='" . $this->themeUrl('assets/img/icon_link.png') . "'"]) ?>
							<span><?= $value->name ?></span>
						</a>
					</li>
				<?php
				}
				?>
			</ul>
		<?php
		}
		(function () use ($friend) {
			if (empty($friend)) {
				return;
			}
		?>
			<ul class="mylist row">
				<li id="group_friend" class="title">
					<svg class="icon" aria-hidden="true">
						<use xlink:href="#icon-gg00"></use>
					</svg>
					<sapn>友情链接</sapn>
				</li>
				<?php
				foreach ($friend as $key => $value) {
				?>
					<li class="col-3 col-sm-3 col-md-3 col-lg-1">
						<a rel="nofollow" href="http://<?= $value->domain ?>" target="_blank">
							<?= $value->image(['onerror' => "this.src='" . $this->themeUrl('assets/img/icon_link.png') . "'"]) ?>
							<span><?= $value->title ?></span>
						</a>
					</li>
				<?php
				}
				?>
			</ul>
		<?php
		})()
		?>
		<script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.5.3/js/bootstrap.min.js" type="application/javascript"></script>
		<script src="<?= $this->themeUrl('assets/js/mian.js') ?>"></script>
		<script src="<?= $this->themeUrl('assets/js/svg.js') ?>"></script>
		<div style="display:none;" class="back-to" id="toolBackTop">
			<a title="返回顶部" onclick="window.scrollTo(0,0);return false;" href="#top" class="back-top"></a>
		</div>
		<div class="mt-5 mb-3 footer text-muted text-center">
			<!--备案信息-->
			<img src="<?= $this->themeUrl('assets/img/icp.png') ?>" width="16px" height="16px" />
			<a href="http://beian.miit.gov.cn/" class="icp" target="_blank" _mstmutation="1" _istranslated="1"><?= $this->site->icp ?></a>
			<!--版权信息-->
			<p><?= $this->site->copyright ?></p>
		</div>
		<?= $this->footer() ?>
</body>

</html>