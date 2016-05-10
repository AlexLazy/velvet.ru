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
                {foreach from=$posts_header item=v}
                    <div class="col-sm-12 col-md-3 col-lg-2">
                        <a class="logo" href="/">
                            <img src="images/velvetlogo.png"alt="logo">
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-10">
                        <ul class="contacts">
                            <li>{$v.header_address}</li>
                            <li>
                                <span class="tel">{$v.header_phone1}</span>
                                <br>
                                <span class="tel">{$v.header_phone2}</span>
                            </li>

                            <li>
                                <a href="https://{$v.header_social}"class="social" target="_blank">
                                    <img src="images/vk2.png" height="20" data-selector="img">
                                    {$v.header_social}
                                </a>
                            </li>
                        </ul>
                        {if $v.header_banner_img}
                            <a href="{$v.header_banner_link}" class="banner col-md-6 hidden-sm hidden-xs">
                                <img src="images/{$v.header_banner_img}" alt="banner">
                            </a>
                        {/if}
                    </div>
                {/foreach}
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
                    {foreach from=$posts_title item=v}
                        {foreach from=$v key=k item=v1}
                            {if $k eq 'post_img' && $v1 ne ''}
                                <!-- SLIDE -->
                                <a href="images/posts/{$v1}" class="col-sm-12 text-center slide">
                                    <img width="849px" src="images/posts/{$v1}" class="screen" alt="screen" data-selector="img">
                                </a>
                            {/if}
                            {if $k eq 'post_text'}
                                <!-- DESCRIPTION -->
                                <p class="description text-center lead">
                                    {$v1}
                                </p>
                            {/if}
                        {/foreach}
                    {/foreach}
                </div>

                <!-- Masters tab -->
                <div role="tabpanel" class="tab-pane fade" id="master">
                    <!-- CONTENT CENTER BLOCK -->
                    <section  class="master">
                        {foreach from=$posts_master item=v}
                            <ul>
                                {foreach from=$v key=k item=v1}
                                    {if $k != 'master_title' && $k != 'date'} 
                                        {if $k ne 'master_id'}
                                            {if $k ne 'master_mail'}
                                                <li>{$v1}</li>
                                            {else}
                                                <li><a href="mailto:{$v1}">{$v1}</a></li>
                                            {/if} 
                                        {/if}
                                    {/if} 
                                {/foreach}
                            </ul>
                        {/foreach}
                    </section>
                </div>

                <!-- Partners tab -->
                <div role="tabpanel" class="tab-pane fade" id="partners">

                    <!-- CONTENT CENTER BLOCK -->
                    <section  class="partners">
                        {foreach from=$posts_partner item=v}
                            <ul>
                                {foreach from=$v key=k item=v1}
                                    {if $k != 'partner_title' && $k != 'date'} 
                                        {if $k ne 'partner_id'}
                                            {if $k ne 'partner_mail'}
                                                <li>{$v1}</li>
                                            {else}
                                                <li><a href="mailto:{$v1}">{$v1}</a></li>
                                            {/if} 
                                        {/if} 
                                    {/if} 
                                {/foreach}
                            </ul>
                        {/foreach}
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