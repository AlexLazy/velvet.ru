<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');


require_once (ABSPATH . 'admin/smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->compile_check = true;
$smarty->debugging = false;

$smarty->template_dir = ABSPATH . 'admin/smarty/templates';
$smarty->compile_dir = ABSPATH . 'admin/smarty/templates_c';
$smarty->cache_dir = ABSPATH . 'smarty/cache';
$smarty->config_dir = ABSPATH . 'admin/smarty/configs';

$smarty->display('index.tpl');