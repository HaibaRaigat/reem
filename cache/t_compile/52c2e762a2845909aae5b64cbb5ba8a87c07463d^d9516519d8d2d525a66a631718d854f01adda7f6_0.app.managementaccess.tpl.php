<?php
/* Smarty version 4.3.1, created on 2024-04-16 21:56:02
  from 'app:managementaccess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed7d2c742d6_17593890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9516519d8d2d525a66a631718d854f01adda7f6' => 
    array (
      0 => 'app:managementaccess.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:management/accessUsers.tpl' => 1,
  ),
),false)) {
function content_661ed7d2c742d6_17593890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1338738324661ed7d2c35869_55541911', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_1338738324661ed7d2c35869_55541911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_1338738324661ed7d2c35869_55541911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.access"),$_smarty_tpl ) );?>

	</h1>

	<tabs :track-history="true">
		<tab id="users" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.users"),$_smarty_tpl ) );?>
">
			<?php $_smarty_tpl->_subTemplateRender("app:management/accessUsers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</tab>
		<tab id="roles" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.roles"),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles",'section'=>"roles",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'rolesUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.settings.roles.UserGroupGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"roleGridContainer",'url'=>$_smarty_tpl->tpl_vars['rolesUrl']->value),$_smarty_tpl ) );?>

		</tab>
		<?php if ($_smarty_tpl->tpl_vars['enableBulkEmails']->value) {?>
		<tab id="notify" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.notifyUsers"),$_smarty_tpl ) );?>
">
			<div v-if="queueId" role="alert">
				<p v-if="completedJobs < totalJobs">
					<spinner class="notifyUsers__progress__spinner"></spinner>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.notifyUsers.sending"),$_smarty_tpl ) );?>

				</p>
				<p v-else>
					<icon icon="check" :inline="true"></icon>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.notifyUsers.sent"),$_smarty_tpl ) );?>

					<button class="-linkButton" @click="reload">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.notifyUsers.sendAnother"),$_smarty_tpl ) );?>

					</button>
				</p>
				<progress-bar :max="totalJobs" :min="0" :value="completedJobs" />
			</div>
			<notify-users-form v-else
				v-bind="components.<?php echo (defined('FORM_NOTIFY_USERS') ? constant('FORM_NOTIFY_USERS') : null);?>
"
				@set="set"
			/>
		</tab>
		<?php }?>
		<tab id="access" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.siteAccessOptions.siteAccessOptions"),$_smarty_tpl ) );?>
">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"users-and-roles",'section'=>"site-access",'class'=>"pkp_help_tab"),$_smarty_tpl ) );?>

			<pkp-form
				v-bind="components.<?php echo (defined('FORM_USER_ACCESS') ? constant('FORM_USER_ACCESS') : null);?>
"
				@set="set"
			/>
		</tab>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::access"),$_smarty_tpl ) );?>

	</tabs>
<?php
}
}
/* {/block "page"} */
}
