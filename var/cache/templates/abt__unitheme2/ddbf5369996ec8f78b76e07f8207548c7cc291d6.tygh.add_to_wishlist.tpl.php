<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:17
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\wishlist\views\wishlist\components\add_to_wishlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4777830905e4bfa5db6e582-62174822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddbf5369996ec8f78b76e07f8207548c7cc291d6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\wishlist\\views\\wishlist\\components\\add_to_wishlist.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4777830905e4bfa5db6e582-62174822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'details_page' => 0,
    'but_name' => 0,
    'but_id' => 0,
    'but_href' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5db871d7_37042500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5db871d7_37042500')) {function content_5e4bfa5db871d7_37042500($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.add_to_wishlist.tooltip','add_to_wishlist','abt__ut2.add_to_wishlist.tooltip','add_to_wishlist'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><a class="ut2-add-to-wish <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?>label <?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?>cm-submit <?php }
if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?>"<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> title="<?php echo $_smarty_tpl->__("abt__ut2.add_to_wishlist.tooltip");?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> rel="nofollow"><i class="ut2-icon-baseline-favorite"></i><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("add_to_wishlist");
}?></a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/views/wishlist/components/add_to_wishlist.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/views/wishlist/components/add_to_wishlist.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><a class="ut2-add-to-wish <?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?>label <?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?>cm-submit <?php }
if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>cm-tooltip<?php }?>"<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> title="<?php echo $_smarty_tpl->__("abt__ut2.add_to_wishlist.tooltip");?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> rel="nofollow"><i class="ut2-icon-baseline-favorite"></i><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("add_to_wishlist");
}?></a><?php }?><?php }} ?>
