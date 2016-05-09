<?php
session_start();
if (!$_SESSION['check']) {
    header('Location: login.php');
}
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once (ABSPATH . 'date/cfg.php');//настройки

if(isset($_POST['submit_post']) && isset($_FILES))
{
    // Проверяем загружен ли файл
    if (is_uploaded_file($_FILES["post_img"]["tmp_name"]))
    {
        // Если файл загружен успешно, перемещаем его
        // из временной директории в конечную
        move_uploaded_file($_FILES["post_img"]["tmp_name"], '../images/posts/' . $_FILES["post_img"]["name"]);
    }
    $post = new Ads($_POST);
    $post->save();
}

if(isset($_POST['submit_master']))
{
    $post = new Masters($_POST);
    $post->save();
}

if(isset($_POST['submit_partner']))
{
    $post = new Partners($_POST);
    $post->save();
}

$posts = AdsStore::instance();
$posts->runAdminPost();