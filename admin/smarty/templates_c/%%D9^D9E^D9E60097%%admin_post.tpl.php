<?php /* Smarty version 2.6.25-dev, created on 2016-05-06 13:23:16
         compiled from admin_post.tpl */ ?>
<form class="col-md-12 col-sm-12 col-xs-12" method="POST" enctype="multipart/form-data">
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
" name="post_title" id="fld_price" style="width:20%">
        </div>
        <div class="x_content">
            
            <textarea name="post_text" id="editor" style="width:100%;margin-bottom:20px"><?php echo $this->_tpl_vars['post_text']; ?>
</textarea>
            <br />
            <div class="row">
                <div class="col-xs-3">
                    <label for="post_img" class="thumbnail">
                        <?php if (! empty ( $this->_tpl_vars['post_img'] )): ?>
                            <a href="?delete=<?php echo $_GET['edit']; ?>
" class='close'>×</a>
                            <img src='smarty/images/posts/<?php echo $this->_tpl_vars['post_img']; ?>
' alt="...">
                        <?php else: ?>
                            <h3 style="margin:75px">Миниатюра</h3>
                        <?php endif; ?>
                    </label>
                </div>
            </div>
            <input id="post_img" type="file" name="post_img" class="hidden">
            <input type="submit" value="Опубликовать" id="form_submit" name="submit" class="btn btn-success">
            <?php if (isset ( $_GET['edit'] )): ?>
                <a href="?delete=<?php echo $_GET['edit']; ?>
" class='btn btn-danger'>Удалить пост</a>
            <?php endif; ?>
        </div>
    </div>
</form>