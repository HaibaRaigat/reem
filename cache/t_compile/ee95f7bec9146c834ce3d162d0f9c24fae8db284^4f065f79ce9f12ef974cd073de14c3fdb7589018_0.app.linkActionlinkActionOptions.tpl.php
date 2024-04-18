<?php
/* Smarty version 4.3.1, created on 2024-04-18 06:19:47
  from 'app:linkActionlinkActionOptions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66209f63513e51_70082720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f065f79ce9f12ef974cd073de14c3fdb7589018' => 
    array (
      0 => 'app:linkActionlinkActionOptions.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66209f63513e51_70082720 (Smarty_Internal_Template $_smarty_tpl) {
?>
{
	<?php if ($_smarty_tpl->tpl_vars['selfActivate']->value) {?>
		selfActivate: <?php echo $_smarty_tpl->tpl_vars['selfActivate']->value;?>
,
	<?php }?>
	staticId: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['staticId']->value ));?>
,
	<?php $_smarty_tpl->_assignInScope('actionRequest', $_smarty_tpl->tpl_vars['action']->value->getActionRequest());?>
	actionRequest: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['actionRequest']->value->getJSLinkActionRequest() ));?>
,
	actionRequestOptions: {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actionRequest']->value->getLocalizedOptions(), 'optionValue', false, 'optionName', 'actionRequestOptions', array (
));
$_smarty_tpl->tpl_vars['optionValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optionName']->value => $_smarty_tpl->tpl_vars['optionValue']->value) {
$_smarty_tpl->tpl_vars['optionValue']->do_else = false;
?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionName']->value ));?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['optionValue']->value ));?>
,
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	}
}
<?php }
}
