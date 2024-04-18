<?php
/* Smarty version 4.3.1, created on 2024-04-16 21:30:37
  from 'app:frontendcomponentsnavigationMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed1dd491c64_52700946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc18a7bbca2985eb7be7cdb004989925d5981ed' => 
    array (
      0 => 'app:frontendcomponentsnavigationMenu.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ed1dd491c64_52700946 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['navigationMenu']->value) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
" class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ulClass']->value ));?>
 pkp_nav_list">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenu']->value->menuTree, 'navigationMenuItemAssignment', false, 'field');
$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value) {
$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->do_else = false;
?>
			<?php if (!$_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
				<?php continue 1;?>
			<?php }?>
			<li class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));?>
">
				<a href="<?php echo $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getUrl();?>
">
					<?php echo $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

				</a>
				<?php if ($_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->navigationMenuItem->getIsChildVisible()) {?>
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigationMenuItemAssignment']->value->children, 'childNavigationMenuItemAssignment', false, 'childField');
$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['childField']->value => $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value) {
$_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getIsDisplayed()) {?>
								<li class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['liClass']->value ));?>
">
									<a href="<?php echo $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getUrl();?>
">
										<?php echo $_smarty_tpl->tpl_vars['childNavigationMenuItemAssignment']->value->navigationMenuItem->getLocalizedTitle();?>

									</a>
								</li>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				<?php }?>
			</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php }
}
}
