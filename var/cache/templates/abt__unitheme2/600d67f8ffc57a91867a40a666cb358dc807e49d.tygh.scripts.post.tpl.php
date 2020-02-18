<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:26
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\responsive\templates\addons\ab__scroll_to_top\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13139850055e4bfa668b6b19-74000375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '600d67f8ffc57a91867a40a666cb358dc807e49d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\responsive\\templates\\addons\\ab__scroll_to_top\\hooks\\index\\scripts.post.tpl',
      1 => 1564581430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13139850055e4bfa668b6b19-74000375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'units' => 0,
    'transition' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa668e0017_32091837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa668e0017_32091837')) {function content_5e4bfa668e0017_32091837($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['units'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['units'])===null||$tmp==='' ? 'px' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['transition'] = new Smarty_variable(intval((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['transition'])===null||$tmp==='' ? 600 : $tmp)), null, 0);?>
<?php echo '<script'; ?>
>
(function(_, $) {
$(document).ready(function() {
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
switch (position){
case 'top_right': css_block.top = 0; css_block.right = 0; break;
case 'top_left': css_block.top = 0; css_block.left = 0; break;
case 'bottom_right': css_block.bottom = 0; css_block.right = 0; break;
case 'bottom_left': css_block.bottom = 0; css_block.left = 0; break;
}
if ($(window).scrollTop() > scroll_height) css_block.display = 'block';
if (!$.isMobile() || hide_on_mobile != 'Y') {
$('body').append('<div class="ab__scroll_to_top"><span class="ab__stt-' + '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['icon'])===null||$tmp==='' ? "arrow_1" : $tmp), ENT_QUOTES, 'UTF-8');?>
' + '"></span></div>');
$('div.ab__scroll_to_top').css(css_block).find('span').css(css_arrow);
}
$(window).scroll(function () {
if ($(this).scrollTop() > scroll_height) $('.ab__scroll_to_top').fadeIn();
else $('.ab__scroll_to_top').fadeOut();
});
$(document).on('click', 'div.ab__scroll_to_top', function() {
$("html, body").stop().animate( { scrollTop: 0 }, {
duration: <?php if ($_smarty_tpl->tpl_vars['transition']->value>1500) {?>1500<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['transition']->value, ENT_QUOTES, 'UTF-8');
}?>,
easing: "linear"
});
return false;
});
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__scroll_to_top/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__scroll_to_top/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['units'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['units'])===null||$tmp==='' ? 'px' : $tmp), null, 0);?>
<?php $_smarty_tpl->tpl_vars['transition'] = new Smarty_variable(intval((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['transition'])===null||$tmp==='' ? 600 : $tmp)), null, 0);?>
<?php echo '<script'; ?>
>
(function(_, $) {
$(document).ready(function() {
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
switch (position){
case 'top_right': css_block.top = 0; css_block.right = 0; break;
case 'top_left': css_block.top = 0; css_block.left = 0; break;
case 'bottom_right': css_block.bottom = 0; css_block.right = 0; break;
case 'bottom_left': css_block.bottom = 0; css_block.left = 0; break;
}
if ($(window).scrollTop() > scroll_height) css_block.display = 'block';
if (!$.isMobile() || hide_on_mobile != 'Y') {
$('body').append('<div class="ab__scroll_to_top"><span class="ab__stt-' + '<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['addons']->value['ab__scroll_to_top']['icon'])===null||$tmp==='' ? "arrow_1" : $tmp), ENT_QUOTES, 'UTF-8');?>
' + '"></span></div>');
$('div.ab__scroll_to_top').css(css_block).find('span').css(css_arrow);
}
$(window).scroll(function () {
if ($(this).scrollTop() > scroll_height) $('.ab__scroll_to_top').fadeIn();
else $('.ab__scroll_to_top').fadeOut();
});
$(document).on('click', 'div.ab__scroll_to_top', function() {
$("html, body").stop().animate( { scrollTop: 0 }, {
duration: <?php if ($_smarty_tpl->tpl_vars['transition']->value>1500) {?>1500<?php } else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['transition']->value, ENT_QUOTES, 'UTF-8');
}?>,
easing: "linear"
});
return false;
});
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
