<?php
/* Smarty version 4.3.1, created on 2024-04-16 21:37:11
  from 'app:controllersgridissueGalleysformissueGalleyForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed367255444_45889769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36f0aa1264a50a832773d56fa0bc2ab0e101d9c8' => 
    array (
      0 => 'app:controllersgridissueGalleysformissueGalleyForm.tpl',
      1 => 1708706574,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:controllers/fileUploadContainer.tpl' => 1,
  ),
),false)) {
function content_661ed367255444_45889769 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#issueGalleyForm').pkpHandler(
			'$.pkp.controllers.form.FileUploadFormHandler',
			{
				$uploader: $('#pluploadgalley'),
				uploaderOptions: {
					uploadUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"upload",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value,'escape'=>false),$_smarty_tpl ) ) ));?>
,
					baseUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['baseUrl']->value ));?>
,
					browse_button: 'pkpIssueGalleyUploaderButton'
				}
			}
		);
	});
<?php echo '</script'; ?>
>
<form class="pkp_form" id="issueGalleyForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"update",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value,'issueGalleyId'=>$_smarty_tpl->tpl_vars['issueGalleyId']->value),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"publicationMetadataFormFieldsNotification"), 0, false);
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
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"editor.issues.galley",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"editor.issues.galley",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/fileUploadContainer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pluploadgalley",'browseButton'=>"pkpIssueGalleyUploaderButton"), 0, false);
?>
			<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />
			<?php if ($_smarty_tpl->tpl_vars['issueGalley']->value) {?>
				<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"download",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value,'issueGalleyId'=>$_smarty_tpl->tpl_vars['issueGalleyId']->value),$_smarty_tpl ) );?>
" target="_blank"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['issueGalley']->value->getOriginalFileName() ));?>
</a>
			<?php }?>
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"editor.issues.galley",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.layout.galleyLabel",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"submission.layout.galleyLabel",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['label']->value,'id'=>"label",'required'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"submission.layout.galleyLabel",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php if ($_smarty_tpl->tpl_vars['enablePublisherId']->value) {?>
			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"submission.publisherId"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"submission.publisherId"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'value'=>$_smarty_tpl->tpl_vars['publicGalleyId']->value,'id'=>"publicGalleyId"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"submission.publisherId"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"common.language",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('title'=>"common.language",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'id'=>"galleyLocale",'from'=>$_smarty_tpl->tpl_vars['supportedLocales']->value,'selected'=>(($tmp = $_smarty_tpl->tpl_vars['galleyLocale']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['formLocale']->value ?? null : $tmp),'translate'=>false,'required'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('title'=>"common.language",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"publication.urlPath"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"publication.urlPath"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'label'=>"publication.urlPath.description",'value'=>$_smarty_tpl->tpl_vars['urlPath']->value,'id'=>"urlPath",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM'],'inline'=>true),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"publication.urlPath"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"file"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"common.save"),$_smarty_tpl ) );?>

</form>
<?php }
}
