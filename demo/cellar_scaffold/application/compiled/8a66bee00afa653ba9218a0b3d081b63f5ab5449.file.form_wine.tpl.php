<?php /* Smarty version Smarty-3.1.7, created on 2012-03-02 22:18:41
         compiled from "application/views/form_wine.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5287582594f512b21112a21-57441973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a66bee00afa653ba9218a0b3d081b63f5ab5449' => 
    array (
      0 => 'application/views/form_wine.tpl',
      1 => 1330719109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5287582594f512b21112a21-57441973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action_mode' => 0,
    'record_id' => 0,
    'errors' => 0,
    'wine_fields' => 0,
    'wine_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f512b21189f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f512b21189f4')) {function content_4f512b21189f4($_smarty_tpl) {?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="wine">Listing</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>active<?php }?>"><a href="wine/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>
                            <h3>Add new record</h3>
                        <?php }else{ ?>
                            <h3>Edit record: #<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
</h3>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)){?>
                            <div class="flash">
                                <div class="message error">
                                    <p><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
                                </div>
                            </div>
                        <?php }?>

                        <form class="form" method='post' action='wine/<?php echo $_smarty_tpl->tpl_vars['action_mode']->value;?>
/<?php if (isset($_smarty_tpl->tpl_vars['record_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
<?php }?>' enctype="multipart/form-data">

                            
    	<div class="group">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['name'];?>
</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['wine_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['name'];?>
<?php }?>" name="name" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['year'];?>
</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['wine_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['year'];?>
<?php }?>" name="year" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['grapes'];?>
</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['wine_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['grapes'];?>
<?php }?>" name="grapes" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['country'];?>
</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['wine_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['country'];?>
<?php }?>" name="country" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['region'];?>
</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['wine_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['region'];?>
<?php }?>" name="region" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['description'];?>
</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['wine_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['description'];?>
<?php }?>" name="description" />
    		</div>
    		
    	</div>
    
    	<div class="group">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['wine_fields']->value['picture'];?>
</label>
    		<div>
    	       	<input class="text_field" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['wine_data']->value)){?><?php echo $_smarty_tpl->tpl_vars['wine_data']->value['picture'];?>
<?php }?>" name="picture" />
    		</div>
    		
    	</div>
    

                            <div class="group navform wat-cf">
                                    <button class="button" type="submit">
                                        <img src="iscaffold/backend_skins/images/icons/tick.png" alt="Save"> Save
                                    </button>
                                    <span class="text_button_padding">or</span>
                                    <a class="text_button_padding link_button" href="javascript:window.history.back();">Cancel</a>
                            </div>
                        </form>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
<?php }} ?>