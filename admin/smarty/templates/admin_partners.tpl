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
            <input type="hidden" value='{$partner_id}' name='partner_id'>
            <input type="text" class="form-control" value="{$partner_title}" name="partner_title" id="fld_price" style="width:20%" required>
        </div>
        <div class="x_content">
            <input type="text" class="form-control" value="{$partner_fio}" name="partner_fio" placeholder="ФИО" style="width:20%" required><br>
            <input type="text" class="form-control" value="{$partner_city}" name="partner_city" placeholder="Город" style="width:20%"><br>
            <input type="text" class="form-control" value="{$partner_certificate}" name="partner_certificate" placeholder="Сертификат" style="width:20%"><br>
            <input type="text" class="form-control" value="{$partner_company_name}" name="partner_company_name" placeholder="Компания" style="width:20%"><br>
            <input type="text" class="form-control" value="{$partner_address}" name="partner_address" placeholder="Адрес" style="width:20%"><br>
            <input type="text" class="form-control" value="{$partner_phone}" name="partner_phone" placeholder="Телефон" style="width:20%"><br>
            <input type="email" class="form-control" value="{$partner_mail}" name="partner_mail" placeholder="email" style="width:20%"><br>
            
            <input type="submit" value="Опубликовать" id="form_submit" name="submit_partner" class="btn btn-success">
            {if isset($smarty.get.edit_partners)}
                <a href="?delete_partners={$smarty.get.edit_partners}" class='btn btn-danger'>Удалить</a>
            {/if}
        </div>
    </div>
</form>