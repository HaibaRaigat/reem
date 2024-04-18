<?php
/* Smarty version 4.3.1, created on 2024-04-18 06:19:07
  from 'app:adminsystemInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66209f3b362800_01351312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec004744317f29c2a6de74168cf42e47da599ebd' => 
    array (
      0 => 'app:adminsystemInfo.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66209f3b362800_01351312 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10050918366209f3b23fe06_08623827', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_10050918366209f3b23fe06_08623827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_10050918366209f3b23fe06_08623827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs3\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInformation"),$_smarty_tpl ) );?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['newVersionAvailable']->value) {?>
		<notification>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.upgradeAvailable.admin",'currentVersion'=>$_smarty_tpl->tpl_vars['currentVersion']->value->getVersionString(false),'latestVersion'=>$_smarty_tpl->tpl_vars['latestVersion']->value),$_smarty_tpl ) );?>

		</notification>
	<?php }?>

	<div class="app__contentPanel">

		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.currentVersion"),$_smarty_tpl ) );?>
: <?php echo $_smarty_tpl->tpl_vars['currentVersion']->value->getVersionString(false);?>
 (<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['currentVersion']->value->getDateInstalled(),$_smarty_tpl->tpl_vars['datetimeFormatLong']->value);?>
)</h2>

		<?php if ($_smarty_tpl->tpl_vars['latestVersionInfo']->value) {?>
				<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.latest"),$_smarty_tpl ) );?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['release'] ));?>
 (<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['latestVersionInfo']->value['date'],$_smarty_tpl->tpl_vars['dateFormatLong']->value);?>
)</p>
			<?php if ($_smarty_tpl->tpl_vars['currentVersion']->value->compare($_smarty_tpl->tpl_vars['latestVersionInfo']->value['version']) < 0) {?>
				<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.updateAvailable"),$_smarty_tpl ) );?>
</strong>: <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['package'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPackage"),$_smarty_tpl ) );?>
</a> | <?php if ($_smarty_tpl->tpl_vars['latestVersionInfo']->value['patch']) {?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['patch'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPatch"),$_smarty_tpl ) );?>
</a><?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.downloadPatch"),$_smarty_tpl ) );
}?> | <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['latestVersionInfo']->value['info'] ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.moreInfo"),$_smarty_tpl ) );?>
</a></p>
			<?php } else { ?>
				<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.upToDate"),$_smarty_tpl ) );?>
</strong></p>
			<?php }?>
		<?php } else { ?>
		<p><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('versionCheck'=>1),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version.checkForUpdates"),$_smarty_tpl ) );?>
</a></p>
		<?php }?>

		<h2 id="versionHistory"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionHistory"),$_smarty_tpl ) );?>
</h2>

		<table class="pkpTable" aria-labelledby="versionHistory">
			<thead>
				<tr>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.version"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionMajor"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionMinor"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionRevision"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.versionBuild"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.dateInstalled"),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['versionHistory']->value, 'version');
$_smarty_tpl->tpl_vars['version']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['version']->value) {
$_smarty_tpl->tpl_vars['version']->do_else = false;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['version']->value->getVersionString(false);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['version']->value->getMajor();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['version']->value->getMinor();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['version']->value->getRevision();?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['version']->value->getBuild();?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['version']->value->getDateInstalled(),$_smarty_tpl->tpl_vars['dateFormatShort']->value);?>
</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>

		<h2 id="serverInformation"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.serverInformation"),$_smarty_tpl ) );?>
</h2>

		<table class="pkpTable" aria-labelledby="serverInformation">
			<thead>
				<tr>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingName"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingValue"),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['serverInfo']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
					<tr>
						<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl ) );?>
</td>
						<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</tbody>
		</table>

		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemConfiguration"),$_smarty_tpl ) );?>
</h2>

		<table class="pkpTable" aria-labelledby="systemConfiguration<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
			<thead>
				<tr>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingName"),$_smarty_tpl ) );?>
</th>
					<th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.systemInfo.settingValue"),$_smarty_tpl ) );?>
</th>
				</tr>
			</thead>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['configData']->value, 'settings', false, 'category');
$_smarty_tpl->tpl_vars['settings']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['settings']->value) {
$_smarty_tpl->tpl_vars['settings']->do_else = false;
?>
				<tbody>
					<tr>
						<td colspan="2" class="app--admin__systemInfoGroup"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</td>
					</tr>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value, 'value', false, 'name');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
								<tr>
									<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value ));?>
</td>
									<?php if ($_smarty_tpl->tpl_vars['name']->value === "password") {?>
										<td>**************</td>
									<?php } else { ?>
										<td><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
</td>
									<?php }?>
								</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>


		<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('op'=>"phpinfo"),$_smarty_tpl ) );?>
" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"admin.phpInfo"),$_smarty_tpl ) );?>
</a>
	</div><!-- .pkp_page_content -->
<?php
}
}
/* {/block "page"} */
}
