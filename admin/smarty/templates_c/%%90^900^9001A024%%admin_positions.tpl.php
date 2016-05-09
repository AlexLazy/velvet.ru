<?php /* Smarty version 2.6.25-dev, created on 2016-05-09 16:24:08
         compiled from admin_positions.tpl */ ?>
<form class="col-md-12 col-sm-12 col-xs-12" method="post" enctype="multipart/form-data">
    <div class="x_panel">
        <div class="x_title">
            <h2>Изменить позицию</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php $_from = $this->_tpl_vars['v']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v1']):
?>
                
            <?php endforeach; endif; unset($_from); ?>
            <button type="submit" class="btn btn-default btn-sm" name="submit_up"><span class="glyphicon glyphicon-arrow-up"></span> Поднять</button>
            <button type="submit" class="btn btn-default btn-sm" name="submit_down"><span class="glyphicon glyphicon-arrow-down"></span> Опустить</button>
            <input type="text" class="" value="1" size="1" maxlength="2">
        </div>
    </div>
</form>