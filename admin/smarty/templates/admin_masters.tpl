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
            <input type="hidden" value='{$master_id}' name='master_id'>
            <input type="text" class="form-control" value="{$master_title}" name="master_title" id="fld_price" style="width:20%" required>
        </div>
        <div class="x_content">
            <input type="text" class="form-control" value="{$master_fio}" name="master_fio" placeholder="ФИО" style="width:20%"><br>
            <input type="text" class="form-control" value="{$master_city}" name="master_city" placeholder="Город" style="width:20%"><br>
            <input type="text" class="form-control" value="{$master_phone}" name="master_phone" placeholder="Телефон" style="width:20%"><br>
            <input type="text" class="form-control" value="{$master_mail}" name="master_mail" placeholder="Почта" style="width:20%"><br>
            <input type="text" class="form-control" value="{$master_certificate}" name="master_certificate" placeholder="Сертификат" style="width:20%"><br>

            <input type="submit" value="Опубликовать" id="form_submit" name="submit_master" class="btn btn-success">
            {if isset($smarty.get.edit_masters)}
                <a href="?delete_masters={$smarty.get.edit_masters}" class='btn btn-danger'>Удалить</a>
            {/if}
        </div>
    </div>
</form>