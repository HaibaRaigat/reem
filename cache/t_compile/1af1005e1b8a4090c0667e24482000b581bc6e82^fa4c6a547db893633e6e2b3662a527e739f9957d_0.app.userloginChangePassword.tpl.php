<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:04:07
  from 'app:userloginChangePassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed9b700de73_74298664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa4c6a547db893633e6e2b3662a527e739f9957d' => 
    array (
      0 => 'app:userloginChangePassword.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:common/formErrors.tpl' => 1,
  ),
),false)) {
function content_661ed9b700de73_74298664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1216563455661ed9b6f0fae4_79622225', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_1216563455661ed9b6f0fae4_79622225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_1216563455661ed9b6f0fae4_79622225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.changePassword"),$_smarty_tpl ) );?>

	</h1>

	<div class="app__contentPanel">
		<?php echo '<script'; ?>
>
			$(function() {
				// Attach the form handler.
				$('#loginChangePassword').pkpHandler('$.pkp.controllers.form.FormHandler');
			});
		<?php echo '</script'; ?>
>

		<?php if (!$_smarty_tpl->tpl_vars['passwordLengthRestrictionLocaleKey']->value) {?>
			<?php $_smarty_tpl->_assignInScope('passwordLengthRestrictionLocaleKey', "user.register.form.passwordLengthRestriction");?>
		<?php }?>

		<form class="pkp_form" id="loginChangePassword" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login",'op'=>"savePassword"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->_subTemplateRender("app:common/formErrors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<p><span class="instruct"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.login.changePasswordInstructions"),$_smarty_tpl ) );?>
</span></p>

			<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"loginFields"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"loginFields"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.login",'for'=>"username"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"user.login",'for'=>"username"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'required'=>true,'id'=>"username",'value'=>$_smarty_tpl->tpl_vars['username']->value,'maxlength'=>"32",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>"user.login",'for'=>"username"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.profile.oldPassword",'for'=>"oldPassword"));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"user.profile.oldPassword",'for'=>"oldPassword"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'required'=>true,'password'=>true,'id'=>"oldPassword",'value'=>$_smarty_tpl->tpl_vars['oldPassword']->value,'maxlength'=>"32",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('label'=>"user.profile.oldPassword",'for'=>"oldPassword"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.profile.newPassword",'for'=>"password"));
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"user.profile.newPassword",'for'=>"password"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'required'=>true,'password'=>true,'id'=>"password",'value'=>$_smarty_tpl->tpl_vars['password']->value,'maxlength'=>"32",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fieldLabel'][0], array( array('translate'=>true,'for'=>'password','key'=>$_smarty_tpl->tpl_vars['passwordLengthRestrictionLocaleKey']->value,'length'=>$_smarty_tpl->tpl_vars['minPasswordLength']->value),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array('label'=>"user.profile.newPassword",'for'=>"password"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>"user.profile.repeatNewPassword",'for'=>"password2"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"user.profile.repeatNewPassword",'for'=>"password2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"text",'required'=>true,'password'=>true,'id'=>"password2",'value'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['password2']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) )),'maxlength'=>"32",'size'=>$_smarty_tpl->tpl_vars['fbvStyles']->value['size']['MEDIUM']),$_smarty_tpl ) );?>

				<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('label'=>"user.profile.repeatNewPassword",'for'=>"password2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

				<p>
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "privacyUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"about",'op'=>"privacy"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.privacyLink",'privacyUrl'=>$_smarty_tpl->tpl_vars['privacyUrl']->value),$_smarty_tpl ) );?>

				</p>

				<p><span class="formRequired"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.requiredField"),$_smarty_tpl ) );?>
</span></p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('hideCancel'=>true),$_smarty_tpl ) );?>

			<?php $_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"loginFields"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		</form>
	</div>
<?php
}
}
/* {/block "page"} */
}
