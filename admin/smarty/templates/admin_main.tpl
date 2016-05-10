<div class="col-sm-4">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><i class="fa fa-align-right"></i> Посты</th>
			</tr>
		</thead>
		{foreach from=$posts_title item=val}
			<tr>
				<td><a href="?edit_ads={$val.post_id}" style="display:block">{$val.post_title}</a></td>
			</tr>
		{/foreach}
	</table>
</div>
<div class="col-sm-4">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><i class="fa fa-users"></i> Мастера</th>
			</tr>
		</thead>
		{foreach from=$posts_master item=val}
			<tr>
				<td><a href="?edit_masters={$val.master_id}" style="display:block">{$val.master_title}</a></td>
			</tr>
		{/foreach}
	</table>
</div>
<div class="col-sm-4">
	<table class="table table-hover">
		<thead>
			<tr>
				<th><i class="fa fa-female"></i> Партнеры</th>
			</tr>
		</thead>
		{foreach from=$posts_master item=val}
			<tr>
				<td><a href="?edit_partners={$val.master_id}" style="display:block">{$val.master_title}</a></td>
			</tr>
		{/foreach}
	</table>
</div>