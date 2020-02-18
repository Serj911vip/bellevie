<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:48:08
         compiled from "C:\OSPanel\domains\bellevie.gift\design\backend\templates\addons\ab__scroll_to_top\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14518374065e4bf928c3aec0-23233561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9efcb73f1c75528e81da65d3e3a6a9d65042d555' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\backend\\templates\\addons\\ab__scroll_to_top\\hooks\\index\\scripts.post.tpl',
      1 => 1564578010,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '14518374065e4bf928c3aec0-23233561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'units' => 0,
    'transtion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bf928da3440_86277585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bf928da3440_86277585')) {function content_5e4bf928da3440_86277585($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.inline_script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/ab__stt_admin.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/ab__scroll_to_top/jquery.minicolors.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['units'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['units'])===null||$tmp==='' ? 'px' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['transition'] = new Smarty_variable(intval((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['transition'])===null||$tmp==='' ? 600 : $tmp)), null, 0);?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['show_in_admin_panel'])===null||$tmp==='' ? "N" : $tmp)=="Y") {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
$(document).ready(function(){
var scroll_height = 100;
var position = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['position'])===null||$tmp==='' ? "bottom_right" : $tmp), ENT_QUOTES, 'UTF-8');?>
';
var hide_on_mobile = '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['hide_on_mobile'])===null||$tmp==='' ? "N" : $tmp), ENT_QUOTES, 'UTF-8');?>
';
var css_arrow = {
'font-size': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_size']))===null||$tmp==='' ? 64 : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['units']->value, ENT_QUOTES, 'UTF-8');?>
',
'font-weight': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['font_weight'])===null||$tmp==='' ? 'normal' : $tmp), ENT_QUOTES, 'UTF-8');?>
',
'color': '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['ab__stt_color'])===null||$tmp==='' ? '#000' : $tmp), ENT_QUOTES, 'UTF-8');?>
',
};
var css_block = {
'margin-top': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_top']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['units']->value, ENT_QUOTES, 'UTF-8');?>
',
'margin-right': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_right']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['units']->value, ENT_QUOTES, 'UTF-8');?>
',
'margin-bottom':'<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_bottom']))===null||$tmp==='' ? 10 : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['units']->value, ENT_QUOTES, 'UTF-8');?>
',
'margin-left': '<?php echo htmlspecialchars((($tmp = @intval($_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['margin_left']))===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['units']->value, ENT_QUOTES, 'UTF-8');?>
',
'display': 'none',
};
switch ( position ){
case 'top_right': css_block.top = 0; css_block.right = 0; break;
case 'top_left': css_block.top = 0; css_block.left = 0; break;
case 'bottom_right':css_block.bottom = 0; css_block.right = 0; break;
case 'bottom_left': css_block.bottom = 0; css_block.left = 0; break;
}
if ($(window).scrollTop() > scroll_height) css_block.display = 'block';
if (!$.isMobile() || hide_on_mobile != 'Y') {
$('body').append('<div class="ab__scroll_to_top_button"><span class="ab__stt-' + '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['icon'])===null||$tmp==='' ? "arrow_1" : $tmp), ENT_QUOTES, 'UTF-8');?>
' + '"></span></div>');
$('div.ab__scroll_to_top_button').css(css_block).find('span').css(css_arrow);
}
$(window).scroll(function () {
if ($(this).scrollTop() > scroll_height) $('.ab__scroll_to_top_button').fadeIn();
else $('.ab__scroll_to_top_button').fadeOut();
});
$(document).on('click', 'div.ab__scroll_to_top_button', function() {
$("html, body").animate( { scrollTop: 0 } , <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transtion']->value, ENT_QUOTES, 'UTF-8');?>
);
return false;
});
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>
