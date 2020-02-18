<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:26
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\abt__unitheme2\hooks\index\footer.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13343009195e4bfa6612f425-53150574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1139ebad74e229b1d0bd9a670bff6c9b32a8e3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\abt__unitheme2\\hooks\\index\\footer.post.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13343009195e4bfa6612f425-53150574',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa6613ccd7_73551815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa6613ccd7_73551815')) {function content_5e4bfa6613ccd7_73551815($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['data'] = new Smarty_variable(fn_abt__ut2_get_microdata(''), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>

    <?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['data'] = new Smarty_variable(fn_abt__ut2_get_microdata(''), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php echo '<script'; ?>
 type="application/ld+json">
        <?php echo json_encode($_smarty_tpl->tpl_vars['data']->value);?>

    <?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
