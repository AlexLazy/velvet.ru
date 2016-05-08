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
            <input type="hidden" value='{$post_id}' name='post_id'>
            <input type="text" class="form-control" value="{$partner_title}" name="partner_title" id="fld_price" style="width:20%">
        </div>
        <div class="x_content">
            <input type="text" class="form-control" value="{$partner_first_name}" name="partner_first_name" style="width:20%">
            <input type="text" class="form-control" value="{$partner_last_name}" name="partner_last_name" style="width:20%">
            <input type="text" class="form-control" value="{$partner_city}" name="partner_city" style="width:20%">
            <input type="text" class="form-control" value="{$partner_certificate}" name="partner_certificate" style="width:20%">
            <input type="text" class="form-control" value="{$partner_company_name}" name="partner_company_name" style="width:20%">
            <input type="text" class="form-control" value="{$partner_address}" name="partner_address" style="width:20%">
            <input type="text" class="form-control" value="{$partner_phone}" name="partner_phone" style="width:20%">
            <input type="text" class="form-control" value="{$partner_mail}" name="partner_mail" style="width:20%">
            
            <input type="submit" value="Опубликовать" id="form_submit" name="submit" class="btn btn-success">
            {if isset($smarty.get.edit_partners)}
                <a href="?delete_partners={$smarty.get.edit_partners}" class='btn btn-danger'>Удалить пост</a>
            {/if}
        </div>
    </div>
</form>