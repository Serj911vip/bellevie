<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:26
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\abt__unitheme2\hooks\index\scripts.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4705072465e4bfa667ae059-20994983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598aa6ddb150b06b1cb61a27eb725380003dd7ad' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\abt__unitheme2\\hooks\\index\\scripts.pre.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4705072465e4bfa667ae059-20994983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'ut2_dispatch' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa667ed070_64504998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa667ed070_64504998')) {function content_5e4bfa667ed070_64504998($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo '<script'; ?>
 type="text/javascript" data-no-defer>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
',functions: {in_array: function( val, arr ) {var answ = 0;if ( Array.isArray( arr ) ) {answ = ~arr.indexOf( val );} else {answ = ~Object.keys(arr).indexOf( val );}return Boolean(answ);},detect_class_changes: function( elem, callback, add_old_val ) {var vanilla_elem = elem[0];var observer = new MutationObserver( callback );observer.observe(vanilla_elem, {attributes: true,attributeOldValue: add_old_val || false,attributeFilter: ["class"]});}}},});$('body').data('ca-scroll-to-elm-offset', 50);<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=='mobile'||$_smarty_tpl->tpl_vars['settings']->value['abt__device']=='tablet') {?>var main_content_breadcrumbs = $(".main-content-grid");var m_c_b_w = main_content_breadcrumbs.outerWidth();var mobile_breadcrumbs = $(".ty-breadcrumbs").css("display", "inline-block");var m_b_w = mobile_breadcrumbs.outerWidth( true );if ( m_b_w >= m_c_b_w ) {mobile_breadcrumbs.addClass("long").css("display", '');}<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_fixed_filters_button'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>var filters = $(".ty-dropdown-box.ut2-filters:not(.ty-sidebox-important)");if ( filters.length ) {var offset = filters.offset();offset.bottom = offset.top + Number(filters.outerHeight());var class_list = ["fixed-filters"];var header_height = 0;<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['enable_fixed_header_panel']=='Y') {?>var header = $(".header-grid .top-menu-grid");if ( header.length ) { header_height = Number(header.outerHeight()); }<?php }?>var class_string = class_list.join(' ');$(window).on("resize scroll", function() {var scroll_top = window.scrollY + header_height;if (scroll_top > offset.bottom) {filters.addClass(class_string);} else {filters.removeClass(class_string);}});}<?php }
$_smarty_tpl->tpl_vars['ut2_dispatch'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), null, 0);?>$(document).ready(function() {<?php if ($_smarty_tpl->tpl_vars['ut2_dispatch']->value=='products.view') {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sticky_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>$("body").addClass("sticky-add-to-cart");<?php }
} elseif ($_smarty_tpl->tpl_vars['ut2_dispatch']->value=='categories.view') {?>_.abt__ut2.settings.product_list.class_name = "ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], ENT_QUOTES, 'UTF-8');?>
";<?php } elseif ($_smarty_tpl->tpl_vars['ut2_dispatch']->value=='checkout.cart') {?>$(".ty-dropdown-box__title:not(.open)").addClass("__cart-page");<?php }?>});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_swipe_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_light_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/scripts.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/scripts.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><?php echo '<script'; ?>
 type="text/javascript" data-no-defer>(function(_, $) {$.extend(_, {abt__ut2: {settings: <?php echo json_encode($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']);?>
,controller : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['controller'], ENT_QUOTES, 'UTF-8');?>
',mode : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['runtime']->value['mode'], ENT_QUOTES, 'UTF-8');?>
',device : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__device'], ENT_QUOTES, 'UTF-8');?>
',functions: {in_array: function( val, arr ) {var answ = 0;if ( Array.isArray( arr ) ) {answ = ~arr.indexOf( val );} else {answ = ~Object.keys(arr).indexOf( val );}return Boolean(answ);},detect_class_changes: function( elem, callback, add_old_val ) {var vanilla_elem = elem[0];var observer = new MutationObserver( callback );observer.observe(vanilla_elem, {attributes: true,attributeOldValue: add_old_val || false,attributeFilter: ["class"]});}}},});$('body').data('ca-scroll-to-elm-offset', 50);<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__device']=='mobile'||$_smarty_tpl->tpl_vars['settings']->value['abt__device']=='tablet') {?>var main_content_breadcrumbs = $(".main-content-grid");var m_c_b_w = main_content_breadcrumbs.outerWidth();var mobile_breadcrumbs = $(".ty-breadcrumbs").css("display", "inline-block");var m_b_w = mobile_breadcrumbs.outerWidth( true );if ( m_b_w >= m_c_b_w ) {mobile_breadcrumbs.addClass("long").css("display", '');}<?php }
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['show_fixed_filters_button'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>var filters = $(".ty-dropdown-box.ut2-filters:not(.ty-sidebox-important)");if ( filters.length ) {var offset = filters.offset();offset.bottom = offset.top + Number(filters.outerHeight());var class_list = ["fixed-filters"];var header_height = 0;<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['enable_fixed_header_panel']=='Y') {?>var header = $(".header-grid .top-menu-grid");if ( header.length ) { header_height = Number(header.outerHeight()); }<?php }?>var class_string = class_list.join(' ');$(window).on("resize scroll", function() {var scroll_top = window.scrollY + header_height;if (scroll_top > offset.bottom) {filters.addClass(class_string);} else {filters.removeClass(class_string);}});}<?php }
$_smarty_tpl->tpl_vars['ut2_dispatch'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller']).".".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), null, 0);?>$(document).ready(function() {<?php if ($_smarty_tpl->tpl_vars['ut2_dispatch']->value=='products.view') {
if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['products']['view']['show_sticky_add_to_cart'][$_smarty_tpl->tpl_vars['settings']->value['abt__device']]=='Y') {?>$("body").addClass("sticky-add-to-cart");<?php }
} elseif ($_smarty_tpl->tpl_vars['ut2_dispatch']->value=='categories.view') {?>_.abt__ut2.settings.product_list.class_name = "ty-column<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], ENT_QUOTES, 'UTF-8');?>
";<?php } elseif ($_smarty_tpl->tpl_vars['ut2_dispatch']->value=='checkout.cart') {?>$(".ty-dropdown-box__title:not(.open)").addClass("__cart-page");<?php }?>});}(Tygh, Tygh.$));<?php echo '</script'; ?>
>
<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_ajax_blocks.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_grid_tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_swipe_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_light_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_youtube.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_load_more.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/abt__unitheme2/abt__ut2_custom_combination.js"),$_smarty_tpl);
}?><?php }} ?>
