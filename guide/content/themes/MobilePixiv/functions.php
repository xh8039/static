<?php
if (!defined('ROOT')) exit;

function themeConfig($form, $theme)
{
	$title = $form->input('标题', 'title', '最新网站合集');
	$form->addInput($title);

	$description = $form->input('简介', 'description', '周到的服务才能赢得顾客的信任');
	$form->addInput($description);

	$tip = $form->input('提示', 'tip', '请 Ctrl+D 收藏本页到浏览器收藏夹⇩');
	$form->addInput($tip);
}
