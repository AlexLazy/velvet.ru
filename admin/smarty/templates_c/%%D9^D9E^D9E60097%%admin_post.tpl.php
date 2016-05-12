<?php /* Smarty version 2.6.25-dev, created on 2016-05-12 11:42:05
         compiled from admin_post.tpl */ ?>
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
            <input type="hidden" value='<?php echo $this->_tpl_vars['post_id']; ?>
' name='post_id'>
            <input type="text" class="form-control" value="<?php echo $this->_tpl_vars['post_title']; ?>
" name="post_title" id="fld_price" style="width:20%" required>
        </div>
        <div class="x_content">
            <textarea name="post_text" id="editor" style="width:100%;margin-bottom:20px"><?php echo $this->_tpl_vars['post_text']; ?>
</textarea>
            <br />
            <div class="row">
                <div class="col-xs-3 banner">
                    <h3 class='miniature'>Миниатюра</h3>
                    <div class='close'><i class="fa fa-close"></i></div>
                    <label for="post_img" class="thumbnail" style='cursor:pointer'>
                        <?php if (! empty ( $this->_tpl_vars['post_img'] )): ?>
                            <img src='../images/posts/<?php echo $this->_tpl_vars['post_img']; ?>
' alt="img">
                        <?php endif; ?>
                    </label>
                </div>
            </div>
            <div id="post_img_file">
                <input id="fake_post_img" type="hidden" name='post_img' value="<?php echo $this->_tpl_vars['post_img']; ?>
">
            </div>
            <input type="submit" value="Опубликовать" id="form_submit" name="submit_post" class="btn btn-success">
            <?php if (isset ( $_GET['edit_ads'] )): ?>
                <a href="?delete_ads=<?php echo $_GET['edit_ads']; ?>
" class='btn btn-danger'>Удалить</a>
            <?php endif; ?>
        </div>
    </div>
</form>