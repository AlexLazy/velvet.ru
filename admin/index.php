<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once (ABSPATH . 'date/cfg.php');//настройки
require_once (ABSPATH . 'date/date.php');//переменные

if(isset($_POST['submit']) && is_array($_POST))
{
    // Проверяем загружен ли файл
    if (is_uploaded_file($_FILES["post_img"]["tmp_name"]))
    {
        // Если файл загружен успешно, перемещаем его
        // из временной директории в конечную
        move_uploaded_file($_FILES["post_img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . '/admin/smarty/images/posts/' . $_FILES["post_img"]["name"]);
    }
    $post = new Ads($_POST);
    $post->save();
}


$posts = AdsStore::instance();
$posts->runAdminPost();