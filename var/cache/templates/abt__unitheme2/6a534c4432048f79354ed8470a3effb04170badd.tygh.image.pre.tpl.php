<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:17
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\responsive\templates\addons\hidpi\hooks\common\image.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10398241025e4bfa5d5bad75-76799649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a534c4432048f79354ed8470a3effb04170badd' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\responsive\\templates\\addons\\hidpi\\hooks\\common\\image.pre.tpl',
      1 => 1564497254,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10398241025e4bfa5d5bad75-76799649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'image_data' => 0,
    'images' => 0,
    'width' => 0,
    'height' => 0,
    'image_data2x' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5d5d7732_31993307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5d5d7732_31993307')) {function content_5e4bfa5d5d7732_31993307($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['width']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['height'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['height']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['images']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['images']->value['icon']['image_x'],$_smarty_tpl->tpl_vars['images']->value['icon']['image_y']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_data'] = clone $_smarty_tpl->tpl_vars['image_data'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['images']->value['original_image_path']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['images']->value, null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_data2x', null, 0);
$_smarty_tpl->tpl_vars['image_data2x']->value["image_path"] = $_smarty_tpl->tpl_vars['images']->value['original_image_path'];?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_additional_attrs', null, 1);
$_smarty_tpl->tpl_vars['image_additional_attrs']->value["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_additional_attrs'] = clone $_smarty_tpl->tpl_vars['image_additional_attrs'];?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/hidpi/hooks/common/image.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/hidpi/hooks/common/image.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['image_data']->value['is_thumbnail']) {?>
    <?php $_smarty_tpl->tpl_vars['width'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['width']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['height'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value['height']*2, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['width']->value,$_smarty_tpl->tpl_vars['height']->value), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['images']->value['icon']['is_high_res']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['image_data']->value, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['image_data'] = new Smarty_variable(fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['images']->value['icon']['image_x'],$_smarty_tpl->tpl_vars['images']->value['icon']['image_y']), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_data'] = clone $_smarty_tpl->tpl_vars['image_data'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['images']->value['original_image_path']) {?>
    <?php $_smarty_tpl->tpl_vars['image_data2x'] = new Smarty_variable($_smarty_tpl->tpl_vars['images']->value, null, 0);?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_data2x', null, 0);
$_smarty_tpl->tpl_vars['image_data2x']->value["image_path"] = $_smarty_tpl->tpl_vars['images']->value['original_image_path'];?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['image_data2x']->value['image_path']) {?>
    <?php $_smarty_tpl->createLocalArrayVariable('image_additional_attrs', null, 1);
$_smarty_tpl->tpl_vars['image_additional_attrs']->value["srcset"] = ((string)$_smarty_tpl->tpl_vars['image_data2x']->value['image_path'])." 2x";
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['image_additional_attrs'] = clone $_smarty_tpl->tpl_vars['image_additional_attrs'];?>
<?php }?>
<?php }?><?php }} ?>
