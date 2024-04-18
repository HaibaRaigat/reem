<?php
/* Smarty version 4.3.1, created on 2024-04-16 22:02:20
  from 'app:forminterestsInput.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_661ed94ca9d185_31880595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91fb7bae6e73572049641f71de19b722dbff7118' => 
    array (
      0 => 'app:forminterestsInput.tpl',
      1 => 1708706645,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661ed94ca9d185_31880595 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(document).ready(function(){
		$("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
").find(".interests").tagit({
			fieldName: 'interests[]',
			allowSpaces: true,
			autocomplete: {
				source: function(request, response) {
					$.ajax({
						url: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>'user','op'=>'getInterests','escape'=>false),$_smarty_tpl ) ) ));?>
,
						data: {'term': request.term},
						dataType: 'json',
						success: function(jsonData) {
							if (jsonData.status == true) {
								response(jsonData.content);
							}
						}
					});
				}
			}
		});
	});
<?php echo '</script'; ?>
>

<div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['FBV_id']->value ));?>
">
	<!-- The container which will be processed by tag-it.js as the interests widget -->
	<ul class="interests">
		<?php if ($_smarty_tpl->tpl_vars['FBV_interests']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FBV_interests']->value, 'interest');
$_smarty_tpl->tpl_vars['interest']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['interest']->value) {
$_smarty_tpl->tpl_vars['interest']->do_else = false;
?><li class="hidden"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['interest']->value ));?>
</li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['FBV_label_content']->value) {?><span><?php echo $_smarty_tpl->tpl_vars['FBV_label_content']->value;?>
</span><?php }?>
</div>
<?php }
}
