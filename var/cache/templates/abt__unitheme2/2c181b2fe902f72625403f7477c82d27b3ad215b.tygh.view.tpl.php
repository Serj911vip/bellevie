<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:11:23
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\ip5_theme_addon\overrides\views\categories\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17452289585e4bfe9b1bec53-08980075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c181b2fe902f72625403f7477c82d27b3ad215b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\ip5_theme_addon\\overrides\\views\\categories\\view.tpl',
      1 => 1568896348,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17452289585e4bfe9b1bec53-08980075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'category_data' => 0,
    'block' => 0,
    'products' => 0,
    'selected_layout' => 0,
    'layouts' => 0,
    'product_columns' => 0,
    'subcategories' => 0,
    'show_no_products_block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfe9b20fb43_81986978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfe9b20fb43_81986978')) {function content_5e4bfe9b20fb43_81986978($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_live_edit')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('text_no_products','text_no_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ut2-cat-container<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position']=='bottom') {?> reverse<?php }?>">
        <?php if (($_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'])) {?>
            <div class="ty-wysiwyg-content ty-mb-s" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
        <?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position']!='none') {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>

        <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
                    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0);?>

                <?php }?>

            <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
                <p class="ty-no-items cm-pagination-container"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
            <?php } else { ?>
                <div class="cm-pagination-container"></div>
            <?php }?>
        <!--category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="C:/OSPanel/domains/bellevie.gift/design/themes/abt__unitheme2/templates/addons/ip5_theme_addon/overrides/views/categories/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"C:/OSPanel/domains/bellevie.gift/design/themes/abt__unitheme2/templates/addons/ip5_theme_addon/overrides/views/categories/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <div class="ut2-cat-container<?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position']=='bottom') {?> reverse<?php }?>">
        <?php if (($_smarty_tpl->tpl_vars['category_data']->value['description']||$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'])) {?>
            <div class="ty-wysiwyg-content ty-mb-s" <?php echo smarty_function_live_edit(array('name'=>"category:description:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['category_data']->value['description'];?>
</div>
        <?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['category']['description_position']!='none') {?>
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"categories:view_description")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"categories:view_description"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view_description"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <?php }?>

        <div class="cat-view-grid" id="category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
            <?php echo $_smarty_tpl->getSubTemplate ("views/categories/components/subcategories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


            <?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
                <?php $_smarty_tpl->tpl_vars["layouts"] = new Smarty_variable(fn_get_products_views('',false,0), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['category_data']->value['product_columns']) {?>
                    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['category_data']->value['product_columns'], null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars["product_columns"] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Appearance']['columns_in_products_list'], null, 0);?>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['layouts']->value[$_smarty_tpl->tpl_vars['selected_layout']->value]['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('columns'=>$_smarty_tpl->tpl_vars['product_columns']->value), 0);?>

                <?php }?>

            <?php } elseif (!$_smarty_tpl->tpl_vars['subcategories']->value||$_smarty_tpl->tpl_vars['show_no_products_block']->value) {?>
                <p class="ty-no-items cm-pagination-container"><?php echo $_smarty_tpl->__("text_no_products");?>
</p>
            <?php } else { ?>
                <div class="cm-pagination-container"></div>
            <?php }?>
        <!--category_products_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span <?php echo smarty_function_live_edit(array('name'=>"category:category:".((string)$_smarty_tpl->tpl_vars['category_data']->value['category_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['category'], ENT_QUOTES, 'UTF-8');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"categories:view"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);
}?><?php }} ?>
