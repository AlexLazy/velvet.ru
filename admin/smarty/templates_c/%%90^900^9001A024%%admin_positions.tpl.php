<?php /* Smarty version 2.6.25-dev, created on 2016-05-10 13:00:43
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
        <script>
            <?php echo '
            function hreff(obj) {
                if(obj.name == \'submit_up\') {
                    var id_elem = obj.nextSibling.nextSibling.nextSibling.nextSibling.value;
                    var id_pos = obj.previousSibling.previousSibling.value;
                    location.href = window.location.search+\'&up=\'+id_elem+\'&id=\'+id_pos;
                } else if(obj.name == \'submit_down\'){
                    var id_elem = obj.nextSibling.nextSibling.value;
                    var id_pos = obj.previousSibling.previousSibling.previousSibling.previousSibling.value;
                    location.href = window.location.search+\'&down=\'+id_elem+\'&id=\'+id_pos;
                }
            }
            '; ?>

        </script>
        <div class="x_content">
            <?php if (isset ( $_GET['posts_position'] )): ?>
                <?php $this->assign('positions', $this->_tpl_vars['posts_position']); ?>
                <?php $this->assign('title', $this->_tpl_vars['posts_title']); ?>
            <?php elseif (isset ( $_GET['masters_position'] )): ?>
                <?php $this->assign('positions', $this->_tpl_vars['masters_position']); ?>
                <?php $this->assign('title', $this->_tpl_vars['posts_master']); ?>
            <?php elseif (isset ( $_GET['partners_position'] )): ?>
                <?php $this->assign('positions', $this->_tpl_vars['partners_position']); ?>
                <?php $this->assign('title', $this->_tpl_vars['posts_partner']); ?>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>id элемента</th>
                        <th>Заголовок</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_from = $this->_tpl_vars['positions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v1']):
?>
                        <tr>
                            <?php $_from = $this->_tpl_vars['v1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                <td><?php echo $this->_tpl_vars['v']; ?>
</td> 
                            <?php endforeach; endif; unset($_from); ?>
                            <td>
                                <?php $_from = $this->_tpl_vars['title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['v']):
?>
                                    <?php if (isset ( $this->_tpl_vars['v']['master_id'] )): ?>
                                        <?php if ($this->_tpl_vars['v']['master_id'] == $this->_tpl_vars['v1']['master_id']): ?>
                                            <?php echo $this->_tpl_vars['v']['master_title']; ?>

                                        <?php endif; ?>
                                    <?php elseif (isset ( $this->_tpl_vars['v']['post_id'] )): ?>
                                        <?php if ($this->_tpl_vars['v']['post_id'] == $this->_tpl_vars['v1']['post_id']): ?>
                                            <?php echo $this->_tpl_vars['v']['post_title']; ?>

                                        <?php endif; ?>
                                    <?php elseif (isset ( $this->_tpl_vars['v']['partner_id'] )): ?>
                                        <?php if ($this->_tpl_vars['v']['partner_id'] == $this->_tpl_vars['v1']['partner_id']): ?>
                                            <?php echo $this->_tpl_vars['v']['partner_title']; ?>

                                        <?php endif; ?>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            </td>
                            <td>
                                <input type="text" value='<?php echo $this->_tpl_vars['v1']['post_id']; ?>
<?php echo $this->_tpl_vars['v1']['master_id']; ?>
<?php echo $this->_tpl_vars['v1']['partner_id']; ?>
' hidden>
                                <button type="button" class="btn btn-default btn-sm" name='submit_up' onclick='hreff(this)'><span class="glyphicon glyphicon-arrow-up"></span> Поднять</button>
                                <button type="button" class="btn btn-default btn-sm" name="submit_down" onclick='hreff(this)'><span class="glyphicon glyphicon-arrow-down"></span> Опустить</button>
                                <input type="text" class="" value="1" size="1" maxlength="2" class='count' name='count'>
                            </td>
                        </tr>      
                    <?php endforeach; endif; unset($_from); ?>
                </tbody>
            </table>

        </div>
    </div>
</form>