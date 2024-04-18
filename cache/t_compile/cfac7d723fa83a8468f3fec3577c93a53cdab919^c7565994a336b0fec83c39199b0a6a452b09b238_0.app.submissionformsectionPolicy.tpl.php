<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:53:21
  from 'app:submissionformsectionPolicy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ee541855315_30478966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7565994a336b0fec83c39199b0a6a452b09b238' => 
    array (
      0 => 'app:submissionformsectionPolicy.tpl',
      1 => 1708706574,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ee541855315_30478966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('class', "section-policy section-id-".((string)$_smarty_tpl->tpl_vars['sectionId']->value)." ".((string)$_smarty_tpl->tpl_vars['class']->value));?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"section.policy",'class'=>$_smarty_tpl->tpl_vars['class']->value));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"section.policy",'class'=>$_smarty_tpl->tpl_vars['class']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('title'=>"section.policy",'class'=>$_smarty_tpl->tpl_vars['class']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
