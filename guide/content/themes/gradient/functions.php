<?php
if (!defined('ROOT')) exit;

function themeConfig($form, $theme)
{
	$logo = $form->input('LOGO链接', 'logo', 'http://q4.qlogo.cn/headimg_dl?dst_uin=2136118039&spec=640');
	$form->addInput($logo);

	$fable = $form->input('脚页一言', 'fable', '你在阳光下盛放 而我在阴郁的天空下自得其乐');
	$form->addInput($fable);
}