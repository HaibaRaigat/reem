<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:06:32
  from 'app:controllersgridusersuserSelectuserSelectRadioButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661eda485b9970_10265551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ca26484a5c43c9ebfbfa9770c4e8002f6279ad0' => 
    array (
      0 => 'app:controllersgridusersuserSelectuserSelectRadioButton.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661eda485b9970_10265551 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="radio" id="user_<?php echo $_smarty_tpl->tpl_vars['rowId']->value;?>
" name="userId" class="advancedUserSelect" <?php if ($_smarty_tpl->tpl_vars['userId']->value == $_smarty_tpl->tpl_vars['rowId']->value) {?>checked="checked" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['rowId']->value;?>
" />
<?php }
}
