<?php /* Smarty version Smarty-3.1.7, created on 2012-03-02 22:18:38
         compiled from "application/views/show_wine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3022959344f512b1e4dd6f8-52402680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169de5388a66a3c141cf079288f02ad8490458f7' => 
    array (
      0 => 'application/views/show_wine.tpl',
      1 => 1330719109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3022959344f512b1e4dd6f8-52402680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
    'id' => 0,
    'wine_fields' => 0,
    'wine_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f512b1e5347c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f512b1e5347c')) {function content_4f512b1e5347c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/Applications/MAMP/htdocs/cellar_scaffold/application/libraries/smarty/plugins/function.cycle.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="wine">Listing</a></li>
                        <li><a href="wine/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
						<h3>Details of <?php echo $_smarty_tpl->tpl_vars['table_name']->value;?>
, record #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h3>

						<table class="table" width="50%">
                        	<thead>
                                <th width="20%">Field</th>
                                <th>Value</th>
                        	</thead>
						    <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['id'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['id'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['name'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['name'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['year'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['year'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['grapes'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['grapes'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['country'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['country'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['region'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['region'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['description'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['description'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['picture'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['picture'];?>
</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="wine/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
<?php }} ?>