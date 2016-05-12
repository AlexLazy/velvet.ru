<?php /* Smarty version 2.6.25-dev, created on 2016-05-12 16:23:26
         compiled from admin_head.tpl */ ?>
<form class="col-md-12 col-sm-12 col-xs-12" method="post" enctype="multipart/form-data">
    <div class="x_panel">
        <div class="x_title">
            <h2>Шапка сайта</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            <input type="hidden" value='<?php echo $this->_tpl_vars['header_id']; ?>
' name='header_id'>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-xs-2 banner">
                    <h3 class='miniature'>Логотип</h3>
                    <div class='close'><i class="fa fa-close"></i></div>
                    <label for="logo_img" class="thumbnail" style='cursor:pointer'>
                        <?php if (! empty ( $this->_tpl_vars['header_logo_img'] )): ?>
                            <img src='../images/<?php echo $this->_tpl_vars['header_logo_img']; ?>
' alt="img">
                        <?php endif; ?>
                    </label>
                </div>
            </div>
            <small>Адрес</small>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['header_address']; ?>
" name="header_address" placeholder="Адрес" style="width:40%"><br>
            <small>Первый телефон</small>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['header_phone1']; ?>
" name="header_phone1" placeholder="Первый телефон" style="width:20%"><br>
            <small>Второй Телефон</small>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['header_phone2']; ?>
" name="header_phone2" placeholder="Второй Телефон" style="width:20%"><br>
            <small>Ссылка на вк</small>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['header_social']; ?>
" name="header_social" placeholder="Ссылка на вк" style="width:20%"><br>
            <small>Ссылка на YouTube</small>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['header_social_tube']; ?>
" name="header_social" placeholder="Ссылка на YouTube" style="width:20%"><br>
            <div class="row">
                <div class="col-xs-6 banner">
                    <h3 class='miniature'>Баннер</h3>
                    <div class='close'><i class="fa fa-close"></i></div>
                    <label for="banner_img" class="thumbnail" style='cursor:pointer'>
                        <?php if (! empty ( $this->_tpl_vars['header_banner_img'] )): ?>
                            <img src='../images/<?php echo $this->_tpl_vars['header_banner_img']; ?>
' alt="img">
                        <?php endif; ?>
                    </label>
                </div>
            </div>
            <div id="logo_img_file">
                <?php if ($_GET['edit_header']): ?>
                    <input id="fake_post_img" type="hidden" name='header_logo_img' value="<?php echo $this->_tpl_vars['header_logo_img']; ?>
">
                <?php else: ?>
                    <input id="logo_img" type="file" name="header_logo_img" class="hidden">
                <?php endif; ?>
            </div>
            <div id="banner_img_file">
                <input id="fake_post_img" type="hidden" name='header_banner_img' value="<?php echo $this->_tpl_vars['header_banner_img']; ?>
">
            </div>
            <small>Ссылка баннера</small>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['header_banner_link']; ?>
" name="header_banner_link" placeholder="Ссылка баннера" style="width:20%"><br>

            <input type="submit" value="Опубликовать" id="form_submit" name="submit_header" class="btn btn-success">
        </div>
    </div>
</form>