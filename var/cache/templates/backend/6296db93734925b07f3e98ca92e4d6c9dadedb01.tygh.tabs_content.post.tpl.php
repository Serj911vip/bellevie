<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:52:42
         compiled from "C:\OSPanel\domains\bellevie.gift\design\backend\templates\addons\ab__motivation_block\hooks\companies\tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9351644225e4bfa3a6cb3d1-83906618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6296db93734925b07f3e98ca92e4d6c9dadedb01' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\backend\\templates\\addons\\ab__motivation_block\\hooks\\companies\\tabs_content.post.tpl',
      1 => 1564578922,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9351644225e4bfa3a6cb3d1-83906618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ab__mb_items' => 0,
    '_key' => 0,
    'ab__mb_item' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa3a6e0e08_13474562',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa3a6e0e08_13474562')) {function content_5e4bfa3a6e0e08_13474562($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('description','no_data'));
?>
<?php if (fn_allowed_for("MULTIVENDOR")) {?>
<div id="content_ab__motivation_block" class="hidden">
<?php if ($_smarty_tpl->tpl_vars['ab__mb_items']->value) {?>
<?php  $_smarty_tpl->tpl_vars["ab__mb_item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ab__mb_item"]->_loop = false;
 $_smarty_tpl->tpl_vars["_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ab__mb_items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ab__mb_item"]->key => $_smarty_tpl->tpl_vars["ab__mb_item"]->value) {
$_smarty_tpl->tpl_vars["ab__mb_item"]->_loop = true;
 $_smarty_tpl->tpl_vars["_key"]->value = $_smarty_tpl->tpl_vars["ab__mb_item"]->key;
?>
<div style="margin: 20px 0">
<input type="hidden" name="ab__mb_items[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][motivation_item_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'], ENT_QUOTES, 'UTF-8');?>
" />
<div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</div>
<div class="control-group">
<label class="control-label" for="ab__mb_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("description");?>
:</label>
<div class="controls">
<textarea id="ab__mb_description_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="ab__mb_items[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_key']->value, ENT_QUOTES, 'UTF-8');?>
][description]" cols="35" rows="8" class="<?php if ($_smarty_tpl->tpl_vars['addons']->value['ab__motivation_block']['description_type']=='html') {?>cm-wysiwyg<?php }?> input-large" style="width: calc(100% - 50px);"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
<a data-ca-field="description" data-ca-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ab__mb_item']->value['motivation_item_id'], ENT_QUOTES, 'UTF-8');?>
" class="btn ab__mb_restore_default" target="_blank" title="<?php echo $_smarty_tpl->__('ab__mb.set_default_value');?>
"><i class="icon-cog"></i></a>
</div>
</div>
</div>
<?php } ?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function (_, $) {
$('.ab__mb_restore_default').click(function () {
var btn = $(this);
var item_id = btn.data('caId');
var field = btn.data('caField');
if (item_id !== undefined && field !== undefined) {
$.ceAjax('request', fn_url("ab__motivation_block.get_default_value"), {
method: 'get',
data: {
motivation_item_id: item_id,
field: field
},
callback: function(data){
var input = btn.closest('.controls').find('*[name$="[' + field + ']"]');
if (data.value !== undefined && input.length) {
if (input.attr('type') == 'checkbox') {
input.prop('checked', (data.value == 'Y'));
} else {
input.val(data.value);
if (input.hasClass('cm-wysiwyg')) {
input.ceEditor('destroy');
input.ceEditor('recover');
}
}
}
}
});
}
});
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
</div>
<?php }?>
<?php }} ?>
