<?php
/* Smarty version 4.3.1, created on 2024-04-18 05:16:48
  from 'app:controllersgridgridRowSelectInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_662090a03ddc94_43751931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd405d6cbf63d430a9e4f383c94fd3592a082aa' => 
    array (
      0 => 'app:controllersgridgridRowSelectInput.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662090a03ddc94_43751931 (Smarty_Internal_Template $_smarty_tpl) {
?><input type="checkbox" id="select-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['selectName']->value ));?>
[]" style="height: 15px; width: 15px;" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['elementId']->value ));?>
" <?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>checked="checked"<?php }?> />
<?php }
}
