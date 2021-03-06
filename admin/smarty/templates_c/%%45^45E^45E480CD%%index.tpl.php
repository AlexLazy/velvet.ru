<?php /* Smarty version 2.6.25-dev, created on 2016-05-12 18:49:27
         compiled from index.tpl */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>VelvetRussia</title>
        <!-- Loading Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Loading Elements Styles -->   
        <link href="css/style.css" rel="stylesheet">
        <!-- Loading Magnific-Popup Styles --> 
        <link href="css/magnific-popup.css" rel="stylesheet"> 
        <!-- Favicons -->
        <link rel="icon" href="images/favicons/favicon.ico">
        <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
          <script src="scripts/html5shiv.js"></script>
          <script src="scripts/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--PRELOADER-->
        <div id="preloader">
            <div class="loading-data"></div>
        </div>

        <!-- NAVIGATION LOGIN -->
        <header>
            <nav class="navbar dark-bg" data-selector="nav">
                <div class="container">
                    <?php $_from = $this->_tpl_vars['posts_header']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                    <div class="col-sm-12 col-md-3 col-lg-2">
                    <?php if ($this->_tpl_vars['v']['header_logo_img']): ?>
                        <a class="logo" href="/">
                            <img src="images/<?php echo $this->_tpl_vars['v']['header_logo_img']; ?>
"alt="logo">
                        </a>
                    <?php endif; ?>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <ul class="contacts">
                            <li><?php echo $this->_tpl_vars['v']['header_address']; ?>
</li>
                            <li>
                                <span class="tel"><?php echo $this->_tpl_vars['v']['header_phone1']; ?>
</span>
                                <br>
                                <span class="tel"><?php echo $this->_tpl_vars['v']['header_phone2']; ?>
</span>
                            </li>

                            <li>
                                <a href="https://<?php echo $this->_tpl_vars['v']['header_social']; ?>
"class="social" target="_blank">
                                    <img src="images/vk2.png" height="20" data-selector="img">
                                    <?php echo $this->_tpl_vars['v']['header_social']; ?>

                                </a>
                                <br>
                                <a href="https://<?php echo $this->_tpl_vars['v']['header_social_tube']; ?>
"class="social" target="_blank">
                                    <img src="images/youtube.png" height="20" data-selector="img">
                                    YouTube
                                </a>
                            </li>
                            <li class="lang">
                                <a href="#">
                                    <img src="images/ru.png" alt="ru">
                                </a>
                            </li>
                            <li class="lang">
                                <a href="#">
                                    <img src="images/en.png" alt="en">
                                </a>
                            </li>
                        </ul>
                        <?php if ($this->_tpl_vars['v']['header_banner_img']): ?>
                            <a href="<?php echo $this->_tpl_vars['v']['header_banner_link']; ?>
" class="banner col-md-6 hidden-sm hidden-xs">
                                <img src="images/<?php echo $this->_tpl_vars['v']['header_banner_img']; ?>
" alt="banner">
                            </a>
                        <?php endif; ?>
                        <!-- Mobile mnu -->
                        <div class="pull-down">
                            <button class="round-toggle navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse" data-target=".navMenuCollapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse  navMenuCollapse">
                            <!-- Nav tabs -->
                            <ul class="col-md-5 col-xs-12 nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Главная</a></li>
                                <li role="presentation"><a href="#master" aria-controls="master" role="tab" data-toggle="tab">Мастера</a></li>
                                <li role="presentation"><a href="#partners" aria-controls="partners" role="tab" data-toggle="tab">Представители</a></li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
                </div>
            </nav>
        </header>
        <!-- CONTENT -->
        <!-- Tab panes -->
        <div class="container">

            <div class="tab-content">

                <!-- Home tab -->
                <div role="tabpanel" class="tab-pane fade in active" id="home">
                    <?php $_from = $this->_tpl_vars['posts_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                        <?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v1']):
?>
                            <?php if ($this->_tpl_vars['k'] == 'post_img' && $this->_tpl_vars['v1'] != ''): ?>
                                <!-- SLIDE -->
                                <a href="images/posts/<?php echo $this->_tpl_vars['v1']; ?>
" class="col-sm-12 text-center slide">
                                    <img width="849px" src="images/posts/<?php echo $this->_tpl_vars['v1']; ?>
" class="screen" alt="screen" data-selector="img">
                                </a>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['k'] == 'post_text'): ?>
                                <!-- DESCRIPTION -->
                                <p class="description text-center lead">
                                    <?php echo $this->_tpl_vars['v1']; ?>

                                </p>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    <?php endforeach; endif; unset($_from); ?>
                </div>

                <!-- Masters tab -->
                <div role="tabpanel" class="tab-pane fade" id="master">
                    <!-- CONTENT CENTER BLOCK -->
                    <section  class="master">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <th>ФИО</th>
                                    <th>Контакты</th>
                                    <th>№ Сертификата</th>
                                </tr>
                                <?php $_from = $this->_tpl_vars['list_master']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v1']):
?>
                                    <tr>
                                        <td colspan="3"><strong><?php echo $this->_tpl_vars['k']; ?>
</strong></td>
                                    </tr>
                                    <?php $_from = $this->_tpl_vars['v1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                        <tr>
                                            <td><?php echo $this->_tpl_vars['v']['fio']; ?>
</td>
                                            <td>
                                                <?php if (! empty ( $this->_tpl_vars['v']['master_phone'] )): ?><?php echo $this->_tpl_vars['v']['master_phone']; ?>
<br><?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['master_mail'] )): ?><?php echo $this->_tpl_vars['v']['master_mail']; ?>
<?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_phone'] )): ?><?php echo $this->_tpl_vars['v']['partner_phone']; ?>
<br><?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_mail'] )): ?><?php echo $this->_tpl_vars['v']['partner_mail']; ?>
<br><?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_company_name'] )): ?><?php echo $this->_tpl_vars['v']['partner_company_name']; ?>
<br><?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_address'] )): ?><?php echo $this->_tpl_vars['v']['partner_address']; ?>
<?php endif; ?>
                                            </td>
                                            <td><?php echo $this->_tpl_vars['v']['master_certificate']; ?>
<?php echo $this->_tpl_vars['v']['partner_certificate']; ?>
</td>
                                        </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endforeach; endif; unset($_from); ?>

                            </table>
                        </div>
                    </section>
                </div>

                <!-- Partners tab -->
                <div role="tabpanel" class="tab-pane fade" id="partners">

                    <!-- CONTENT CENTER BLOCK -->
                    <section  class="partners">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <th>ФИО</th>
                                    <th>Контакты</th>
                                    <th>№ Сертификата</th>
                                </tr>
                                <?php $_from = $this->_tpl_vars['list_partner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v1']):
?>
                                    <tr>
                                        <td colspan="3"><strong><?php echo $this->_tpl_vars['k']; ?>
</strong></td>
                                    </tr>
                                    <?php $_from = $this->_tpl_vars['v1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                        <tr>
                                            <td><?php echo $this->_tpl_vars['v']['partner_fio']; ?>
</td>
                                            <td>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_phone'] )): ?><?php echo $this->_tpl_vars['v']['partner_phone']; ?>
<br><?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_mail'] )): ?><?php echo $this->_tpl_vars['v']['partner_mail']; ?>
<br><?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_company_name'] )): ?><?php echo $this->_tpl_vars['v']['partner_company_name']; ?>
<br><?php endif; ?>
                                                <?php if (! empty ( $this->_tpl_vars['v']['partner_address'] )): ?><?php echo $this->_tpl_vars['v']['partner_address']; ?>
<?php endif; ?>
                                            </td>
                                            <td><?php echo $this->_tpl_vars['v']['partner_certificate']; ?>
</td>
                                        </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </table>
                    </div>    
                </section>

            </div>
        </div>
        </div>
        <!-- FOOTER -->
        <!-- JavaScript --> 
        <script src="scripts/jquery-1.11.2.min.js"></script> 
        <script src="scripts/bootstrap.min.js"></script>
        <script src="scripts/jquery.magnific-popup.min.js"></script>
        <script src="scripts/custom.js"></script>
        </body>
</html>