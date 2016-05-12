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
            {literal}
            function hreff(obj) {
                if(obj.name == 'submit_up') {
                    var id_elem = obj.nextSibling.nextSibling.nextSibling.nextSibling.value;
                    var id_pos = obj.previousSibling.previousSibling.value;
                    location.href = window.location.search+'&up='+id_elem+'&id='+id_pos;
                } else if(obj.name == 'submit_down'){
                    var id_elem = obj.nextSibling.nextSibling.value;
                    var id_pos = obj.previousSibling.previousSibling.previousSibling.previousSibling.value;
                    location.href = window.location.search+'&down='+id_elem+'&id='+id_pos;
                }
            }
            {/literal}
        </script>
        <div class="x_content">
            {if isset($smarty.get.posts_position)}
                {assign var = 'positions' value = $posts_position}
                {assign var = 'title' value = $posts_title}
            {elseif isset($smarty.get.masters_position)}
                {assign var = 'positions' value = $masters_position}
                {assign var = 'title' value = $posts_master}
            {elseif isset($smarty.get.partners_position)}
                {assign var = 'positions' value = $partners_position}
                {assign var = 'title' value = $posts_partner}
            {/if}
            <table class="table">
                <thead>
                    <tr>
                        <th>id элемента</th>
                        <th>Заголовок</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$positions item=v1}
                        <tr>
                            {foreach from=$v1 item=v}
                                <td>{$v}</td> 
                            {/foreach}
                            <td>
                                {foreach from=$title item=v}
                                    {if isset($v.master_id)}
                                        {if $v.master_id eq $v1.master_id}
                                            {$v.master_title}
                                        {/if}
                                    {elseif isset($v.post_id)}
                                        {if $v.post_id eq $v1.post_id}
                                            {$v.post_title}
                                        {/if}
                                    {elseif isset($v.partner_id)}
                                        {if $v.partner_id eq $v1.partner_id}
                                            {$v.partner_title}
                                        {/if}
                                    {/if}
                                {/foreach}
                            </td>
                            <td>
                                <input type="text" value='{$v1.post_id}{$v1.master_id}{$v1.partner_id}' hidden>
                                <button type="button" class="btn btn-default btn-sm" name='submit_up' onclick='hreff(this)'><span class="glyphicon glyphicon-arrow-up"></span> Поднять</button>
                                <button type="button" class="btn btn-default btn-sm" name="submit_down" onclick='hreff(this)'><span class="glyphicon glyphicon-arrow-down"></span> Опустить</button>
                                <input type="text" class="" value="1" size="1" maxlength="2" class='count' name='count'>
                            </td>
                        </tr>      
                    {/foreach}
                </tbody>
            </table>

        </div>
    </div>
</form>