<?php
if (!defined('ROOT')) exit;

function themeConfig($form, $theme)
{
	$group = $form->input('售后群', 'group', '733120686');
	$form->addInput($group);

	$group = $form->input('QQ号', 'qq', '2136118039');
	$form->addInput($group);
}
