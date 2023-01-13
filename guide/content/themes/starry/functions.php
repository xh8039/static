<?php
if (!defined('ROOT')) exit;

function themeConfig($form, $theme)
{
	$message = $form->input('消息框内容', 'message', '如果您觉得本页面不错可以收藏一下哦');
	$form->addInput($message);

	$accessButton = $form->input('进入按钮内容', 'accessButton', '马上进入');
	$form->addInput($accessButton);
}
