<?php
/* Smarty version 4.3.1, created on 2024-04-18 05:06:52
  from 'app:controllersgridcolumnGroup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66208e4c4a21b5_05251588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c14ee6bf0b959339d25c095973556ba39c0f109' => 
    array (
      0 => 'app:controllersgridcolumnGroup.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66208e4c4a21b5_05251588 (Smarty_Internal_Template $_smarty_tpl) {
?>
<colgroup>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['columns']->value, 'column');
$_smarty_tpl->tpl_vars['column']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('indent')) {?>
			<?php continue 1;?>
		<?php }?>
		<col class="grid-column column-<?php echo $_smarty_tpl->tpl_vars['column']->value->getId();?>
"
		<?php if ($_smarty_tpl->tpl_vars['column']->value->hasFlag('width')) {?>
			style="width: <?php echo $_smarty_tpl->tpl_vars['column']->value->getFlag('width');?>
%;"
		<?php }?> />
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</colgroup>
<?php }
}
