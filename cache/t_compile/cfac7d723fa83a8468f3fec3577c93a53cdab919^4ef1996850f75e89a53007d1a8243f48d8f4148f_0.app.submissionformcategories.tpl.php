<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:53:22
  from 'app:submissionformcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ee5429ecfc0_52418553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ef1996850f75e89a53007d1a8243f48d8f4148f' => 
    array (
      0 => 'app:submissionformcategories.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ee5429ecfc0_52418553 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['categories']->value && is_array($_smarty_tpl->tpl_vars['categories']->value) && count($_smarty_tpl->tpl_vars['categories']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['readOnly']->value) {?>
		<?php $_block_plugin12 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin12, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"grid.category.categories",'list'=>true));
$_block_repeat=true;
echo $_block_plugin12->smartyFBVFormSection(array('title'=>"grid.category.categories",'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'id');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
				<?php if (in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['assignedCategories']->value)) {?>
					<li><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->getLocalizedTitle() ));?>
</li>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php $_block_repeat=false;
echo $_block_plugin12->smartyFBVFormSection(array('title'=>"grid.category.categories",'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php $_block_plugin13 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin13, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true,'title'=>"grid.category.categories"));
$_block_repeat=true;
echo $_block_plugin13->smartyFBVFormSection(array('list'=>true,'title'=>"grid.category.categories"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category', false, 'id');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"categories[]",'value'=>$_smarty_tpl->tpl_vars['id']->value,'checked'=>in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['assignedCategories']->value),'label'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value )),'translate'=>false),$_smarty_tpl ) );?>

			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php $_block_repeat=false;
echo $_block_plugin13->smartyFBVFormSection(array('list'=>true,'title'=>"grid.category.categories"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }
}
}
}
