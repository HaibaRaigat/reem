<?php
/* Smarty version 4.3.1, created on 2024-04-16 21:56:16
  from 'app:formcheckboxGroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed7e02a1da4_62629119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '987729f09976763513798d33db3856312b5e882e' => 
    array (
      0 => 'app:formcheckboxGroup.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ed7e02a1da4_62629119 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {
$_smarty_tpl->_assignInScope('required', "required");
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FBV_from']->value, 'FBV_label', false, 'FBV_value', 'checkbox', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['FBV_label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FBV_value']->value => $_smarty_tpl->tpl_vars['FBV_label']->value) {
$_smarty_tpl->tpl_vars['FBV_label']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_checkbox']->value['index']++;
?>
	<?php if (in_array($_smarty_tpl->tpl_vars['FBV_value']->value,$_smarty_tpl->tpl_vars['FBV_selected']->value)) {?>
		<?php $_smarty_tpl->_assignInScope('FBV_checked', "checked");?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('FBV_checked', '');?>
	<?php }?>

	<li<?php if ($_smarty_tpl->tpl_vars['FBV_layoutInfo']->value) {?> class="<?php echo $_smarty_tpl->tpl_vars['FBV_layoutInfo']->value;?>
"<?php }?>>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "FBV_inputMarkup", null);?>
			<input type="checkbox" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_checkbox']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_checkbox']->value['index'] : null);?>
" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
[]"<?php echo $_smarty_tpl->tpl_vars['FBV_checkboxParams']->value;?>
 class="field checkbox<?php if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?> required<?php }?>"<?php if ($_smarty_tpl->tpl_vars['FBV_checked']->value) {?> checked="checked"<?php }
if ($_smarty_tpl->tpl_vars['FBV_validation']->value) {
}?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_value']->value ));?>
"<?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?> required aria-required="true"<?php }?>/>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php if ($_smarty_tpl->tpl_vars['FBV_label']->value) {?>
			<label for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
-<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_checkbox']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_checkbox']->value['index'] : null);?>
">
				<?php echo $_smarty_tpl->tpl_vars['FBV_inputMarkup']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_label']->value),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_label']->value ));?>

				<?php }?>
			</label>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['FBV_inputMarkup']->value;?>

		<?php }?>
	</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
