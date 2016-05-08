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
            <input type="text" class="form-control" value="{$post_title}" name="post_title" id="fld_price" style="width:20%" required>
        </div>
        <div class="x_content">
            
            <textarea name="post_text" id="editor" style="width:100%;margin-bottom:20px">{$post_text}</textarea>
            <br />
            <div class="row">
                <div class="col-xs-3">
                    <label for="post_img" class="thumbnail">
                        {if !empty($post_img)}
                            <a href="?delete_ads={$smarty.get.edit_ads}" class='close'>×</a>
                            <img src='../images/posts/{$post_img}' alt="...">
                        {else}
                            <h3 style="margin:75px">Миниатюра</h3>
                        {/if}
                    </label>
                </div>
            </div>
            <input id="post_img" type="file" name="post_img" class="hidden">
            <input type="submit" value="Опубликовать" id="form_submit" name="submit_post" class="btn btn-success">
            {if isset($smarty.get.edit_ads)}
                <a href="?delete_ads={$smarty.get.edit_ads}" class='btn btn-danger'>Удалить пост</a>
            {/if}
        </div>
    </div>
</form>