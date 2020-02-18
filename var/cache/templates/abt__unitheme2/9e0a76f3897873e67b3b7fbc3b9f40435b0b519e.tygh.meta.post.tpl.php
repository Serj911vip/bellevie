<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:06
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\abt__unitheme2\hooks\index\meta.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11376529975e4bfa5277c9a2-49629819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e0a76f3897873e67b3b7fbc3b9f40435b0b519e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\abt__unitheme2\\hooks\\index\\meta.post.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11376529975e4bfa5277c9a2-49629819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'meta_description' => 0,
    'location_data' => 0,
    'config' => 0,
    'category_data' => 0,
    'product' => 0,
    'page' => 0,
    'variant_data' => 0,
    'logos' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa527b21b2_41150159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa527b21b2_41150159')) {function content_5e4bfa527b21b2_41150159($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><meta property="og:type" content="website" />
<meta property="og:locale" content="<?php echo htmlspecialchars(fn_abt__ut2_get_locale(''), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:title" content="<?php echo trim(preg_replace('!\s+!u', ' ',Smarty::$_smarty_vars['capture']['page_title']));?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((($tmp = @html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,@constant('ENT_COMPAT'),"UTF-8"))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:url" content="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='categories'&&$_smarty_tpl->tpl_vars['category_data']->value&&$_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='products'&&$_smarty_tpl->tpl_vars['product']->value&&$_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='pages'&&$_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='product_features'&&$_smarty_tpl->tpl_vars['variant_data']->value&&$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"abt__unitheme:og_image")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <meta property="og:image" content=" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/hooks/index/meta.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/hooks/index/meta.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><meta property="og:type" content="website" />
<meta property="og:locale" content="<?php echo htmlspecialchars(fn_abt__ut2_get_locale(''), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:title" content="<?php echo trim(preg_replace('!\s+!u', ' ',Smarty::$_smarty_vars['capture']['page_title']));?>
" />
<meta property="og:description" content="<?php echo htmlspecialchars((($tmp = @html_entity_decode($_smarty_tpl->tpl_vars['meta_description']->value,@constant('ENT_COMPAT'),"UTF-8"))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['location_data']->value['meta_description'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<meta property="og:url" content="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');?>
" />
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='categories'&&$_smarty_tpl->tpl_vars['category_data']->value&&$_smarty_tpl->tpl_vars['category_data']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='products'&&$_smarty_tpl->tpl_vars['product']->value&&$_smarty_tpl->tpl_vars['product']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['main_pair']['detailed']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='pages'&&$_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['page']->value['main_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['main_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller']=='product_features'&&$_smarty_tpl->tpl_vars['variant_data']->value&&$_smarty_tpl->tpl_vars['variant_data']->value['image_pair']) {?>
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant_data']->value['image_pair']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
<?php } else { ?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"abt__unitheme:og_image")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <meta property="og:image" content=" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"abt__unitheme:og_image"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }?><?php }} ?>
