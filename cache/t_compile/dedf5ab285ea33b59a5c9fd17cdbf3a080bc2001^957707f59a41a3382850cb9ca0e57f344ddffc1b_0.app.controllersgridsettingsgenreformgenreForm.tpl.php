<?php
/* Smarty version 4.3.1, created on 2024-04-18 18:47:58
  from 'app:controllersgridsettingsgenreformgenreForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66214ebe9705f3_83777380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '957707f59a41a3382850cb9ca0e57f344ddffc1b' => 
    array (
      0 => 'app:controllersgridsettingsgenreformgenreForm.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_66214ebe9705f3_83777380 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#genreForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="genreForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.settings.genre.GenreGridHandler",'op'=>"updateGenre"),$_smarty_tpl ) );?>
">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"genreFormNotification"), 0, false);
?>

<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"genreInfo"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"genreInfo"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.name",'for'=>"name",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.name",'for'=>"name",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>"true",'id'=>"name",'value'=>$_smarty_tpl->tpl_vars['name']->value,'maxlength'=>"80",'required'=>"true"),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"common.name",'for'=>"name",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>"true",'title'=>"manager.setup.genres.label"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>"true",'title'=>"manager.setup.genres.label"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"dependent",'checked'=>$_smarty_tpl->tpl_vars['dependent']->value,'label'=>"manager.setup.genres.dependent"),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"supplementary",'checked'=>$_smarty_tpl->tpl_vars['supplementary']->value,'label'=>"manager.setup.genres.supplementary"),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>"true",'title'=>"manager.setup.genres.label"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.genres.metatadata",'description'=>"manager.setup.genres.metatadata.description",'for'=>"category"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.genres.metatadata",'description'=>"manager.setup.genres.metatadata.description",'for'=>"category"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"category",'from'=>$_smarty_tpl->tpl_vars['submissionFileCategories']->value,'selected'=>$_smarty_tpl->tpl_vars['category']->value,'translate'=>false),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"manager.setup.genres.metatadata",'description'=>"manager.setup.genres.metatadata.description",'for'=>"category"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"manager.setup.genres.key",'description'=>"manager.setup.genres.key.description",'for'=>"key"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"manager.setup.genres.key",'description'=>"manager.setup.genres.key.description",'for'=>"key"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'id'=>"key",'value'=>$_smarty_tpl->tpl_vars['key']->value,'maxlength'=>"30",'readonly'=>$_smarty_tpl->tpl_vars['keyReadOnly']->value,'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['SMALL']),$_smarty_tpl ) );?>

<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"manager.setup.genres.key",'description'=>"manager.setup.genres.key.description",'for'=>"key"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"genreInfo"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['gridId']->value) {?>
	<input type="hidden" name="gridId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridId']->value ));?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['rowId']->value) {?>
	<input type="hidden" name="rowId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rowId']->value ));?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['genreId']->value) {?>
	<input type="hidden" name="genreId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['genreId']->value ));?>
" />
<?php }?>
<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"common.save"),$_smarty_tpl ) );?>

</form>
<?php }
}
