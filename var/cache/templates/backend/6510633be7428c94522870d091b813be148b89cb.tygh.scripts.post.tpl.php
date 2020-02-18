<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:48:08
         compiled from "C:\OSPanel\domains\bellevie.gift\design\backend\templates\addons\ab__motivation_block\hooks\index\scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8618964615e4bf928dfc396-25904333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6510633be7428c94522870d091b813be148b89cb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\backend\\templates\\addons\\ab__motivation_block\\hooks\\index\\scripts.post.tpl',
      1 => 1564578922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8618964615e4bf928dfc396-25904333',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bf928e06776_86424468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bf928e06776_86424468')) {function content_5e4bf928e06776_86424468($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.script.php';
if (!is_callable('smarty_block_inline_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.inline_script.php';
?><?php echo smarty_function_script(array('src'=>"js/addons/ab__motivation_block/jquery.minicolors.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
(function(_, $) {
$.ceEvent('on', 'ce.commoninit', function(context) {
context.find('.cm-ab-mb-colorpicker').minicolors();
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
