<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:11:22
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\blocks\static_templates\abt__ut2__categories_title_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18389290715e4bfe9a4dcaa7-04868937%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2a38f20c5ef7cdcf3fe5c9a46d5c3ce3879c096' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\blocks\\static_templates\\abt__ut2__categories_title_block.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18389290715e4bfe9a4dcaa7-04868937',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'category_data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfe9a558d52_72059286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfe9a558d52_72059286')) {function content_5e4bfe9a558d52_72059286($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<div class="ut2-extra-block-title">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:categories_title_wrapper")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <h1 class="ty-mainbox-title">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:categories_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:categories_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:categories_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h1>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
   
	<?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/abt__ut2__categories_title_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/abt__ut2__categories_title_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<div class="ut2-extra-block-title">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:categories_title_wrapper")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <h1 class="ty-mainbox-title">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:categories_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:categories_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:categories_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h1>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:categories_title_wrapper"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
   
	<?php echo $_smarty_tpl->getSubTemplate ("common/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<?php }?><?php }} ?>
