<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:02:19
  from 'app:controllersgridsettingsuserformuserDetailsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed94b1bb488_58649999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8556fb23e7fb57ad227780d4140a6e81b73ea93a' => 
    array (
      0 => 'app:controllersgridsettingsuserformuserDetailsForm.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
    'app:common/userDetails.tpl' => 1,
  ),
),false)) {
function content_661ed94b1bb488_58649999 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#userDetailsForm').pkpHandler('$.pkp.controllers.grid.settings.user.form.UserDetailsFormHandler',
			{
				fetchUsernameSuggestionUrl: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"api.user.UserApiHandler",'op'=>"suggestUsername",'givenName'=>"GIVEN_NAME_PLACEHOLDER",'familyName'=>"FAMILY_NAME_PLACEHOLDER",'escape'=>false),$_smarty_tpl ) ) ));?>
,
				usernameSuggestionTextAlert: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.user.mustProvideName"),$_smarty_tpl ) ) ));?>

			}
		);
	});
<?php echo '</script'; ?>
>

<?php if (!$_smarty_tpl->tpl_vars['userId']->value) {?>
	<?php $_smarty_tpl->_assignInScope('passwordRequired', "true");
}?>
<form class="pkp_form" id="userDetailsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.settings.user.UserGridHandler",'op'=>"updateUser"),$_smarty_tpl ) );?>
">
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

	<input type="hidden" id="sitePrimaryLocale" name="sitePrimaryLocale" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sitePrimaryLocale']->value ));?>
" />
	<div id="userDetailsFormContainer">
		<div id="userDetails" class="full left">
			<?php if ($_smarty_tpl->tpl_vars['userId']->value) {?>
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.user.userDetails"),$_smarty_tpl ) );?>
</h3>
			<?php } else { ?>
				<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"grid.user.step1"),$_smarty_tpl ) );?>
</h3>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['userId']->value) {?>
				<input type="hidden" id="userId" name="userId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userId']->value ));?>
" />
			<?php }?>
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"userDetailsFormNotification"), 0, false);
?>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['userId']->value) {
$_smarty_tpl->_assignInScope('disableSendNotifySection', true);
}?>
		<?php $_smarty_tpl->_subTemplateRender("app:common/userDetails.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('disableAuthSourceSection'=>!$_smarty_tpl->tpl_vars['authSourceOptions']->value,'disableSendNotifySection'=>$_smarty_tpl->tpl_vars['disableSendNotifySection']->value), 0, false);
?>

		<?php if ($_smarty_tpl->tpl_vars['canCurrentUserGossip']->value) {?>
			<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.gossip",'description'=>"user.gossip.description"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"user.gossip",'description'=>"user.gossip.description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'name'=>"gossip",'id'=>"gossip",'rich'=>true,'value'=>$_smarty_tpl->tpl_vars['gossip']->value),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormSection(array('label'=>"user.gossip",'description'=>"user.gossip.description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['userId']->value) {?>
			<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('list'=>true,'title'=>"grid.user.userRoles"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>true,'title'=>"grid.user.userRoles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUserGroups']->value, 'userGroup', false, 'id');
$_smarty_tpl->tpl_vars['userGroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['userGroup']->value) {
$_smarty_tpl->tpl_vars['userGroup']->do_else = false;
?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"checkbox",'id'=>"userGroupIds[]",'value'=>$_smarty_tpl->tpl_vars['id']->value,'checked'=>in_array($_smarty_tpl->tpl_vars['id']->value,$_smarty_tpl->tpl_vars['assignedUserGroups']->value),'label'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userGroup']->value )),'translate'=>false),$_smarty_tpl ) );?>

					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('list'=>true,'title'=>"grid.user.userRoles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
			<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php }?>
		<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array(),$_smarty_tpl ) );?>

	</div>
</form>
<?php }
}
