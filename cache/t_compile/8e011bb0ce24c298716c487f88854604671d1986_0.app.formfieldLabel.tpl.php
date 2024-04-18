<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:04:08
  from 'app:formfieldLabel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed9b8586cc4_45813766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e011bb0ce24c298716c487f88854604671d1986' => 
    array (
      0 => 'app:formfieldLabel.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ed9b8586cc4_45813766 (Smarty_Internal_Template $_smarty_tpl) {
?>
<label<?php if (!$_smarty_tpl->tpl_vars['FBV_suppressId']->value) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
"<?php }
if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
"<?php }?> >
	<?php echo $_smarty_tpl->tpl_vars['FBV_label']->value;
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?>
</label>

<?php }
}
