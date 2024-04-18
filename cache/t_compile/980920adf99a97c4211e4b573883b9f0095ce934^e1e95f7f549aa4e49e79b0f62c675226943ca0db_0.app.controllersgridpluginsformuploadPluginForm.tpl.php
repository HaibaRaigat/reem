<?php
/* Smarty version 4.3.1, created on 2024-04-16 21:34:31
  from 'app:controllersgridpluginsformuploadPluginForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed2c7959f84_39862530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e95f7f549aa4e49e79b0f62c675226943ca0db' => 
    array (
      0 => 'app:controllersgridpluginsformuploadPluginForm.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:controllers/fileUploadContainer.tpl' => 1,
  ),
),false)) {
function content_661ed2c7959f84_39862530 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the upload form handler.
		$('#uploadPluginForm').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				$uploader: $('#plupload'),
				uploaderOptions: {
					uploadUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"uploadPluginFile",'function'=>$_smarty_tpl->tpl_vars['function']->value,'escape'=>false),$_smarty_tpl ) ) ));?>
,
					baseUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseUrl']->value ));?>

				}
			});
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="uploadPluginForm" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'op'=>"saveUploadPlugin",'function'=>$_smarty_tpl->tpl_vars['function']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value,'plugin'=>$_smarty_tpl->tpl_vars['plugin']->value),$_smarty_tpl ) );?>
" method="post">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"uploadPluginNotification"), 0, false);
?>

	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"file"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"file"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php if ($_smarty_tpl->tpl_vars['function']->value == 'install') {?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.uploadDescription"),$_smarty_tpl ) );?>
</p>
		<?php } elseif ($_smarty_tpl->tpl_vars['function']->value == 'upgrade') {?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.plugins.upgradeDescription"),$_smarty_tpl ) );?>
</p>
		<?php }?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"manager.plugins.uploadPluginDir",'required'=>true));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.plugins.uploadPluginDir",'required'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"hidden",'id'=>"temporaryFileId",'value'=>''),$_smarty_tpl ) );?>

						<?php $_smarty_tpl->_subTemplateRender("app:controllers/fileUploadContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"plupload"), 0, false);
?>
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"manager.plugins.uploadPluginDir",'required'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('id'=>"uploadPluginFormSubmit",'submitText'=>"common.save"),$_smarty_tpl ) );?>

</form>
<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
<?php }
}
