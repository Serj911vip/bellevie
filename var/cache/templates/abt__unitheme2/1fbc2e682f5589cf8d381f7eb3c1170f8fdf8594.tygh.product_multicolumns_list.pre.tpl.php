<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:17
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\responsive\templates\addons\wishlist\hooks\products\product_multicolumns_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18087132915e4bfa5d00f029-64422817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fbc2e682f5589cf8d381f7eb3c1170f8fdf8594' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\products\\product_multicolumns_list.pre.tpl',
      1 => 1564497258,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18087132915e4bfa5d00f029-64422817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'is_wishlist' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5d01efb5_33320264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5d01efb5_33320264')) {function content_5e4bfa5d01efb5_33320264($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove','remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<div class="ty-twishlist-item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="ty-remove__icon ty-icon-cancel-circle"></i><span class="ty-twishlist-item__txt ty-remove__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a>
</div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/products/product_multicolumns_list.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/products/product_multicolumns_list.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['is_wishlist']->value) {?>
<div class="ty-twishlist-item">
    <a href="<?php echo htmlspecialchars(fn_url("wishlist.delete?cart_id=".((string)$_smarty_tpl->tpl_vars['product']->value['cart_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-twishlist-item__remove ty-remove" title="<?php echo $_smarty_tpl->__("remove");?>
"><i class="ty-remove__icon ty-icon-cancel-circle"></i><span class="ty-twishlist-item__txt ty-remove__txt"><?php echo $_smarty_tpl->__("remove");?>
</span></a>
</div>
<?php }
}?><?php }} ?>
