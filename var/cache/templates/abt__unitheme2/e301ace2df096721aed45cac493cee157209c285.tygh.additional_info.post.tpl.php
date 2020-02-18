<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:11:39
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\ab__deal_of_the_day\hooks\products\additional_info.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2249125415e4bfeab13ca92-19743646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e301ace2df096721aed45cac493cee157209c285' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\ab__deal_of_the_day\\hooks\\products\\additional_info.post.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2249125415e4bfeab13ca92-19743646',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'settings' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfeab167117_66445990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfeab167117_66445990')) {function content_5e4bfeab167117_66445990($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['ab__show_promos']=='Y'&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']=="desktop"&&smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions'])>0) {?>
    <div class="ab-dotd-promos" data-abt-dotd-promotions-id="<?php echo htmlspecialchars(implode(',',(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))), ENT_QUOTES, 'UTF-8');?>
">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['promotions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li class="ab-dotd-category-promo promo-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'UTF-8');?>
"></li>
            <?php } ?>
        </ul>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/hooks/products/additional_info.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/hooks/products/additional_info.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['ab__show_promos']=='Y'&&$_smarty_tpl->tpl_vars['settings']->value['abt__device']=="desktop"&&smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['promotions'])>0) {?>
    <div class="ab-dotd-promos" data-abt-dotd-promotions-id="<?php echo htmlspecialchars(implode(',',(array_keys($_smarty_tpl->tpl_vars['product']->value['promotions']))), ENT_QUOTES, 'UTF-8');?>
">
        <ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['promotions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li class="ab-dotd-category-promo promo-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->key, ENT_QUOTES, 'UTF-8');?>
"></li>
            <?php } ?>
        </ul>
    </div>
<?php }
}?><?php }} ?>
