<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:19
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\blocks\abt__ut2_dropdown_vertical_mwi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5932710265e4bfa5fbbbee2-17460876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e82cefa39ac0dc1436e55395b7de13147600d4ec' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\blocks\\abt__ut2_dropdown_vertical_mwi.tpl',
      1 => 1568894024,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5932710265e4bfa5fbbbee2-17460876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'settings' => 0,
    'item1' => 0,
    'block' => 0,
    'childs' => 0,
    'item1_url' => 0,
    'name' => 0,
    'unique_elm_id' => 0,
    'item2' => 0,
    'item_url2' => 0,
    'dropdown_class' => 0,
    'rows' => 0,
    'splitted_categories' => 0,
    'row' => 0,
    'item2_url' => 0,
    'max_amount3' => 0,
    'item2_childs' => 0,
    'Viewlimit' => 0,
    'item3' => 0,
    'item3_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5fd1df02_73848402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5fd1df02_73848402')) {function content_5e4bfa5fd1df02_73848402($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_modifier_count')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_split')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.split.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_topmenu_view_more','more','text_topmenu_more','text_topmenu_view_more','more','text_topmenu_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?><div class="ut2-menu__inbox"><ul class="ty-menu__items cm-responsive-menu" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item1"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item1"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
 $_smarty_tpl->tpl_vars["item1"]->iteration++;
 $_smarty_tpl->tpl_vars["item1"]->last = $_smarty_tpl->tpl_vars["item1"]->iteration === $_smarty_tpl->tpl_vars["item1"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['last'] = $_smarty_tpl->tpl_vars["item1"]->last;
$_smarty_tpl->tpl_vars["cat_image"] = new Smarty_variable(fn_get_image_pairs($_smarty_tpl->tpl_vars['item1']->value['category_id'],'category','M',true,true), null, 0);
$_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);
ob_start();
echo htmlspecialchars(substr(crc32(serialize($_smarty_tpl->tpl_vars['item1']->value)),0,10), ENT_QUOTES, 'UTF-8');
$_tmp12=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_tmp12, null, 0);
$_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?><li class="ty-menu__item <?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php } else { ?> cm-menu-item-responsive<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> first-lvl<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['last']) {?> last<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?> "><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><a class="ty-menu__item-toggle ty-menu__menu-btn visible-phone cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__item-link a-first-lvl"><div class="menu-lvl-ctn <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc']))) {?>exp-wrap<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><img class="ut2-mwi-icon lazyOwl" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'], ENT_QUOTES, 'UTF-8');?>
" alt="" src="."><?php }?><span><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if (trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc']))) {?><br><span class="exp-mwi-text"><?php echo htmlspecialchars(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'])), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><i class="icon-right-dir ut2-icon-outline-arrow_forward"></i><?php }?></div></a><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
$_smarty_tpl->_capture_stack[0][] = array("children", null, null); ob_start();
if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?><div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?><ul class="ty-menu__submenu-items ty-menu__submenu-items-simple <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) {?>with-pic<?php }?> cm-responsive-menu-submenu" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
$_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>"><div class="ty-menu__submenu-item-header_ut"><a class="ty-menu__submenu-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?>item-icon<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item_url2']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><img class="ut2-mwi-icon lazyOwl" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'], ENT_QUOTES, 'UTF-8');?>
" alt="" src="."><?php }?><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></div></li><?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><ul class="ut2-mwi-html <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>
</ul><?php } else { ?><!--<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>--><!--    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link 1">--><!--        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-alt-link"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>--><!--    </li>--><!--<?php }?>--><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</ul><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?></div><?php }
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?><div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-menu__submenu-items cm-responsive-menu-submenu dropdown-column-item <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>tree-level-dropdown hover-zone2<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!='bottom') {?>with-pic<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']=='Y') {?>with-icon-items<?php }?> clearfix" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"><ul><?php $_smarty_tpl->tpl_vars["rows"] = new Smarty_variable(ceil(((smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]))/5)), null, 0);
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_categories",'skip_complete'=>true),$_smarty_tpl);
$_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?><li class="ty-menu__submenu-col"><ul><?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
$_smarty_tpl->tpl_vars['Viewlimit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['no_hidden_elements_second_level_view'])===null||$tmp==='' ? 5 : $tmp), null, 0);?><li class="ut2-submenu-col <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?>ut2-wrap-icon<?php }?> second-lvl"><?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><div class="ty-menu__submenu-item-header <?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link<?php if (empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?> no-items<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><div class="ut2-mwi-icon"><img class="ut2-mwi-icon lazyOwl" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'], ENT_QUOTES, 'UTF-8');?>
" alt="" src="."></div><?php }?><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?><i class="icon-right-dir ut2-icon-outline-arrow_forward"></i><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?><a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><div class="ty-menu__submenu" <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?><div class="sub-title-two-level"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi></div><?php $_smarty_tpl->tpl_vars['max_amount3'] = new Smarty_variable(2*$_smarty_tpl->tpl_vars['block']->value['properties']['elements_per_column_third_level_view'], null, 0);
$_smarty_tpl->createLocalArrayVariable('item2', null, 0);
$_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] = array_slice($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],0,$_smarty_tpl->tpl_vars['max_amount3']->value,true);
$_smarty_tpl->tpl_vars["item2_childs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2_childs"]->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],ceil(smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])/2),true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2_childs"]->key => $_smarty_tpl->tpl_vars["item2_childs"]->value) {
$_smarty_tpl->tpl_vars["item2_childs"]->_loop = true;
?><ul class="ty-menu__submenu-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>tree-level-col <?php } else {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }
}?>cm-responsive-menu-submenu" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!="Y") {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item2_childs']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2_childs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
$_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></li><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></ul><?php }
} else { ?><ul class="ty-menu__submenu-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>tree-level-col <?php } else {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }
}?>cm-responsive-menu-submenu" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!="Y") {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?><div class="sub-title-two-level"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi></div><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
$_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></li><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></ul><?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&!$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><div class="ut2-mwi-html <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown']=="Y") {?>bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'];?>
</div><?php }
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!="Y") {?><a href="javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');" class="ut2-more"><span><?php echo $_smarty_tpl->__("more");?>
</span></a><?php }?></div><?php }?></li><?php } ?></ul></li><?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><li class="ut2-mwi-html <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>
</li><?php } else { ?><!--<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>--><!--    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">--><!--        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>--><!--    </li>--><!--<?php }?>--><?php }?></ul></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?></div><?php }
}?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?>
                        <?php echo Smarty::$_smarty_vars['capture']['children'];?>

                    <?php } else { ?>
                        <div class="abt__ut2_am ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
"></div>
                        <?php echo htmlspecialchars(fn_abt__ut2_ajax_menu_save(Smarty::$_smarty_vars['capture']['children'],$_smarty_tpl->tpl_vars['unique_elm_id']->value), ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                <?php }?>
            </li>
        <?php } ?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']=='Y') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('blocks/menu/components/ajax_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/abt__ut2_dropdown_vertical_mwi.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/abt__ut2_dropdown_vertical_mwi.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?><div class="ut2-menu__inbox"><ul class="ty-menu__items cm-responsive-menu" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item1"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item1"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["item1"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["item1"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["item1"]->key => $_smarty_tpl->tpl_vars["item1"]->value) {
$_smarty_tpl->tpl_vars["item1"]->_loop = true;
 $_smarty_tpl->tpl_vars["item1"]->iteration++;
 $_smarty_tpl->tpl_vars["item1"]->last = $_smarty_tpl->tpl_vars["item1"]->iteration === $_smarty_tpl->tpl_vars["item1"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["item1"]['last'] = $_smarty_tpl->tpl_vars["item1"]->last;
$_smarty_tpl->tpl_vars["cat_image"] = new Smarty_variable(fn_get_image_pairs($_smarty_tpl->tpl_vars['item1']->value['category_id'],'category','M',true,true), null, 0);
$_smarty_tpl->tpl_vars["item1_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);
ob_start();
echo htmlspecialchars(substr(crc32(serialize($_smarty_tpl->tpl_vars['item1']->value)),0,10), ENT_QUOTES, 'UTF-8');
$_tmp13=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["unique_elm_id"] = new Smarty_variable("topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_tmp13, null, 0);
$_smarty_tpl->tpl_vars["subitems_count"] = new Smarty_variable(smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]), null, 0);?><li class="ty-menu__item <?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php } else { ?> cm-menu-item-responsive<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }?> first-lvl<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['item1']['last']) {?> last<?php }?> <?php if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?> "><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><a class="ty-menu__item-toggle ty-menu__menu-btn visible-phone cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><?php }?><a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__item-link a-first-lvl"><div class="menu-lvl-ctn <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc']))) {?>exp-wrap<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><img class="ut2-mwi-icon lazyOwl" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__icon'], ENT_QUOTES, 'UTF-8');?>
" alt="" src="."><?php }?><span><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if (trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc']))) {?><br><span class="exp-mwi-text"><?php echo htmlspecialchars(trim(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__desc'])), ENT_QUOTES, 'UTF-8');?>
</span><?php }?></span><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?><i class="icon-right-dir ut2-icon-outline-arrow_forward"></i><?php }?></div></a><?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
$_smarty_tpl->_capture_stack[0][] = array("children", null, null); ob_start();
if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?><div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?><ul class="ty-menu__submenu-items ty-menu__submenu-items-simple <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']) {?>with-pic<?php }?> cm-responsive-menu-submenu" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
$_smarty_tpl->tpl_vars["item_url2"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>"><div class="ty-menu__submenu-item-header_ut"><a class="ty-menu__submenu-link <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?>item-icon<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item_url2']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><img class="ut2-mwi-icon lazyOwl" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'], ENT_QUOTES, 'UTF-8');?>
" alt="" src="."><?php }?><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></div></li><?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><ul class="ut2-mwi-html <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>
</ul><?php } else { ?><!--<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>--><!--    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link 1">--><!--        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-menu__submenu-alt-link"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>--><!--    </li>--><!--<?php }?>--><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</ul><?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?></div><?php }
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?><div class="ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="ty-menu__submenu-items cm-responsive-menu-submenu dropdown-column-item <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>tree-level-dropdown hover-zone2<?php } else { ?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dropdown_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position']!='bottom') {?>with-pic<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']=='Y') {?>with-icon-items<?php }?> clearfix" style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"><ul><?php $_smarty_tpl->tpl_vars["rows"] = new Smarty_variable(ceil(((smarty_modifier_count($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]))/5)), null, 0);
echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],'size'=>$_smarty_tpl->tpl_vars['rows']->value,'assign'=>"splitted_categories",'skip_complete'=>true),$_smarty_tpl);
$_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value) {
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?><li class="ty-menu__submenu-col"><ul><?php  $_smarty_tpl->tpl_vars["item2"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2"]->key => $_smarty_tpl->tpl_vars["item2"]->value) {
$_smarty_tpl->tpl_vars["item2"]->_loop = true;
$_smarty_tpl->tpl_vars['Viewlimit'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['block']->value['properties']['no_hidden_elements_second_level_view'])===null||$tmp==='' ? 5 : $tmp), null, 0);?><li class="ut2-submenu-col <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']) {?>ut2-wrap-icon<?php }?> second-lvl"><?php $_smarty_tpl->tpl_vars["item2_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><div class="ty-menu__submenu-item-header <?php if ($_smarty_tpl->tpl_vars['item2']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link<?php if (empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?> no-items<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon']&&$_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_icon_items']=="Y"&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><div class="ut2-mwi-icon"><img class="ut2-mwi-icon lazyOwl" data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__icon'], ENT_QUOTES, 'UTF-8');?>
" alt="" src="."></div><?php }?><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
;background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a><?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?><i class="icon-right-dir ut2-icon-outline-arrow_forward"></i><?php }?></div><?php if (!empty($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])) {?><a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle"><i class="ut2-icon-outline-expand_more"></i></a><div class="ty-menu__submenu" <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>style="min-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['general']['menu_min_height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?><div class="sub-title-two-level"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi></div><?php $_smarty_tpl->tpl_vars['max_amount3'] = new Smarty_variable(2*$_smarty_tpl->tpl_vars['block']->value['properties']['elements_per_column_third_level_view'], null, 0);
$_smarty_tpl->createLocalArrayVariable('item2', null, 0);
$_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value] = array_slice($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],0,$_smarty_tpl->tpl_vars['max_amount3']->value,true);
$_smarty_tpl->tpl_vars["item2_childs"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item2_childs"]->_loop = false;
 $_from = array_chunk($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value],ceil(smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])/2),true); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item2_childs"]->key => $_smarty_tpl->tpl_vars["item2_childs"]->value) {
$_smarty_tpl->tpl_vars["item2_childs"]->_loop = true;
?><ul class="ty-menu__submenu-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>tree-level-col <?php } else {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }
}?>cm-responsive-menu-submenu" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2_childs']->value)>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!="Y") {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item2_childs']->value) {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2_childs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
$_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></li><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></ul><?php }
} else { ?><ul class="ty-menu__submenu-list <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>tree-level-col <?php } else {
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value) {?>hiddenCol <?php }
}?>cm-responsive-menu-submenu" <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!="Y") {?>style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['Viewlimit']->value*21, ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>><?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?><div class="sub-title-two-level"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi></div><?php }
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_smarty_tpl->tpl_vars["item3"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item3"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item3"]->key => $_smarty_tpl->tpl_vars["item3"]->value) {
$_smarty_tpl->tpl_vars["item3"]->_loop = true;
$_smarty_tpl->tpl_vars["item3_url"] = new Smarty_variable(fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']), null, 0);?><li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active']||fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }?>"><a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link"><bdi><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</bdi><?php if ($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label']) {?><span class="m-label" style="color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_color'], ENT_QUOTES, 'UTF-8');?>
; background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label_background'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['abt__ut2_mwi__label'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?></a></li><?php }
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?></ul><?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&!$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><div class="ut2-mwi-html <?php if ($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__dropdown']=="Y") {?>bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['item2']->value['abt__ut2_mwi__text'];?>
</div><?php }
if (smarty_modifier_count($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value])>$_smarty_tpl->tpl_vars['Viewlimit']->value&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']!="Y") {?><a href="javascript:void(0);" onMouseOver="$(this).prev().addClass('view');$(this).addClass('hidden');" class="ut2-more"><span><?php echo $_smarty_tpl->__("more");?>
</span></a><?php }?></div><?php }?></li><?php } ?></ul></li><?php }
if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__status']=='Y'&&$_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text']&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']!='mobile') {?><li class="ut2-mwi-html <?php if ($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__dropdown']=="Y") {?>bottom<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text_position'], ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['item1']->value['abt__ut2_mwi__text'];?>
</li><?php } else { ?><!--<?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more']&&$_smarty_tpl->tpl_vars['item1_url']->value) {?>--><!--    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">--><!--        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>--><!--    </li>--><!--<?php }?>--><?php }?></ul></div><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?></div><?php }
}?>
                    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']!='Y') {?>
                        <?php echo Smarty::$_smarty_vars['capture']['children'];?>

                    <?php } else { ?>
                        <div class="abt__ut2_am ty-menu__submenu" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(@constant('DESCR_SL'), ENT_QUOTES, 'UTF-8');?>
"></div>
                        <?php echo htmlspecialchars(fn_abt__ut2_ajax_menu_save(Smarty::$_smarty_vars['capture']['children'],$_smarty_tpl->tpl_vars['unique_elm_id']->value), ENT_QUOTES, 'UTF-8');?>

                    <?php }?>
                <?php }?>
            </li>
        <?php } ?>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </ul>
    </div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['abt_menu_ajax_load']=='Y') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('blocks/menu/components/ajax_upload.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
