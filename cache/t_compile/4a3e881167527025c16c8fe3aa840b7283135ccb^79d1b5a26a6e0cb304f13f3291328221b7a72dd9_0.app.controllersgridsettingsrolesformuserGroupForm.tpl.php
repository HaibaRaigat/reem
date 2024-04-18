<?php
/* Smarty version 4.3.1, created on 2024-04-16 21:56:15
  from 'app:controllersgridsettingsrolesformuserGroupForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed7df71eec5_56641281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79d1b5a26a6e0cb304f13f3291328221b7a72dd9' => 
    array (
      0 => 'app:controllersgridsettingsrolesformuserGroupForm.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_661ed7df71eec5_56641281 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userGroupForm').pkpHandler(
			'$.pkp.controllers.grid.settings.roles.form.UserGroupFormHandler', {
			selfRegistrationRoleIds: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['selfRegistrationRoleIds']->value ));?>
,
			recommendOnlyRoleIds: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['recommendOnlyRoleIds']->value ));?>
,
			roleForbiddenStagesJSON: <?php echo $_smarty_tpl->tpl_vars['roleForbiddenStagesJSON']->value;?>
,
			notChangeMetadataEditPermissionRoles: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['notChangeMetadataEditPermissionRoles']->value ));?>
,
			stagesSelector: '[id^="assignedStages"]'
		});
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="userGroupForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.settings.roles.UserGroupGridHandler",'op'=>"updateUserGroup"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"userGroupFormNotification"), 0, false);
?>

	<?php if ($_smarty_tpl->tpl_vars['userGroupId']->value) {?>
		<input type="hidden" id="userGroupId" name="userGroupId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userGroupId']->value ));?>
" />
	<?php }?>
	<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"userGroupDetails"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"userGroupDetails"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"settings.roles.roleDetails"),$_smarty_tpl ) );?>
</h3>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"settings.roles.from",'for'=>"roleId",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"settings.roles.from",'for'=>"roleId",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"select",'name'=>"roleId",'from'=>$_smarty_tpl->tpl_vars['roleOptions']->value,'id'=>"roleId",'selected'=>$_smarty_tpl->tpl_vars['roleId']->value,'disabled'=>$_smarty_tpl->tpl_vars['disableRoleSelect']->value,'required'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"settings.roles.from",'for'=>"roleId",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"settings.roles.roleName",'for'=>"name",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"settings.roles.roleName",'for'=>"name",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>"true",'name'=>"name",'value'=>$_smarty_tpl->tpl_vars['name']->value,'id'=>"name",'required'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>"settings.roles.roleName",'for'=>"name",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"settings.roles.roleAbbrev",'for'=>"abbrev",'required'=>"true"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"settings.roles.roleAbbrev",'for'=>"abbrev",'required'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'multilingual'=>"true",'name'=>"abbrev",'value'=>$_smarty_tpl->tpl_vars['abbrev']->value,'id'=>"abbrev",'required'=>"true"),$_smarty_tpl ) );?>

		<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('title'=>"settings.roles.roleAbbrev",'for'=>"abbrev",'required'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"userGroupDetails"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<div id="userGroupStageContainer" class="full left">
		<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"userGroupRoles"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"userGroupRoles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"grid.roles.stageAssignment",'for'=>"assignedStages[]",'list'=>"true"));
$_block_repeat=true;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"grid.roles.stageAssignment",'for'=>"assignedStages[]",'list'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkboxgroup",'name'=>"assignedStages",'id'=>"assignedStages",'from'=>$_smarty_tpl->tpl_vars['stages']->value,'selected'=>$_smarty_tpl->tpl_vars['assignedStages']->value),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin6->smartyFBVFormSection(array('title'=>"grid.roles.stageAssignment",'for'=>"assignedStages[]",'list'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<label for="stages[]" class="error pkp_form_hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"settings.roles.stageIdRequired"),$_smarty_tpl ) );?>
</label>
		<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormArea(array('id'=>"userGroupRoles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</div>
	<div id="userGroupOptionsContainer" class="full left">
		<?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"userGroupOptions"));
$_block_repeat=true;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"userGroupOptions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"settings.roles.roleOptions",'list'=>"true"));
$_block_repeat=true;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"settings.roles.roleOptions",'list'=>"true"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"showTitle",'id'=>"showTitle",'checked'=>$_smarty_tpl->tpl_vars['showTitle']->value,'label'=>"settings.roles.showTitles"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"permitSelfRegistration",'id'=>"permitSelfRegistration",'checked'=>$_smarty_tpl->tpl_vars['permitSelfRegistration']->value,'label'=>"settings.roles.permitSelfRegistration"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"recommendOnly",'id'=>"recommendOnly",'checked'=>$_smarty_tpl->tpl_vars['recommendOnly']->value,'label'=>"settings.roles.recommendOnly"),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'name'=>"permitMetadataEdit",'id'=>"permitMetadataEdit",'checked'=>$_smarty_tpl->tpl_vars['permitMetadataEdit']->value,'label'=>"settings.roles.permitMetadataEdit"),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin8->smartyFBVFormSection(array('title'=>"settings.roles.roleOptions",'list'=>"true"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php $_block_repeat=false;
echo $_block_plugin7->smartyFBVFormArea(array('id'=>"userGroupOptions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	</div>

	<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

</form>
<?php }
}
