<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:48:08
         compiled from "C:\OSPanel\domains\bellevie.gift\design\backend\templates\addons\ab__addons_manager\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6329828445e4bf928785ad9-25803149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ec29cdd014c73242d87fe364351e3834670d4a3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\backend\\templates\\addons\\ab__addons_manager\\hooks\\index\\scripts.post.tpl',
      1 => 1564578812,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6329828445e4bf928785ad9-25803149',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'abam_events' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bf928af3277_71052444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bf928af3277_71052444')) {function content_5e4bf928af3277_71052444($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('ab__am.menu.new_version','ab__am.menu.number_of_updates','ab__am.menu.number_of_notifications'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
$(_.doc).on('click', '.compatible-title', function (e) {
var ct = $(this).parent().find('div.compatible-text');
if (ct.hasClass('hidden')) ct.removeClass('hidden');
else ct.addClass('hidden');
});
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']!='ab__am') {?>
$(document).ready(function () {
var menu = $('.navbar-admin-top .nav-pills');
var ab_am_events = <?php echo json_encode($_smarty_tpl->tpl_vars['abam_events']->value);?>
;
var available_updates = ab_am_events.available_updates;
var notifications = ab_am_events.notifications;
if (Object.keys(ab_am_events.available_updates).length){
if (menu.find('.ab__addons_manager').length){
for (var a in ab_am_events.available_updates) {
if (menu.find('.' + a).length){
if (!menu.find('.' + a + ' > a:first .ab-am-new-version').length){
menu.find('.' + a + ' > a:first > span:first').append('<span class="ab-am-new-version">' + '<?php echo htmlspecialchars(strtr($_smarty_tpl->__("ab__am.menu.new_version"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
'.replace('[ver]', ab_am_events.available_updates[a]) + '</span>');
}
}
}
menu.find('.ab__addons_manager').parent().parent().find('a:first > b').before('<span title="<?php echo htmlspecialchars($_smarty_tpl->__("ab__am.menu.number_of_updates"), ENT_QUOTES, 'UTF-8');?>
" class="ab-am-available-updates">' + Object.keys(ab_am_events.available_updates).length + '</span>');
}
}
if (ab_am_events.notifications > 0){
menu.find('.ab__addons_manager > a:first > span:first').append('<span class="ab-am-notifications">' + ab_am_events.notifications + '</span>');
menu.find('.ab__addons_manager').parent().parent().find('a:first > b').before('<span title="<?php echo htmlspecialchars($_smarty_tpl->__("ab__am.menu.number_of_notifications"), ENT_QUOTES, 'UTF-8');?>
" class="ab-am-notifications">' + ab_am_events.notifications + '</span>');
}
});
<?php }?>
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
