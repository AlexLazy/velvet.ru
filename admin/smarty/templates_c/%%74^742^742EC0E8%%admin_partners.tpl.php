<?php /* Smarty version 2.6.25-dev, created on 2016-05-09 15:59:50
         compiled from admin_partners.tpl */ ?>
<form class="col-md-12 col-sm-12 col-xs-12" method="post" enctype="multipart/form-data">
    <div class="x_panel">
        <div class="x_title">
            <h2>Заголовок<small>для админ-панели</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            <input type="hidden" value='<?php echo $this->_tpl_vars['partner_id']; ?>
' name='partner_id'>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_title']; ?>
" name="partner_title" id="fld_price" style="width:20%" required>
        </div>
        <div class="x_content">
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_first_name']; ?>
" name="partner_first_name" placeholder="Имя" style="width:20%" required><br>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_last_name']; ?>
" name="partner_last_name" placeholder="Фамилия" style="width:20%"><br>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_city']; ?>
" name="partner_city" placeholder="Город" style="width:20%"><br>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_certificate']; ?>
" name="partner_certificate" placeholder="Сертификат" style="width:20%"><br>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_company_name']; ?>
" name="partner_company_name" placeholder="Компания" style="width:20%"><br>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_address']; ?>
" name="partner_address" placeholder="Адрес" style="width:20%"><br>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['partner_phone']; ?>
" name="partner_phone" placeholder="Телефон" style="width:20%"><br>
            <input type="email" class="form-control" value="<?php echo $this->_tpl_vars['partner_mail']; ?>
" name="partner_mail" placeholder="email" style="width:20%"><br>
            
            <input type="submit" value="Опубликовать" id="form_submit" name="submit_partner" class="btn btn-success">
            <?php if (isset ( $_GET['edit_partners'] )): ?>
                <a href="?delete_partners=<?php echo $_GET['edit_partners']; ?>
" class='btn btn-danger'>Удалить</a>
            <?php endif; ?>
        </div>
    </div>
</form>