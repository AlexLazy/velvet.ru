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
            <input type="hidden" value='{$header_id}' name='header_id'>
        </div>
        <div class="x_content">
            <input type="text" class="form-control" value="{$header_address}" name="header_address" placeholder="Адрес" style="width:40%"><br>
            <input type="text" class="form-control" value="{$header_phone1}" name="header_phone1" placeholder="Первый телефон" style="width:20%"><br>
            <input type="text" class="form-control" value="{$header_phone2}" name="header_phone2" placeholder="Второй Телефон" style="width:20%"><br>
            <input type="text" class="form-control" value="{$header_social}" name="header_social" placeholder="Ссылка на вк" style="width:20%"><br>
            <div class="row">
                <div class="col-xs-6">
                    <h3 class='miniature'>Баннер</h3>
                    <div class='close'><i class="fa fa-close"></i></div>
                    <label for="post_img" class="thumbnail" style='cursor:pointer'>
                        {if !empty($header_banner_img)}
                            <img src='../images/{$header_banner_img}' alt="img">
                        {/if}
                    </label>
                </div>
            </div>
            <div id="banner_file">
                {if $smarty.get.edit_header}
                    <input id="fake_post_img" type="hidden" name='header_banner_img' value="{$header_banner_img}">
                {else}
                    <input id="post_img" type="file" name="header_banner_img" class="hidden">
                {/if}
            </div>
            <input type="text" class="form-control" value="{$header_banner_link}" name="header_banner_link" placeholder="Ссылка баннера" style="width:20%"><br>

            <input type="submit" value="Опубликовать" id="form_submit" name="submit_header" class="btn btn-success">
        </div>
    </div>
</form>