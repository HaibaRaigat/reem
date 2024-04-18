<?php
/* Smarty version 4.3.1, created on 2024-04-16 21:34:32
  from 'app:controllersfileUploadContainer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed2c81c3f34_67227546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aee990dfb9f3937cb32b880302cb8220e313cd5d' => 
    array (
      0 => 'app:controllersfileUploadContainer.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotificationContent.tpl' => 1,
  ),
),false)) {
function content_661ed2c81c3f34_67227546 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['stringDragFile']->value) {?>
	<?php $_smarty_tpl->_assignInScope('stringDragFile', "common.upload.dragFile");
}
if (!$_smarty_tpl->tpl_vars['stringAddFile']->value) {?>
	<?php $_smarty_tpl->_assignInScope('stringAddFile', "common.upload.addFile");
}
if (!$_smarty_tpl->tpl_vars['stringChangeFile']->value) {?>
	<?php $_smarty_tpl->_assignInScope('stringChangeFile', "common.upload.changeFile");
}
if (!$_smarty_tpl->tpl_vars['browseButton']->value) {?>
	<?php $_smarty_tpl->_assignInScope('browseButton', "pkpUploaderButton");
}?>


<div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pkp_controller_fileUpload loading">
	<div class="pkp_uploader_loading">
				<div class="pkp_notification">
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotificationContent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>$_smarty_tpl->tpl_vars['id']->value,'notificationStyleClass'=>"notifyWarning",'notificationContents'=>$_smarty_tpl->tpl_vars['warningMessage']->value,'warningTitle'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "common.warning" )),'warningMessage'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'translate' ][ 0 ], array( "common.fileUploaderError" ))), 0, false);
?>
		</div>
	</div>

		<div id="pkpUploaderDropZone" class="pkp_uploader_drop_zone">

		<div class="pkp_uploader_drop_zone_label">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stringDragFile']->value),$_smarty_tpl ) );?>

		</div>

		<div class="pkp_uploader_details">
			<span class="pkpUploaderProgress">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.percentage",'percentage'=>'<span class="percentage">0</span>'),$_smarty_tpl ) );?>

			</span>			<div class="pkp_uploader_progress_bar_wrapper">
				<span class="pkpUploaderProgressBar"></span>			</div>
			<span class="pkpUploaderFilename"></span>		</div>

				<div class="pkpUploaderError"></div>

				<button id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['browseButton']->value ));?>
" class="pkp_uploader_button pkp_button" tabindex="-1">
			<span class="pkp_uploader_button_add">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stringAddFile']->value),$_smarty_tpl ) );?>

			</span>
			<span class="pkp_uploader_button_change">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['stringChangeFile']->value),$_smarty_tpl ) );?>

			</span>
		</button>
	</div>
</div>
<?php }
}
