<?php /* Smarty version 2.6.25-dev, created on 2016-05-10 15:46:44
         compiled from admin_header.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Velvet</title>

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="smarty/css/custom.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="../index.php" class="site_title" target='_blank'><i class="fa fa-paw"></i> <span>На главную</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="../images/velvetlogo.png" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Добро пожаловать,</span>
                                <h2>Admin</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>Меню</h3>
                                <ul class="nav side-menu">
                                    <li><a><i class="fa fa-minus"></i> Шапка <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                             <li><a href="?edit_header=true">Редактировать</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-align-right"></i> Посты <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="?new_post">Добавить новый</a></li>
                                            <li><a href="?posts_position">Изменить позицию</a></li>
                                            <?php $_from = $this->_tpl_vars['posts_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
                                                <li><a href="?edit_ads=<?php echo $this->_tpl_vars['val']['post_id']; ?>
"><?php echo $this->_tpl_vars['val']['post_title']; ?>
</a></li>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-users"></i> Мастера <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="?new_master">Добавить новый</a></li>
                                            <li><a href="?masters_position">Изменить позицию</a></li>
                                            <?php $_from = $this->_tpl_vars['posts_master']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
                                                <li><a href="?edit_masters=<?php echo $this->_tpl_vars['val']['master_id']; ?>
"><?php echo $this->_tpl_vars['val']['master_title']; ?>
</a></li>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </ul>
                                    </li>

                                    <li><a><i class="fa fa-female"></i> Партнеры <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="?new_partner">Добавить новый</a></li>
                                            <li><a href="?partners_position">Изменить позицию</a></li>
                                            <?php $_from = $this->_tpl_vars['posts_partner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['val']):
?>
                                                <li><a href="?edit_partners=<?php echo $this->_tpl_vars['val']['partner_id']; ?>
"><?php echo $this->_tpl_vars['val']['partner_title']; ?>
</a></li>
                                            <?php endforeach; endif; unset($_from); ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        Admin
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Выход</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main" style="min-height:100vh">
                    <div class="">