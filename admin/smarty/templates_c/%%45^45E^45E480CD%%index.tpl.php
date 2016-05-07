<?php /* Smarty version 2.6.25-dev, created on 2016-05-07 23:28:26
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
                    <div class="col-sm-12 col-md-3 col-lg-2">
                        <a class="logo" href="/">
                            <img src="images/velvetlogo.png"alt="logo">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <ul class="contacts">
                            <li>Россия, г. Новосибирск, ул. Галущака, 2</li>
                            <li>
                                <span class="tel">+7 (383) 29-990-29</span>
                                <br>
                                <span class="tel">+7 (983) 313-06-46</span>
                            </li>

                            <li>
                                <a href="https://vk.com/velvetrussia"class="social" target="_blank">
                                    <img src="images/vk2.png" height="20" data-selector="img">
                                    vk.com/velvetrussia
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="banner col-md-6 hidden-sm hidden-xs">
                            <img src="images/banner.jpg" alt="banner">
                        </a>
                    </div>
                </div>
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
                        <li role="presentation"><a href="#partners" aria-controls="partners" role="tab" data-toggle="tab">Партнеры</a></li>
                    </ul>

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
                        <?php $_from = $this->_tpl_vars['posts_master']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                            <ul>
                            <?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v1']):
?>
                                <?php if ($this->_tpl_vars['k'] != 'master_id'): ?>
                                    <li><?php echo $this->_tpl_vars['v1']; ?>
</li>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endforeach; endif; unset($_from); ?>
                        <ul>
                            <li>Андреев Александр Александрович</li>
                            <li>Казань</li>
                            <li>7 (831) 429-13-13</li>
                            <li>ESP/FOO/I3/02/000025</li>
                        </ul>
                        <ul>
                            <li>Аседова Елизавета Виталиевна</li>
                            <li>Звенигород</li>
                            <li>7 (831) 429-13-13</li>
                            <li>ESP/FOO/I3/02/000025</li>
                        </ul>
                        <ul>
                            <li>Валинуров Денис Юрьевич</li>
                            <li>Звенигород</li>
                            <li>7 (831) 429-13-13</li>
                            <li>ESP/FOO/I3/02/000025</li>
                        </ul>
                        <ul>
                            <li>Гаранян Ованес Суренович</li>
                            <li>Екатеринбург</li>
                            <li>7 (831) 429-13-13</li>
                            <li>ESP/FOO/I3/02/000025</li>
                        </ul>
                    </section>
                </div>

                <!-- Partners tab -->
                <div role="tabpanel" class="tab-pane fade" id="partners">

                    <!-- CONTENT CENTER BLOCK -->
                    <section  class="partners">
                        <?php $_from = $this->_tpl_vars['posts_partner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                            <ul>
                            <?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v1']):
?>
                                <?php if ($this->_tpl_vars['k'] != 'partner_id'): ?>
                                    <li><?php echo $this->_tpl_vars['v1']; ?>
</li>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                            </ul>
                        <?php endforeach; endif; unset($_from); ?>
                        <ul>
                            <li>Горинова</li>
                            <li>Юлия</li>
                            <li>Екатеринбург</li>
                            <li>ESP/FOO/I3/02/000025</li>
                            <li>Velvet</li>
                            <li>Россия, г. Новосибирск, ул. Галущака, 2</li>
                            <li>+7 (383) 29-990-29</li>
                            <li>example@mail.com</li>
                        </ul>
                        <ul>
                            <li>Ермохин</li>
                            <li>Макар</li>
                            <li>Дмитров</li>
                            <li>ESP/FOO/I3/02/000025</li>
                            <li>+7 (383) 29-990-29</li>
                        </ul>
                        <ul>
                            <li>Иванов</li>
                            <li>Павел</li>
                            <li>Дмитров</li>
                            <li>ESP/FOO/I3/02/000025</li>
                            <li>example@mail.com</li>
                        </ul>
                    </section>

                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <!-- JavaScript --> 
        <script src="scripts/jquery-1.11.2.min.js"></script> 
        <script src="scripts/bootstrap.min.js"></script> 
        <script src="scripts/jquery.smooth-scroll.min.js"></script> 
        <script src="scripts/jquery.magnific-popup.min.js"></script>
        <script src="scripts/custom.js"></script>
    </body>
</html>