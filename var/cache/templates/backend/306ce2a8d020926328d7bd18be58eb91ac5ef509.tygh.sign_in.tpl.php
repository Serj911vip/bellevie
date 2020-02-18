<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:48:08
         compiled from "C:\OSPanel\domains\bellevie.gift\design\backend\templates\buttons\sign_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15923774695e4bf9281de869-31536876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '306ce2a8d020926328d7bd18be58eb91ac5ef509' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\backend\\templates\\buttons\\sign_in.tpl',
      1 => 1564032886,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15923774695e4bf9281de869-31536876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bf9281e11e9_07801082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bf9281e11e9_07801082')) {function content_5e4bf9281e11e9_07801082($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('sign_in'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->__("sign_in"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_arrow'=>"on",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
