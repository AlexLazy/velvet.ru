<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 0);

require_once ('admin/smarty/libs/Smarty.class.php');

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/admin/');
require_once (ABSPATH . 'date/cfg.php');//настройки

$posts = AdsStore::instance();
$posts->getAllAdsFromDB();
$posts->prepareForOut();

$smarty->display('index.tpl');