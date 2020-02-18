<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:19
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\ip5_theme_addon\blocks\static_templates\logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16019588615e4bfa5fa7b444-53430310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5f4a41c927cb2f928c34545efb3bd3d038f7beb' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\ip5_theme_addon\\blocks\\static_templates\\logo.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16019588615e4bfa5fa7b444-53430310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'logos' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5fa962c8_38710500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5fa962c8_38710500')) {function content_5e4bfa5fa962c8_38710500($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="index") {?>
	<div class="ty-logo-container">
		<img src="/design/themes/abt__unitheme2/media/images/bellevie/belle_vie_logo.svg" class="ty-logo-container__image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" />
	</div>
<?php } else { ?>
	<a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="ty-logo-container">
			<img src="/design/themes/abt__unitheme2/media/images/bellevie/belle_vie_logo.svg" class="ty-logo-container__image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" />
		</div>
	</a>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ip5_theme_addon/blocks/static_templates/logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ip5_theme_addon/blocks/static_templates/logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=="index") {?>
	<div class="ty-logo-container">
		<img src="/design/themes/abt__unitheme2/media/images/bellevie/belle_vie_logo.svg" class="ty-logo-container__image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" />
	</div>
<?php } else { ?>
	<a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="ty-logo-container">
			<img src="/design/themes/abt__unitheme2/media/images/bellevie/belle_vie_logo.svg" class="ty-logo-container__image" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" />
		</div>
	</a>
<?php }
}?><?php }} ?>
