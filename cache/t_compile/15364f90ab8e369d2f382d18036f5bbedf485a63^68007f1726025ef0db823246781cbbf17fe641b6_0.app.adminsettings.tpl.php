<?php
/* Smarty version 4.3.1, created on 2024-04-18 05:06:42
  from 'app:adminsettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66208e421847c5_86701710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68007f1726025ef0db823246781cbbf17fe641b6' => 
    array (
      0 => 'app:adminsettings.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66208e421847c5_86701710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74076520666208e420ab8f5_97706151', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_74076520666208e420ab8f5_97706151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_74076520666208e420ab8f5_97706151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.siteSettings"),$_smarty_tpl ) );?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['newVersionAvailable']->value) {?>
		<notification>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.upgradeAvailable.admin",'currentVersion'=>$_smarty_tpl->tpl_vars['currentVersion']->value->getVersionString(false),'latestVersion'=>$_smarty_tpl->tpl_vars['latestVersion']->value),$_smarty_tpl ) );?>

		</notification>
	<?php }?>

	<tabs :track-history="true">
		<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['siteSetup']) {?>
		<tab id="setup" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.siteSetup"),$_smarty_tpl ) );?>
">
			<tabs :is-side-tabs="true" :track-history="true">
				<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['siteConfig']) {?>
				<tab id="settings" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.settings"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo (defined('FORM_SITE_CONFIG') ? constant('FORM_SITE_CONFIG') : null);?>
"
						@set="set"
					/>
				</tab>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['siteInfo']) {?>
				<tab id="info" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.information"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo (defined('FORM_SITE_INFO') ? constant('FORM_SITE_INFO') : null);?>
"
						@set="set"
					/>
				</tab>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['languages']) {?>
				<tab id="languages" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.languages"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'languagesUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.admin.languages.AdminLanguageGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"languageGridContainer",'url'=>$_smarty_tpl->tpl_vars['languagesUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['navigationMenus']) {?>
				<tab id="nav" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.navigationMenus"),$_smarty_tpl ) );?>
">
					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'navigationMenusGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.navigationMenus.NavigationMenusGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"navigationMenuGridContainer",'url'=>$_smarty_tpl->tpl_vars['navigationMenusGridUrl']->value),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'navigationMenuItemsGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.navigationMenus.NavigationMenuItemsGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"navigationMenuItemsGridContainer",'url'=>$_smarty_tpl->tpl_vars['navigationMenuItemsGridUrl']->value),$_smarty_tpl ) );?>

				</tab>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['bulkEmails']) {?>
				<tab id="bulkEmails" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.settings.enableBulkEmails.label"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo (defined('FORM_SITE_BULK_EMAILS') ? constant('FORM_SITE_BULK_EMAILS') : null);?>
"
						@set="set"
					/>
				</tab>
				<?php }?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::admin::setup"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['siteAppearance']) {?>
		<tab id="appearance" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.website.appearance"),$_smarty_tpl ) );?>
">
			<tabs :is-side-tabs="true" :track-history="true">
				<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['siteTheme']) {?>
				<tab id="theme" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.theme"),$_smarty_tpl ) );?>
">
					<theme-form
						v-bind="components.<?php echo (defined('FORM_THEME') ? constant('FORM_THEME') : null);?>
"
						@set="set"
					/>
				</tab>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['siteAppearanceSetup']) {?>
				<tab id="setup" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"navigation.setup"),$_smarty_tpl ) );?>
">
					<pkp-form
						v-bind="components.<?php echo (defined('FORM_SITE_APPEARANCE') ? constant('FORM_SITE_APPEARANCE') : null);?>
"
						@set="set"
					/>
				</tab>
				<?php }?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::admin::appearance"),$_smarty_tpl ) );?>

			</tabs>
		</tab>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['componentAvailability']->value['sitePlugins']) {?>
		<tab id="plugins" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.plugins"),$_smarty_tpl ) );?>
">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'pluginGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.admin.plugins.AdminPluginGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"pluginGridContainer",'url'=>$_smarty_tpl->tpl_vars['pluginGridUrl']->value),$_smarty_tpl ) );?>

		</tab>
		<?php }?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Template::Settings::admin"),$_smarty_tpl ) );?>

	</tabs>
<?php
}
}
/* {/block "page"} */
}
