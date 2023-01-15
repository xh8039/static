<?php

/**
 * @package 极简导航
 * @description 来自网络收集，由易航整理至引导系统
 * @author 小呆
 * @version 1.0
 * @link https://github.com/xiaodai945/webjike
 * @screenshot https://gitee.com/yh_IT/static-assets/raw/master/guide/content/themes/navigator/screenshot.jpg
 */
if (!defined('ROOT')) exit;
$title = $this->site->title;
$sort_link = $this->getSortLink();
?>
<!DOCTYPE html>
<!--
 * Copyright statement *
 * This site template is provided free of charge by WEBJIKE
 * Official Website: http://webjike.com
 * GitHub：https://github.com/xiaodai945/webjike
-->
<html lang="zh-cn">

<head>
	<title><?= $title ?></title>
	<?php $this->include('modules/head.php') ?>
</head>

<body data-new-gr-c-s-check-loaded="14.980.0">
	<?php $this->include('modules/header.php') ?>
	<div id="content" data-customize="true" data-CustomTheme="true" class="default-bg">
		<!--内容-->
		<div class="main-index">
			<div class="container content-box">
				<!-- 搜索栏 -->
				<section class="sousuo">
					<div class="search">
						<div class="search-box">
							<img class="search-icon" src="<?= $this->themeUrl('assets/images/baidu.jpg') ?>">
							<input id="txt" class="search-input" placeholder="搜索内容~" onfocus="this.select(); this.style.color='#333333'" />
							<button class="search-btn visible-sm visible-md visible-lg" id="search-btn" onclick="do_search()">GO</button>
							<i class="search-clear icon icon-remove-sign" style="display:none"></i>
						</div>
						<div class="search-engine" style="display: none;">
							<div class="search-engine-head">
								<strong class="search-engine-tit">搜索引擎：</strong>
								<div class="search-engine-tool">
									<span id="hot-btn" class=""></span>
								</div>
							</div>
							<ul class="search-engine-list">
								<!-- 通过js添加 -->
							</ul>
						</div>
						<div id="suggest_list" class="suggest">
							<ul class="on_changes">
								<!-- <li onclick="get('sdf')">sdf</li> -->
							</ul>
						</div>

					</div>
				</section>
				<!-- 链接 -->
				<div class="row dh">
					<?php
					foreach ($sort_link as $key => $value) {
					?>
						<div class="col-sm-6 col-md-4 mb-3 dh">
							<div class="row">
								<div class="col-xs-12"><strong class="dhname" id="<?= $key ?>"><?= $value->title ?></strong></div>
								<?php
								foreach ($value->link as $k => $v) {
								?>
									<div class="col-xs-4 mb-2"><a href="<?= $v->url ?>" target="_blank"><img src="<?= empty($v->fields->image) ? '' : $v->fields->image ?>"><?= $v->title ?></a></div>
								<?php
								}
								?>
							</div>
						</div>
					<?php
					}
					?>
					<!-- <div class="col-sm-6 col-md-4 mb-3 dh">
						<div class="row">
							<div class="col-xs-12"><strong class="dhname" id="1">学习 · 存储</strong></div>

							<div class="col-xs-4 mb-2"><a href="https://www.jarvis73.com" target="_blank"><img src="/images/blog.ico">博客</a></div>

							<div class="col-xs-4 mb-2"><a href="http://www.github.com/jarvis73/" target="_blank"><img src="/images/github.ico">Github</a></div>
						</div>
					</div> -->
					<div class="col-sm-6 col-md-4 mb-3 dh">
						<div class="row">
							<div class="col-xs-12"><strong class="dhname" id="other">站点工具</strong></div>
							<div class="col-xs-4 mb-2"><a href="<?= $this->buildUrl('passwdgen') ?>">密码生成器</a></div>
							<div class="col-xs-4 mb-2"><a href="<?= $this->buildUrl('filter') ?>">字符查找器</a></div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 mb-3 dh">
						<div class="row">
							<div class="col-xs-12"><strong class="dhname" id="other">其他</strong></div>
							<div class="col-xs-4 mb-2"><a href="<?= $this->buildUrl('media') ?>">影音资源</a></div>
							<div class="col-xs-4 mb-2"><a href="<?= $this->buildUrl('coding') ?>">编程资源</a></div>
							<div class="col-xs-4 mb-2"><a href="<?= $this->buildUrl('tools') ?>">工具资源</a></div>
							<div class="col-xs-4 mb-2"><a href="http://guide.bri6.cn" target="_blank"><span style="color:red">本站同款系统</span></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $this->include('modules/footer.php') ?>
	<?= $this->load($this->themeUrl('assets/js/main.js')) ?>
</body>

</html>