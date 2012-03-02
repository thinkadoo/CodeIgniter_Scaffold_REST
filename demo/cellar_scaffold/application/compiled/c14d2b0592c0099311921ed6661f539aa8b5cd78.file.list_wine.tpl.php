<?php /* Smarty version Smarty-3.1.7, created on 2012-03-02 22:18:35
         compiled from "application/views/list_wine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1304016834f512b1bbcd0b1-09195130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c14d2b0592c0099311921ed6661f539aa8b5cd78' => 
    array (
      0 => 'application/views/list_wine.tpl',
      1 => 1330719109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1304016834f512b1bbcd0b1-09195130',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
    'wine_data' => 0,
    'wine_fields' => 0,
    'row' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f512b1bc407e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f512b1bc407e')) {function content_4f512b1bc407e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Applications/MAMP/htdocs/cellar_scaffold/application/libraries/smarty/plugins/function.cycle.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="wine">Listing</a></li>
                        <li><a href="wine/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>List of <?php echo $_smarty_tpl->tpl_vars['table_name']->value;?>
</h3>

                        <?php if (!empty($_smarty_tpl->tpl_vars['wine_data']->value)){?>
                        <form action="wine/delete" method="post" id="listing_form">
                            <table class="table">
                            	<thead>
                                    <th width="20"> </th>
                                    			<th><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['name'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['year'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['grapes'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['country'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['region'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['description'];?>
</th>
			<th><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['picture'];?>
</th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wine_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                            <td><input type="checkbox" class="checkbox" name="delete_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" /></td>
                                            				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['year'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['grapes'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['country'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['region'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['picture'];?>
</td>

                                            <td width="80">
                                                <a href="wine/show/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="wine/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('wine/delete/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
                                            </td>
                            		    </tr>
                                	<?php } ?>
                            	</tbody>
                            </table>
                            <div class="actions-bar wat-cf">
                                <div class="actions">
                                    <button class="button" type="submit">
                                        <img src="iscaffold/backend_skins/images/icons/cross.png" alt="Delete"> Delete selected
                                    </button>
                                </div>
                                <div class="pagination">
                                    <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                                </div>
                            </div>
                        </form>
                        <?php }else{ ?>
                            No records found.
                        <?php }?>

                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
<?php }} ?>