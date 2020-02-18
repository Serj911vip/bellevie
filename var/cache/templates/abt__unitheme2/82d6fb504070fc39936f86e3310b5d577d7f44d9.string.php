<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:19
         compiled from "82d6fb504070fc39936f86e3310b5d577d7f44d9" */ ?>
<?php /*%%SmartyHeaderCode:9331301625e4bfa5faf1675-47578278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82d6fb504070fc39936f86e3310b5d577d7f44d9' => 
    array (
      0 => '82d6fb504070fc39936f86e3310b5d577d7f44d9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '9331301625e4bfa5faf1675-47578278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5fafc010_19349583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5fafc010_19349583')) {function content_5e4bfa5fafc010_19349583($_smarty_tpl) {?><div class="ut2-pn">
	<div class="ut2-pn__items">
		<a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</a>
		<a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone_2'], ENT_QUOTES, 'UTF-8');?>
">+7(3652)59-80-80</a>
	</div>
	<div class="ut2-pn__link">
<a href="/kontakty">Контакты</a>
<?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {
echo $_smarty_tpl->getSubTemplate ("blocks/static_templates/social.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
	</div>
</div><?php }} ?>
