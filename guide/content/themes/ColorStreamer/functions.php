<?php

if (!defined('ROOT')) exit;

// function themeConfig(\system\theme\Form $form, $theme)
// {
// 		$title = $form->input('页面标题', 'title', '上网，从这里开始！');
// 		$form->addInput($title);

// 		$content = $form->input('页面简介', 'content', '好记性不如烂笔头');
// 		$form->addInput($content);

// 		$CustomNavs = $form->textarea(
// 			'导航栏链接',
// 			'CustomNavs',
// 			'主页 || http://www.bri6.cn
// 	博客 || http://blog.bri6.cn
// 	百度 || http://baidu.com',
// 			'格式：跳转文字 || 跳转链接（中间使用两个竖杠分隔）<br />
// 			其他：一行一个，一行代表一个超链接 <br />
// 			例如：<br />
// 		   	百度一下 || https://baidu.com <br />
// 		   	腾讯视频 || https://v.qq.com'
// 		);
// 		$form->addInput($CustomNavs);

// 		$form->input('Symbol链接', 'icon_cdn', null, 'text', '阿里巴巴图标库项目的Symbol链接<br>例如：//at.alicdn.com/t/c/font_3258230_y5y93hftel.js');
// }

// function sortConfig(\system\theme\Fields $form)
// {
// 	$form->input('分类图标', 'icon', null, 'text', '说明：请输入阿里巴巴图标库创建的项目的Symbol类型的icon代码<br>例如：icon-gonggao<br>阿里巴巴图标库：<a href="https://www.iconfont.cn" target="_blank">www.iconfont.cn</a>');
// }

function linkConfig(\system\theme\Fields $form)
{
	$form->color('链接颜色', 'color', '#0f88eb');

	$form->input('链接图标', 'icon', null, 'text', '说明：请输入阿里巴巴图标库创建的项目的Symbol类型的icon代码<br>例如：icon-gonggao<br>阿里巴巴图标库：<a href="https://www.iconfont.cn" target="_blank">www.iconfont.cn</a>');
}