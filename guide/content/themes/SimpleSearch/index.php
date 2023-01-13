<?php

/**
 * @package 简单搜索
 * @description 简单搜索，一个简单的导航界面。用惯了各种导航首页，满屏幕尽是各种不厌其烦的广告和资讯；尝试自己写个自己的主页
 * @author 5iux
 * @version 1.0
 * @link https://github.com/5iux/5iux.github.io
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
	<?= $this->header() ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" id="font-awesome-css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css?ver=1.1422" type="text/css" media="all">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
	<!-- <script src="https://at.alicdn.com/t/font_1230786_ewprpwrczvj.js"></script> -->
	<script src="<?= $this->themeUrl('sou.js') ?>"></script>
	<link rel='stylesheet' href='<?= $this->themeUrl('style.css') ?>'>
	<style>
		/* #word li {
			background: url(<?= $this->themeUrl('sou.svg') ?>) no-repeat 5px;
			background-size: 20px;
		} */
	</style>
</head>

<body>
	<!--视频头部背景-->
	<div class="banner-video">
		<!--视频来自阿里云首页，有需要请自行更换-->
		<video autoplay loop muted>
			<source src="<?= empty($this->site->background_PC) ? 'https://cdn.jsdelivr.net/gh/5iux/uploads/pic/3840-banner.mp4' : $this->site->background_PC ?>" type="video/mp4">
		</video>
		<!--注释掉视频可换成图片版本-->
		<!-- <img src="https://cn.bing.com//th?id=OHR.HuntsMesa_JA-JP3140979616_1920x1080.jpg&rf=LaDigue_1920x1080.jpg&pid=hp" alt="" /> -->
		<div class="bottom-cover" style="background-image: linear-gradient(rgba(255, 255, 255, 0) 0%, rgb(244 248 251 / 0.6) 50%, rgb(244 248 251) 100%);"></div>
	</div>
	<!--topbar开始-->
	<style>
		.navbar-toggler svg {
			width: 24px;
			height: 24px;
		}

		.navbar-toggler .bi-list-nested {
			display: none;
		}

		.navbar-toggler.collapsed .bi-list-nested {
			display: block;
		}

		.navbar-toggler.collapsed .bi-x {
			display: none;
		}

		.navbar-toggler .bi-x {
			display: block;
		}
	</style>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="position: absolute; z-index: 10000;">
		<a class="navbar-brand" href="/"><img src="<?= $this->site->logo ?>" height="35" alt=""></a>
		<button class="navbar-toggler collapsed" style="border: none; outline: none;" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="bi bi-list-nested" fill="currentColor" id="list-nested">
				<path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 015 11h10a.5.5 0 010 1H5a.5.5 0 01-.5-.5zm-2-4A.5.5 0 013 7h10a.5.5 0 010 1H3a.5.5 0 01-.5-.5zm-2-4A.5.5 0 011 3h10a.5.5 0 010 1H1a.5.5 0 01-.5-.5z"></path>
			</svg>
			<span>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" id="x">
					<path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"></path>
					<path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"></path>
				</svg>
			</span>
		</button>
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
							<a class="nav-link" href="{$value['url']}" target="_blant">{$value['title']}</a>
						</li>
						HTML;
						echo $html;
					}
				})()
				?>
			</ul>
			<style>
				#he-plugin-simple {
					z-index: 1000;
				}
			</style>
			<div id="he-plugin-simple"></div>
			<script>
				WIDGET = {
					CONFIG: {
						"modules": "01234",
						"background": 5,
						"tmpColor": "4A4A4A",
						"tmpSize": 14,
						"cityColor": "4A4A4A",
						"citySize": 14,
						"aqiSize": 14,
						"weatherIconSize": 22,
						"alertIconSize": 16,
						"padding": "8px 8px 8px 8px",
						"shadow": "1",
						"language": "auto",
						"borderRadius": 5,
						"fixed": "false",
						"vertical": "middle",
						"horizontal": "center",
						"key": "acd0fdcab4b9481a98d0f59145420fac"
					}
				}
			</script>
			<script src="https://widget.heweather.net/simple/static/js/he-simple-common.js?v=1.1"></script>
		</div>
	</nav>
	<!--topbar结束-->
	<div class="container" style="margin-top: 100px; position: relative; z-index: 100;">
		<!--搜索开始-->
		<div id="search" class="s-search">
			<div id="search-list" class="hide-type-list">
				<div class="search-group group-a s-current" style="padding-left: 20px">
					<ul class="search-type">
						<li><input checked="" hidden="" type="radio" name="type" id="type-baidu" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下"><label for="type-baidu"><span style="color:#2100E0">百度</span></label></li>
						<li><input hidden="" type="radio" name="type" id="type-google" value="https://www.google.com.hk/search?hl=zh-CN&q=" data-placeholder="谷歌搜索"><label for="type-google"><span style="color:#3B83FA">G</span><span style="color:#F3442C">o</span><span style="color:#FFC300">o</span><span style="color:#4696F8">g</span><span style="color:#2CAB4E">l</span><span style="color:#F54231">e</span></label></li>
						<li><input hidden="" type="radio" name="type" id="type-cupfox" value="https://www.cupfox.com/search?key=" data-placeholder="电影、剧集、综艺、动漫"><label for="type-cupfox"><span style="color:#b1870b">影视</span></label></li>
						<li><input hidden="" type="radio" name="type" id="type-weibo" value="https://s.weibo.com/weibo/" data-placeholder="微博搜索"><label for="type-weibo"><span style="color:#ff5722">微博</span></label></li>
						<li><input hidden="" type="radio" name="type" id="type-quan" value="https://wat.dyartstyle.com/index.php?r=l&hot=1&kw=" data-placeholder="搜索淘宝优惠券"><label for="type-quan"><span style="color:#ff5722">搜券</span></label></li>
					</ul>
				</div>
			</div>
			<form action="https://www.baidu.com/s?wd=" method="get" target="_blank" id="super-search-fm">
				<input type="text" id="search-text" placeholder="百度一下" style="outline:0" autocomplete="off">
				<button class="submit" type="submit">
					<svg style="width: 20px; height: 20px; margin:7px 0; color: #29f;" class="icon" aria-hidden="true">
						<use xlink:href="#icon-sousuo"></use>
					</svg>
					<!-- <span> -->
				</button>
				<ul id="word" style="display: none;"></ul>
			</form>
			<div class="set-check hidden-xs">
				<input type="checkbox" id="set-search-blank" class="bubble-3" autocomplete="off">
			</div>
		</div>
		<!--搜索结束-->
		<?php
		$sort = $this->getSort();
		foreach ($sort as $key => $value) {
		?>
			<ul class="mylist row">
				<li class="title">
					<?= $value->image(['class' => 'icon']) ?>
					<?= $value->name ?>
				</li>
				<?php
				$link = $this->getLink($value->id);
				foreach ($link as $key => $value) {
				?>
					<li class="col-3 col-sm-3 col-md-3 col-lg-1">
						<a rel="nofollow" href="<?= $value->link ?>" target="_blank">
							<?= $value->image() ?>
							<span><?= $value->name ?></span>
						</a>
					</li>
				<?php
				}
				?>
			</ul>
		<?php
		}
		(function () {
			$friend = $this->getFriend();
			if (empty($friend)) return;
		?>
			<ul class="mylist row">
				<li class="title"><svg class="icon" aria-hidden="true">
						<use xlink:href="#icon-chaolianjie"></use>
					</svg>友情链接</li>
				<?php
				foreach ($friend as $key => $value) {
					$html = <<<HTML
					<li class="col-3 col-sm-3 col-md-3 col-lg-1">
						<a rel="nofollow" href="http://{$value->domain}" target="_blank">
						{$value->image()}
						<span>{$value->title}</span>
						</a>
					</li>
					HTML;
					echo $html;
				}
				?>
			</ul>
		<?php
		})();
		?>
	</div>
	<!--版权信息开始-->
	<p class="mt-5 mb-3 text-muted text-center">©2023 by <a href="http://<?= $this->domain ?>"><?= $title ?></a>. All rights reserved.</p>
	<!--版权信息结束-->
	<script>
		eval(function(e, t, a, c, i, n) {
			if (i = function(e) {
					return (e < t ? "" : i(parseInt(e / t))) + (35 < (e %= t) ? String.fromCharCode(e + 29) : e.toString(36))
				}, !"".replace(/^/, String)) {
				for (; a--;) n[i(a)] = c[a] || i(a);
				c = [function(e) {
					return n[e]
				}], i = function() {
					return "\\w+"
				}, a = 1
			}
			for (; a--;) c[a] && (e = e.replace(new RegExp("\\b" + i(a) + "\\b", "g"), c[a]));
			return e
		}('!2(){2 g(){h(),i(),j(),k()}2 h(){d.9=s()}2 i(){z a=4.8(\'A[B="7"][5="\'+p()+\'"]\');a&&(a.9=!0,l(a))}2 j(){v(u())}2 k(){w(t())}2 l(a){P(z b=0;b<e.O;b++)e[b].I.1c("s-M");a.F.F.F.I.V("s-M")}2 m(a,b){E.H.S("L"+a,b)}2 n(a){6 E.H.Y("L"+a)}2 o(a){f=a.3,v(u()),w(a.3.5),m("7",a.3.5),c.K(),l(a.3)}2 p(){z b=n("7");6 b||a[0].5}2 q(a){m("J",a.3.9?1:-1),x(a.3.9)}2 r(a){6 a.11(),""==c.5?(c.K(),!1):(w(t()+c.5),x(s()),s()?E.U(b.G,+T X):13.Z=b.G,10 0)}2 s(){z a=n("J");6 a?1==a:!0}2 t(){6 4.8(\'A[B="7"]:9\').5}2 u(){6 4.8(\'A[B="7"]:9\').W("14-N")}2 v(a){c.1e("N",a)}2 w(a){b.G=a}2 x(a){a?b.3="1a":b.16("3")}z y,a=4.R(\'A[B="7"]\'),b=4.8("#18-C-19"),c=4.8("#C-12"),d=4.8("#17-C-15"),e=4.R(".C-1b"),f=a[0];P(g(),y=0;y<a.O;y++)a[y].D("Q",o);d.D("Q",q),b.D("1d",r)}();', 62, 77, "||function|target|document|value|return|type|querySelector|checked||||||||||||||||||||||||||var|input|name|search|addEventListener|window|parentNode|action|localStorage|classList|newWindow|focus|superSearch|current|placeholder|length|for|change|querySelectorAll|setItem|new|open|add|getAttribute|Date|getItem|href|void|preventDefault|text|location|data|blank|removeAttribute|set|super|fm|_blank|group|remove|submit|setAttribute".split("|"), 0, {}));
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<?= $this->footer() ?>
</body>

</html>