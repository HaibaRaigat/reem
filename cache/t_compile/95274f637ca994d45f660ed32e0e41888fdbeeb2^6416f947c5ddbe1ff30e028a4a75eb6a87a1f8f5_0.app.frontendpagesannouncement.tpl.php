<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:51:49
  from 'app:frontendpagesannouncement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ee4e5bbcc65_60075471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6416f947c5ddbe1ff30e028a4a75eb6a87a1f8f5' => 
    array (
      0 => 'app:frontendpagesannouncement.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:frontend/components/header.tpl' => 1,
    'app:frontend/components/breadcrumbs_announcement.tpl' => 1,
    'app:frontend/objects/announcement_full.tpl' => 1,
    'app:frontend/components/footer.tpl' => 1,
  ),
),false)) {
function content_661ee4e5bbcc65_60075471 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("app:frontend/components/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pageTitleTranslated'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ))), 0, false);
?>

<div class="page page_announcement">

	<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/breadcrumbs_announcement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentTitle'=>$_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle()), 0, false);
?>

		<?php $_smarty_tpl->_subTemplateRender("app:frontend/objects/announcement_full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div><!-- .page -->

<?php $_smarty_tpl->_subTemplateRender("app:frontend/components/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
