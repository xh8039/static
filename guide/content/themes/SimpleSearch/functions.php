<?php
if (!defined('ROOT')) exit;

function themeConfig($form, $theme)
{
	$CustomNavs = $form->textarea(
		'导航栏链接',
		'CustomNavs',
		'主页 || http://www.bri6.cn
博客 || http://blog.bri6.cn
百度 || http://baidu.com',
		'格式：跳转文字 || 跳转链接（中间使用两个竖杠分隔）<br />
		其他：一行一个，一行代表一个超链接 <br />
		例如：<br />
	   	百度一下 || https://baidu.com <br />
	   	腾讯视频 || https://v.qq.com'
	);
	$form->addInput($CustomNavs);
}
