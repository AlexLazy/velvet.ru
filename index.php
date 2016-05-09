<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

require_once ('admin/smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->compile_check = true;
$smarty->debugging = false;

$smarty->template_dir = 'admin/smarty/templates';
$smarty->compile_dir = 'admin/smarty/templates_c';
$smarty->cache_dir = 'admin/smarty/cache';
$smarty->config_dir = 'admin/smarty/configs';

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/admin/');
require_once (ABSPATH . 'date/cfg.php');//настройки

$posts = AdsStore::instance();
$posts->getAllAdsFromDB();
$posts->prepareForOut();

$smarty->display('index.tpl');