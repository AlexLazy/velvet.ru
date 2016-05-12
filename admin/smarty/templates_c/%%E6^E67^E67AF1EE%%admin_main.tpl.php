<?php /* Smarty version 2.6.25-dev, created on 2016-05-12 11:28:23
         compiled from admin_main.tpl */ ?>
<div class="col-sm-4">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><i class="fa fa-align-right"></i> Посты</th>
			</tr>
		</thead>
		<?php $_from = $this->_tpl_vars['posts_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
			<tr>
				<td><a href="?edit_ads=<?php echo $this->_tpl_vars['val']['post_id']; ?>
" style="display:block"><?php echo $this->_tpl_vars['val']['post_title']; ?>
</a></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</div>
<div class="col-sm-4">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><i class="fa fa-users"></i> Мастера</th>
			</tr>
		</thead>
		<?php $_from = $this->_tpl_vars['posts_master']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
			<tr>
				<td><a href="?edit_masters=<?php echo $this->_tpl_vars['val']['master_id']; ?>
" style="display:block"><?php echo $this->_tpl_vars['val']['master_title']; ?>
</a></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</div>
<div class="col-sm-4">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><i class="fa fa-female"></i> Партнеры</th>
			</tr>
		</thead>
		<?php $_from = $this->_tpl_vars['posts_partner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['val']):
?>
			<tr>
				<td><a href="?edit_partners=<?php echo $this->_tpl_vars['val']['partner_id']; ?>
" style="display:block"><?php echo $this->_tpl_vars['val']['partner_title']; ?>
</a></td>
			</tr>
		<?php endforeach; endif; unset($_from); ?>
	</table>
</div>