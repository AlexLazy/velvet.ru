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
                    {if $v.header_logo_img}
                        <a class="logo" href="/">
                            <img src="images/{$v.header_logo_img}"alt="logo">
                        </a>
                    {/if}
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
                                <br>
                                <a href="https://{$v.header_social_tube}"class="social" target="_blank">
                                    <img src="images/youtube.png" height="20" data-selector="img">
                                    YouTube
                                </a>
                            </li>
                        </ul>
                        {if $v.header_banner_img}
                            <a href="{$v.header_banner_link}" class="banner col-md-6 hidden-sm hidden-xs">
                                <img src="images/{$v.header_banner_img}" alt="banner">
                            </a>
                        {/if}
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
                {/foreach}
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
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <tr>
                                    <th>ФИО</th>
                                    <th>Контакты</th>
                                    <th>№ Сертификата</th>
                                </tr>
                                {foreach from=$list_master key=k item=v1}
                                    <tr>
                                        <td colspan="3"><strong>{$k}</strong></td>
                                    </tr>
                                    {foreach from=$v1 item=v}
                                        <tr>
                                            <td>{$v.fio}</td>
                                            <td>
                                                {if !empty($v.master_phone)}{$v.master_phone}<br>{/if}
                                                {if !empty($v.master_mail)}{$v.master_mail}{/if}
                                                {if !empty($v.partner_phone)}{$v.partner_phone}<br>{/if}
                                                {if !empty($v.partner_mail)}{$v.partner_mail}<br>{/if}
                                                {if !empty($v.partner_company_name)}{$v.partner_company_name}<br>{/if}
                                                {if !empty($v.partner_address)}{$v.partner_address}{/if}
                                            </td>
                                            <td>{$v.master_certificate}{$v.partner_certificate}</td>
                                        </tr>
                                    {/foreach}
                                {/foreach}

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
                                {foreach from=$list_partner key=k item=v1}
                                    <tr>
                                        <td colspan="3"><strong>{$k}</strong></td>
                                    </tr>
                                    {foreach from=$v1 item=v}
                                        <tr>
                                            <td>{$v.partner_fio}</td>
                                            <td>
                                                {if !empty($v.partner_phone)}{$v.partner_phone}<br>{/if}
                                                {if !empty($v.partner_mail)}{$v.partner_mail}<br>{/if}
                                                {if !empty($v.partner_company_name)}{$v.partner_company_name}<br>{/if}
                                                {if !empty($v.partner_address)}{$v.partner_address}{/if}
                                            </td>
                                            <td>{$v.partner_certificate}</td>
                                        </tr>
                                    {/foreach}
                            {/foreach}
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