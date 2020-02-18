<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:11:35
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\blocks\product_list_templates\default_params\products_multicolumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5139514215e4bfea742b023-39151135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19888dcec6740879afae1fd9ff1c18127de6cde6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\blocks\\product_list_templates\\default_params\\products_multicolumns.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5139514215e4bfea742b023-39151135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'tmpl' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfea7464e61_17638564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfea7464e61_17638564')) {function content_5e4bfea7464e61_17638564($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['show_trunc_name'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_trunc_name'] = clone $_smarty_tpl->tpl_vars['show_trunc_name'];?>
<?php $_smarty_tpl->tpl_vars['show_rating'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_rating'] = clone $_smarty_tpl->tpl_vars['show_rating'];?>
<?php $_smarty_tpl->tpl_vars['show_old_price'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_old_price'] = clone $_smarty_tpl->tpl_vars['show_old_price'];?>
<?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_price'] = clone $_smarty_tpl->tpl_vars['show_price'];?>
<?php $_smarty_tpl->tpl_vars['show_clean_price'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_clean_price'] = clone $_smarty_tpl->tpl_vars['show_clean_price'];?>
<?php $_smarty_tpl->tpl_vars['show_list_discount'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_list_discount'] = clone $_smarty_tpl->tpl_vars['show_list_discount'];?>
<?php $_smarty_tpl->tpl_vars['hide_qty_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_qty_label'] = clone $_smarty_tpl->tpl_vars['hide_qty_label'];?>
<?php $_smarty_tpl->tpl_vars['show_sku_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_sku_label'] = clone $_smarty_tpl->tpl_vars['show_sku_label'];?>
<?php $_smarty_tpl->tpl_vars['show_amount_label'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_amount_label'] = clone $_smarty_tpl->tpl_vars['show_amount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_add_to_cart'] = clone $_smarty_tpl->tpl_vars['show_add_to_cart'];?>
<?php $_smarty_tpl->tpl_vars['show_sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_sku'] = clone $_smarty_tpl->tpl_vars['show_sku'];?>
<?php $_smarty_tpl->tpl_vars['show_qty'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_qty'] = clone $_smarty_tpl->tpl_vars['show_qty'];?>
<?php $_smarty_tpl->tpl_vars['show_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='features', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_features'] = clone $_smarty_tpl->tpl_vars['show_features'];?>
<?php $_smarty_tpl->tpl_vars['show_descr'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='description', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_descr'] = clone $_smarty_tpl->tpl_vars['show_descr'];?>
<?php $_smarty_tpl->tpl_vars['show_brand_logo'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_brand_logo'] = clone $_smarty_tpl->tpl_vars['show_brand_logo'];?>
<?php $_smarty_tpl->tpl_vars['show_list_buttons'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_list_buttons'] = clone $_smarty_tpl->tpl_vars['show_list_buttons'];?>
<?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable("action", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['but_role'] = clone $_smarty_tpl->tpl_vars['but_role'];?>
<?php $_smarty_tpl->tpl_vars['is_category'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['is_category'] = clone $_smarty_tpl->tpl_vars['is_category'];?>
<?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_labels'] = clone $_smarty_tpl->tpl_vars['show_product_labels'];?>
<?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
<?php $_smarty_tpl->tpl_vars['ut2_load_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['product_list']=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['ut2_load_more'] = clone $_smarty_tpl->tpl_vars['ut2_load_more'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_list_templates/default_params/products_multicolumns.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_list_templates/default_params/products_multicolumns.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['show_trunc_name'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_trunc_name'] = clone $_smarty_tpl->tpl_vars['show_trunc_name'];?>
<?php $_smarty_tpl->tpl_vars['show_rating'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_rating'] = clone $_smarty_tpl->tpl_vars['show_rating'];?>
<?php $_smarty_tpl->tpl_vars['show_old_price'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_old_price'] = clone $_smarty_tpl->tpl_vars['show_old_price'];?>
<?php $_smarty_tpl->tpl_vars['show_price'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_price'] = clone $_smarty_tpl->tpl_vars['show_price'];?>
<?php $_smarty_tpl->tpl_vars['show_clean_price'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_clean_price'] = clone $_smarty_tpl->tpl_vars['show_clean_price'];?>
<?php $_smarty_tpl->tpl_vars['show_list_discount'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_you_save'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_list_discount'] = clone $_smarty_tpl->tpl_vars['show_list_discount'];?>
<?php $_smarty_tpl->tpl_vars['hide_qty_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['hide_qty_label'] = clone $_smarty_tpl->tpl_vars['hide_qty_label'];?>
<?php $_smarty_tpl->tpl_vars['show_sku_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_sku_label'] = clone $_smarty_tpl->tpl_vars['show_sku_label'];?>
<?php $_smarty_tpl->tpl_vars['show_amount_label'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_amount_label'] = clone $_smarty_tpl->tpl_vars['show_amount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_add_to_cart'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_buttons'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_add_to_cart'] = clone $_smarty_tpl->tpl_vars['show_add_to_cart'];?>
<?php $_smarty_tpl->tpl_vars['show_sku'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_sku'] = clone $_smarty_tpl->tpl_vars['show_sku'];?>
<?php $_smarty_tpl->tpl_vars['show_qty'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_qty'] = clone $_smarty_tpl->tpl_vars['show_qty'];?>
<?php $_smarty_tpl->tpl_vars['show_features'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='features', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_features'] = clone $_smarty_tpl->tpl_vars['show_features'];?>
<?php $_smarty_tpl->tpl_vars['show_descr'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['grid_item_bottom_content'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='description', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_descr'] = clone $_smarty_tpl->tpl_vars['show_descr'];?>
<?php $_smarty_tpl->tpl_vars['show_brand_logo'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_brand_logo'] = clone $_smarty_tpl->tpl_vars['show_brand_logo'];?>
<?php $_smarty_tpl->tpl_vars['show_list_buttons'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_list_buttons'] = clone $_smarty_tpl->tpl_vars['show_list_buttons'];?>
<?php $_smarty_tpl->tpl_vars['but_role'] = new Smarty_variable("action", null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['but_role'] = clone $_smarty_tpl->tpl_vars['but_role'];?>
<?php $_smarty_tpl->tpl_vars['is_category'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['is_category'] = clone $_smarty_tpl->tpl_vars['is_category'];?>
<?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_labels'] = clone $_smarty_tpl->tpl_vars['show_product_labels'];?>
<?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
<?php $_smarty_tpl->tpl_vars['ut2_load_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['product_list']=='Y', null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['ut2_load_more'] = clone $_smarty_tpl->tpl_vars['ut2_load_more'];
}?><?php }} ?>
