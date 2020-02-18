<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:12
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\blocks\products\products_scroller_advanced.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8337530335e4bfa587638f1-40160794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4667022d6cf4a8a674775509f5e3bb4d13bc1bfe' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\blocks\\products\\products_scroller_advanced.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8337530335e4bfa587638f1-40160794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'settings' => 0,
    'items' => 0,
    'tmpl' => 0,
    'addons' => 0,
    'product' => 0,
    'show_add_to_cart' => 0,
    't1' => 0,
    't2' => 0,
    't3' => 0,
    't4' => 0,
    't5' => 0,
    't6' => 0,
    'pd' => 0,
    'obj_prefix' => 0,
    'obj_id' => 0,
    'form_open' => 0,
    'th' => 0,
    'product_labels' => 0,
    'quick_view' => 0,
    'quick_nav_ids' => 0,
    'hide_wishlist_button' => 0,
    'hide_compare_list_button' => 0,
    'show_brand_logo' => 0,
    'b_feature' => 0,
    'rating' => 0,
    'show_sku' => 0,
    'sku' => 0,
    'item_number' => 0,
    'cur_number' => 0,
    'name' => 0,
    'old_price' => 0,
    'ab_dotd_product_ids' => 0,
    'price' => 0,
    'clean_price' => 0,
    'list_discount' => 0,
    'hide_form' => 0,
    'auth' => 0,
    'show_qty' => 0,
    'qty' => 0,
    'add_to_cart' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa58864305_72028980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa58864305_72028980')) {function content_5e4bfa58864305_72028980($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_hook')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_math')) include 'C:\\OSPanel\\domains\\bellevie.gift\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
if (!is_callable('smarty_modifier_in_array')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.in_array.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["show_name"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_rating"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_list_discount"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_sku"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_qty"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_brand_logo"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_product_amount"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["hide_qty_label"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_amount_label"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_labels'] = clone $_smarty_tpl->tpl_vars['show_product_labels'];?>
<?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
<?php $_smarty_tpl->tpl_vars["show_list_buttons"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("action", null, 0);?>




<?php $_smarty_tpl->tpl_vars["pd"] = new Smarty_variable(32, null, 0);?>


<?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'])+10, null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']=="A"&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
    <?php $_smarty_tpl->tpl_vars["t2"] = new Smarty_variable(20, null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>
    <?php $_smarty_tpl->tpl_vars["t3"] = new Smarty_variable(16, null, 0);?>
<?php }?>


<?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>


<?php $_smarty_tpl->tpl_vars["t5"] = new Smarty_variable(42, null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
    <?php $_smarty_tpl->tpl_vars["t6"] = new Smarty_variable(46, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>

    
    <?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(150, null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars["t5"] = new Smarty_variable(34, null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
        <?php $_smarty_tpl->tpl_vars["t6"] = new Smarty_variable(46, null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_gl_item_height", null, null); ob_start();
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['t1']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t2']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t3']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t4']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t5']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t6']->value)===null||$tmp==='' ? 0 : $tmp)+$_smarty_tpl->tpl_vars['pd']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>




<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ty-icon-left-open-thin"></i></div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ty-icon-right-open-thin"></i></div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list grid-list <?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>no-buttons<?php }?> ut2-scroller-advanced">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_advanced_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__item <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['amount']<=0) {?>out-of-stock<?php }?>" style="<?php echo Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height'];?>
px"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);
$_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__body" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');?>
px"><div class="ut2-gl__image" style="height: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), ENT_QUOTES, 'UTF-8');?>
px"><?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('lazy_load'=>true,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_height'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp),'image_width'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'] : $tmp)), 0);?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['main_icon'];
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
<div class="ut2-gl__buttons"><?php if (!$_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y'&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {
echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {
echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);
}?></div><?php if ($_smarty_tpl->tpl_vars['show_brand_logo']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']>0) {
$_smarty_tpl->tpl_vars['b_feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 0);
if ($_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs']) {?><div class="brand-img"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_height'=>20,'images'=>$_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0);?>
</div><?php }
}?></div><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:video_gallery")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:video_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_rating")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if (strlen(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value])>40&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?><div class="ut2-gl__rating"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
</div><?php } else { ?><div class="ut2-gl__rating no-rating"><?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']=="A") {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }?></div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_rating"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['product']->value['product_code']&&$_smarty_tpl->tpl_vars['show_sku']->value) {
$_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];
}?><div class="ut2-gl__name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</div><div class="ut2-gl__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ut2-gl__no-price<?php }?>"><div><?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}
if (($_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['product']->value['product_id'],$_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value))||($_smarty_tpl->tpl_vars['product']->value['promotions'])) {?><div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab__dotd_product_label');?>
</div><?php }?></div><div><?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];
$_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];
$_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>
</div></div><?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?><div class="ut2-gl__control <?php if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']=="Y"&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping")) {?>bt-2x<?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping"&&!$_smarty_tpl->tpl_vars['product']->value['has_options']) {?>ut2-view-qty<?php }?>"><?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?><div class="ut2-gl__qty"><?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?><div class="button-container"><?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div></div><?php }?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller_advanced.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller_advanced.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['tmpl'] = new Smarty_variable('products_multicolumns', null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["show_name"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_rating"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_old_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_clean_price"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_list_discount"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_sku"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_qty"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_brand_logo"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_brand_logo'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y', null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_product_amount"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["hide_qty_label"] = new Smarty_variable(true, null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_amount_label"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars['show_product_labels'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_product_labels'] = clone $_smarty_tpl->tpl_vars['show_product_labels'];?>
<?php $_smarty_tpl->tpl_vars['show_discount_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_discount_label'] = clone $_smarty_tpl->tpl_vars['show_discount_label'];?>
<?php $_smarty_tpl->tpl_vars['show_shipping_label'] = new Smarty_variable(true, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['show_shipping_label'] = clone $_smarty_tpl->tpl_vars['show_shipping_label'];?>
<?php $_smarty_tpl->tpl_vars["show_list_buttons"] = new Smarty_variable(false, null, 0);?>
<?php $_smarty_tpl->tpl_vars["but_role"] = new Smarty_variable("action", null, 0);?>




<?php $_smarty_tpl->tpl_vars["pd"] = new Smarty_variable(32, null, 0);?>


<?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'])+10, null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']=="A"&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?>
    <?php $_smarty_tpl->tpl_vars["t2"] = new Smarty_variable(20, null, 0);?>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_sku'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>
    <?php $_smarty_tpl->tpl_vars["t3"] = new Smarty_variable(16, null, 0);?>
<?php }?>


<?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>


<?php $_smarty_tpl->tpl_vars["t5"] = new Smarty_variable(42, null, 0);?>


<?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
    <?php $_smarty_tpl->tpl_vars["t6"] = new Smarty_variable(46, null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=="mobile") {?>

    
    <?php $_smarty_tpl->tpl_vars["t1"] = new Smarty_variable(150, null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars["t4"] = new Smarty_variable(37, null, 0);?>

    
    <?php $_smarty_tpl->tpl_vars["t5"] = new Smarty_variable(34, null, 0);?>

    
    <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
        <?php $_smarty_tpl->tpl_vars["t6"] = new Smarty_variable(46, null, 0);?>
    <?php }?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("abt__ut2_gl_item_height", null, null); ob_start();
echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['t1']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t2']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t3']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t4']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t5']->value)===null||$tmp==='' ? 0 : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['t6']->value)===null||$tmp==='' ? 0 : $tmp)+$_smarty_tpl->tpl_vars['pd']->value, ENT_QUOTES, 'UTF-8');
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>




<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
    <div class="owl-theme ty-owl-controls">
        <div class="owl-controls clickable owl-controls-outside"  id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="owl-buttons">
                <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ty-icon-left-open-thin"></i></div>
                <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ty-icon-right-open-thin"></i></div>
            </div>
        </div>
    </div>
<?php }?>

<div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list grid-list <?php if (!$_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>no-buttons<?php }?> ut2-scroller-advanced">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_scroller_advanced_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__item <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['decolorate_out_of_stock_products']=="Y"&&$_smarty_tpl->tpl_vars['product']->value['amount']<=0) {?>out-of-stock<?php }?>" style="<?php echo Smarty::$_smarty_vars['capture']['abt__ut2_gl_item_height'];?>
px"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product_id'], null, 0);
$_smarty_tpl->tpl_vars["obj_id_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);
echo $_smarty_tpl->getSubTemplate ("common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);
$_smarty_tpl->tpl_vars["form_open"] = new Smarty_variable("form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_open']->value];
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_multicolumns_list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ut2-gl__body" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['th']->value, ENT_QUOTES, 'UTF-8');?>
px"><div class="ut2-gl__image" style="height: <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height']), ENT_QUOTES, 'UTF-8');?>
px"><?php $_smarty_tpl->_capture_stack[0][] = array("main_icon", null, null); ob_start(); ?><a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('lazy_load'=>true,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_height'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['abt__ut2_thumbnail_height'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_height'] : $tmp),'image_width'=>(($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_lists_thumbnail_width'] : $tmp)), 0);?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
echo Smarty::$_smarty_vars['capture']['main_icon'];
$_smarty_tpl->tpl_vars["product_labels"] = new Smarty_variable("product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['product_labels']->value];?>
<div class="ut2-gl__buttons"><?php if (!$_smarty_tpl->tpl_vars['quick_view']->value&&$_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view']=='Y'&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!="mobile") {
echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);
}
if ($_smarty_tpl->tpl_vars['addons']->value['wishlist']['status']=="A"&&!$_smarty_tpl->tpl_vars['hide_wishlist_button']->value) {
echo $_smarty_tpl->getSubTemplate ("addons/wishlist/views/wishlist/components/add_to_wishlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"button_wishlist_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_name'=>"dispatch[wishlist.add..".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'but_role'=>"text"), 0);
}
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products']=="Y"&&!$_smarty_tpl->tpl_vars['hide_compare_list_button']->value||$_smarty_tpl->tpl_vars['product']->value['feature_comparison']=="Y") {
echo $_smarty_tpl->getSubTemplate ("buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id']), 0);
}?></div><?php if ($_smarty_tpl->tpl_vars['show_brand_logo']->value&&$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']>0) {
$_smarty_tpl->tpl_vars['b_feature'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['abt__ut2_features'][$_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['brand_feature_id']], null, 0);
if ($_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs']) {?><div class="brand-img"><?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('image_height'=>20,'images'=>$_smarty_tpl->tpl_vars['b_feature']->value['variants'][$_smarty_tpl->tpl_vars['b_feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0);?>
</div><?php }
}?></div><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:video_gallery")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:video_gallery"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:video_gallery"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["rating"] = new Smarty_variable("rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"products:product_rating")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"products:product_rating"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
if (strlen(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value])>40&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']&&$_smarty_tpl->tpl_vars['product']->value['discussion_type']!='D') {?><div class="ut2-gl__rating"><?php echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['rating']->value];?>
</div><?php } else { ?><div class="ut2-gl__rating no-rating"><?php if ($_smarty_tpl->tpl_vars['addons']->value['discussion']['status']=="A") {?><span class="ty-nowrap ty-stars"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></span><?php }?></div><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_rating"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['product']->value['product_code']&&$_smarty_tpl->tpl_vars['show_sku']->value) {
$_smarty_tpl->tpl_vars["sku"] = new Smarty_variable("sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['sku']->value];
}?><div class="ut2-gl__name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value=="Y") {?><span class="item-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->tpl_vars["name"] = new Smarty_variable("name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['name']->value];?>
</div><div class="ut2-gl__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price']==0) {?>ut2-gl__no-price<?php }?>"><div><?php $_smarty_tpl->tpl_vars["old_price"] = new Smarty_variable("old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
if (trim(Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value])) {
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['old_price']->value];
}
if (($_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value&&smarty_modifier_in_array($_smarty_tpl->tpl_vars['product']->value['product_id'],$_smarty_tpl->tpl_vars['ab_dotd_product_ids']->value))||($_smarty_tpl->tpl_vars['product']->value['promotions'])) {?><div class="ab_dotd_product_label"><?php echo $_smarty_tpl->__('ab__dotd_product_label');?>
</div><?php }?></div><div><?php $_smarty_tpl->tpl_vars["price"] = new Smarty_variable("price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['price']->value];
$_smarty_tpl->tpl_vars["clean_price"] = new Smarty_variable("clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['clean_price']->value];
$_smarty_tpl->tpl_vars["list_discount"] = new Smarty_variable("list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['list_discount']->value];?>
</div></div><?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?><div class="ut2-gl__control <?php if (!$_smarty_tpl->tpl_vars['hide_form']->value&&$_smarty_tpl->tpl_vars['addons']->value['call_requests']['buy_now_with_one_click']=="Y"&&($_smarty_tpl->tpl_vars['auth']->value['user_id']||$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping")) {?>bt-2x<?php }?> <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list'][$_smarty_tpl->tpl_vars['tmpl']->value]['show_qty'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y'&&$_smarty_tpl->tpl_vars['settings']->value['General']['allow_anonymous_shopping']=="allow_shopping"&&!$_smarty_tpl->tpl_vars['product']->value['has_options']) {?>ut2-view-qty<?php }?>"><?php if ($_smarty_tpl->tpl_vars['show_qty']->value) {?><div class="ut2-gl__qty"><?php $_smarty_tpl->tpl_vars["qty"] = new Smarty_variable("qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['qty']->value];?>
</div><?php }?><div class="button-container"><?php $_smarty_tpl->tpl_vars["add_to_cart"] = new Smarty_variable("add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['add_to_cart']->value];?>
</div></div><?php }?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
$_smarty_tpl->tpl_vars["form_close"] = new Smarty_variable("form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, 0);
echo Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['form_close']->value];
}?></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
} ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);
}?><?php }} ?>
