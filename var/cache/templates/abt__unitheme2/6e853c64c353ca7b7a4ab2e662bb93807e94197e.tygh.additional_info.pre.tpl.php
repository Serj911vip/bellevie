<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:11:39
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\product_variations\hooks\products\additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17104900325e4bfeab0d4ee1-95814195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e853c64c353ca7b7a4ab2e662bb93807e94197e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\product_variations\\hooks\\products\\additional_info.pre.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17104900325e4bfeab0d4ee1-95814195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'show_features' => 0,
    'product' => 0,
    'variation_feature' => 0,
    'limit' => 0,
    'variant' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfeab133986_02164476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfeab133986_02164476')) {function content_5e4bfeab133986_02164476($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.count.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('more','more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
$_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['limit_product_variations'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_features_variants", null, null); ob_start(); ?>
        <?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] = fn_abt__ut2_prepare_variation_features_variants($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'],$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']);?>

        <?php  $_smarty_tpl->tpl_vars['variation_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variation_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->key => $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog']==="Y") {?>
                <?php if ($_smarty_tpl->tpl_vars['limit']->value>0) {?>
                <div class="ut2-lv__features-item">
                    <p class="ut2-lv__features-description">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                    </p>

                    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['variants']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['variants']['iteration']++;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['variants']['iteration']<=$_smarty_tpl->tpl_vars['limit']->value) {?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['filter_style']=='color') {?>
                            <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                        <?php } else { ?>
                            <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>">
	                       <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

	                    </span>
                        <?php }?>
						<?php }?>
                    <?php } ?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])>$_smarty_tpl->tpl_vars['limit']->value) {?><span class="ut2-lv__more">(<?php echo $_smarty_tpl->__("more");?>
 +<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])-$_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
)</span><?php }?>
                </div>
                <?php }?>
            <?php }?>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['variation_features_variants'])) {?>
        <div class="ut2-lv__item-features">
            <?php echo Smarty::$_smarty_vars['capture']['variation_features_variants'];?>

        </div>
    <?php }?>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/additional_info.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/additional_info.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
$_smarty_tpl->tpl_vars['limit'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['product_list']['limit_product_variations'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['show_features']->value&&$_smarty_tpl->tpl_vars['product']->value['variation_features_variants']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_features_variants", null, null); ob_start(); ?>
        <?php $_smarty_tpl->createLocalArrayVariable('product', null, 0);
$_smarty_tpl->tpl_vars['product']->value['variation_features_variants'] = fn_abt__ut2_prepare_variation_features_variants($_smarty_tpl->tpl_vars['product']->value['variation_features_variants'],$_smarty_tpl->tpl_vars['product']->value['abt__ut2_features']);?>

        <?php  $_smarty_tpl->tpl_vars['variation_feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variation_feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['variation_features_variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variation_feature']->key => $_smarty_tpl->tpl_vars['variation_feature']->value) {
$_smarty_tpl->tpl_vars['variation_feature']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['display_on_catalog']==="Y") {?>
                <?php if ($_smarty_tpl->tpl_vars['limit']->value>0) {?>
                <div class="ut2-lv__features-item">
                    <p class="ut2-lv__features-description">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
                    </p>

                    <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['variation_feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['variants']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['variants']['iteration']++;
?>
						<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['variants']['iteration']<=$_smarty_tpl->tpl_vars['limit']->value) {?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['variation_feature']->value['filter_style']=='color') {?>
                            <span class="ut2-lv__color-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['color'], ENT_QUOTES, 'UTF-8');?>
">&nbsp;</span>
                        <?php } else { ?>
                            <span class="ut2-lv__features-variant<?php if ($_smarty_tpl->tpl_vars['variant']->value['active']) {?> active<?php }?>">
	                       <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>

	                    </span>
                        <?php }?>
						<?php }?>
                    <?php } ?>
                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])>$_smarty_tpl->tpl_vars['limit']->value) {?><span class="ut2-lv__more">(<?php echo $_smarty_tpl->__("more");?>
 +<?php echo htmlspecialchars(smarty_modifier_count($_smarty_tpl->tpl_vars['variation_feature']->value['variants'])-$_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
)</span><?php }?>
                </div>
                <?php }?>
            <?php }?>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php if (trim(Smarty::$_smarty_vars['capture']['variation_features_variants'])) {?>
        <div class="ut2-lv__item-features">
            <?php echo Smarty::$_smarty_vars['capture']['variation_features_variants'];?>

        </div>
    <?php }?>
<?php }
}?><?php }} ?>
