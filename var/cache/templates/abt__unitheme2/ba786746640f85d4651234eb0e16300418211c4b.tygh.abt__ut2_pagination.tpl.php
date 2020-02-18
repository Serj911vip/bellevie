<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:11:36
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\common\abt__ut2_pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13658043545e4bfea88ab1d4-93975262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba786746640f85d4651234eb0e16300418211c4b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\common\\abt__ut2_pagination.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13658043545e4bfea88ab1d4-93975262',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'search' => 0,
    'type' => 0,
    'position' => 0,
    'id' => 0,
    'p' => 0,
    'left_products' => 0,
    'config' => 0,
    'c_url' => 0,
    'extra_url' => 0,
    'object' => 0,
    'show_more' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfea8916c39_19533603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfea8916c39_19533603')) {function content_5e4bfea8916c39_19533603($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('abt__ut2.load_more.show_more.','abt__ut2.load_more.show_more.'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['p'] = new Smarty_variable(fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['position']->value=='top') {?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['position']->value=='bottom') {?>
    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['p']->value['next_page']>$_smarty_tpl->tpl_vars['p']->value['current_page']) {?>
        <div class="ut2-load-more-container" id="load_more_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->tpl_vars['show_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value['items_per_page'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['left_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value['total_items']-($_smarty_tpl->tpl_vars['p']->value['items_per_page']*$_smarty_tpl->tpl_vars['p']->value['current_page']), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['left_products']->value<$_smarty_tpl->tpl_vars['p']->value['items_per_page']) {
$_smarty_tpl->tpl_vars['show_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['left_products']->value, null, 0);
}?>
            <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"page"), null, 0);?>
            <span class="ut2-load-more" data-ut2-load-more-url="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['p']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ut2-load-more-result-ids="<?php echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents", ENT_QUOTES, 'UTF-8');?>
,load_more_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_pagination_contents,pagination_block,pagination_block_bottom"><i class="loader"></i><?php echo $_smarty_tpl->__("abt__ut2.load_more.show_more.".((string)$_smarty_tpl->tpl_vars['object']->value),array($_smarty_tpl->tpl_vars['show_more']->value));?>
</span>
        <!--load_more_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/abt__ut2_pagination.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/abt__ut2_pagination.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['p'] = new Smarty_variable(fn_generate_pagination($_smarty_tpl->tpl_vars['search']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['id'] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['position']->value=='top') {?>
    <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php } elseif ($_smarty_tpl->tpl_vars['position']->value=='bottom') {?>
    <!--<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

    <?php if ($_smarty_tpl->tpl_vars['p']->value['next_page']>$_smarty_tpl->tpl_vars['p']->value['current_page']) {?>
        <div class="ut2-load-more-container" id="load_more_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->tpl_vars['show_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value['items_per_page'], null, 0);?>
            <?php $_smarty_tpl->tpl_vars['left_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value['total_items']-($_smarty_tpl->tpl_vars['p']->value['items_per_page']*$_smarty_tpl->tpl_vars['p']->value['current_page']), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['left_products']->value<$_smarty_tpl->tpl_vars['p']->value['items_per_page']) {
$_smarty_tpl->tpl_vars['show_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['left_products']->value, null, 0);
}?>
            <?php $_smarty_tpl->tpl_vars["c_url"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"page"), null, 0);?>
            <span class="ut2-load-more" data-ut2-load-more-url="<?php echo htmlspecialchars(fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&page=".((string)$_smarty_tpl->tpl_vars['p']->value['next_page']).((string)$_smarty_tpl->tpl_vars['extra_url']->value)), ENT_QUOTES, 'UTF-8');?>
" data-ut2-load-more-result-ids="<?php echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['type']->value)."_pagination_contents", ENT_QUOTES, 'UTF-8');?>
,load_more_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
_pagination_contents,pagination_block,pagination_block_bottom"><i class="loader"></i><?php echo $_smarty_tpl->__("abt__ut2.load_more.show_more.".((string)$_smarty_tpl->tpl_vars['object']->value),array($_smarty_tpl->tpl_vars['show_more']->value));?>
</span>
        <!--load_more_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>
<?php }?>
<?php }?><?php }} ?>
