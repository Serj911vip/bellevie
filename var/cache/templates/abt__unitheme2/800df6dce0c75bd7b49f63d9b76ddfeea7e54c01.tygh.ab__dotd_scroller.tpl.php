<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:19
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\ab__deal_of_the_day\blocks\promotions\ab__dotd_scroller.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16174824055e4bfa5f9364e1-84235123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800df6dce0c75bd7b49f63d9b76ddfeea7e54c01' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\ab__deal_of_the_day\\blocks\\promotions\\ab__dotd_scroller.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16174824055e4bfa5f9364e1-84235123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'block' => 0,
    'obj_prefix' => 0,
    'promotion' => 0,
    'image_height' => 0,
    'days_left' => 0,
    'addons' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5f9919c5_53409151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5f9919c5_53409151')) {function content_5e4bfa5f9919c5_53409151($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('active_promotions','active_promotions'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable("320", null, 0);?>
<?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable("195", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
        <div class="owl-theme ty-owl-controls">
            <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="owl-buttons">
                    <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ty-icon-left-open-thin"></i></div>
                    <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ty-icon-right-open-thin"></i></div>
                </div>
            </div>
        </div>
    <?php }?>
    <div class="ab__dotd_promotions scroller">
        <div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list">
            <?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['status']=="A") {?>
                    <div class="ab__dotd_promotions-item">
                        <div class="ab__dotd_promotions-item_image <?php if ($_smarty_tpl->tpl_vars['promotion']->value['list_pair']==0) {?>no-image<?php }?>" style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_height']->value, ENT_QUOTES, 'UTF-8');?>
px">
                            <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title="">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['list_pair'],'image_width'=>((string)$_smarty_tpl->tpl_vars['image_width']->value),'image_height'=>((string)$_smarty_tpl->tpl_vars['image_height']->value)), 0);?>

                            </a>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <?php $_smarty_tpl->tpl_vars["days_left"] = new Smarty_variable(ceil((($_smarty_tpl->tpl_vars['promotion']->value['to_date']-time())/86400)), null, 0);?>
                            <div class="ab__dotd_promotions-item_days_left<?php if ($_smarty_tpl->tpl_vars['days_left']->value<=$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['highlight_when_left']) {?> ab__dotd_highlight<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['days_left']->value>1) {?>
                                    <?php echo $_smarty_tpl->__('ab__dotd.days_left',array($_smarty_tpl->tpl_vars['days_left']->value));?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->__('ab__dotd.today_only');?>

                                <?php }?>
                            </div>
                        <?php }?>

                        <div class="ab__dotd_promotions-item_date">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </div>
                        <div class="ab__dotd_promotions-item_title"><a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a></div>
                    </div>
                <?php }?>
            <?php } ?>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url("promotions.list"),'but_text'=>$_smarty_tpl->__("active_promotions"),'but_icon'=>"ut2-icon-right",'but_meta'=>"ty-btn__primary ut2-promotions__button"), 0);?>


<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/ab__deal_of_the_day/blocks/promotions/ab__dotd_scroller.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/ab__deal_of_the_day/blocks/promotions/ab__dotd_scroller.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php $_smarty_tpl->tpl_vars['image_width'] = new Smarty_variable("320", null, 0);?>
<?php $_smarty_tpl->tpl_vars['image_height'] = new Smarty_variable("195", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation']=="Y") {?>
        <div class="owl-theme ty-owl-controls">
            <div class="owl-controls clickable owl-controls-outside" id="owl_outside_nav_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="owl-buttons">
                    <div id="owl_prev_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-prev"><i class="ty-icon-left-open-thin"></i></div>
                    <div id="owl_next_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');?>
" class="owl-next"><i class="ty-icon-right-open-thin"></i></div>
                </div>
            </div>
        </div>
    <?php }?>
    <div class="ab__dotd_promotions scroller">
        <div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list">
            <?php  $_smarty_tpl->tpl_vars["promotion"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["promotion"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["promotion"]->key => $_smarty_tpl->tpl_vars["promotion"]->value) {
$_smarty_tpl->tpl_vars["promotion"]->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['promotion']->value['status']=="A") {?>
                    <div class="ab__dotd_promotions-item">
                        <div class="ab__dotd_promotions-item_image <?php if ($_smarty_tpl->tpl_vars['promotion']->value['list_pair']==0) {?>no-image<?php }?>" style="max-height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_height']->value, ENT_QUOTES, 'UTF-8');?>
px">
                            <a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title="">
                                <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['promotion']->value['list_pair'],'image_width'=>((string)$_smarty_tpl->tpl_vars['image_width']->value),'image_height'=>((string)$_smarty_tpl->tpl_vars['image_height']->value)), 0);?>

                            </a>
                        </div>

                        <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                            <?php $_smarty_tpl->tpl_vars["days_left"] = new Smarty_variable(ceil((($_smarty_tpl->tpl_vars['promotion']->value['to_date']-time())/86400)), null, 0);?>
                            <div class="ab__dotd_promotions-item_days_left<?php if ($_smarty_tpl->tpl_vars['days_left']->value<=$_smarty_tpl->tpl_vars['addons']->value['ab__deal_of_the_day']['highlight_when_left']) {?> ab__dotd_highlight<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['days_left']->value>1) {?>
                                    <?php echo $_smarty_tpl->__('ab__dotd.days_left',array($_smarty_tpl->tpl_vars['days_left']->value));?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->__('ab__dotd.today_only');?>

                                <?php }?>
                            </div>
                        <?php }?>

                        <div class="ab__dotd_promotions-item_date">
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['from_date']) {?>
                                <?php echo $_smarty_tpl->__('ab__dotd.from');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['from_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['promotion']->value['to_date']) {?>
                                <?php echo $_smarty_tpl->__('ab__dotd.to');?>
 <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['promotion']->value['to_date'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        </div>
                        <div class="ab__dotd_promotions-item_title"><a href="<?php echo htmlspecialchars(fn_url("promotions.view?promotion_id=".((string)$_smarty_tpl->tpl_vars['promotion']->value['promotion_id'])), ENT_QUOTES, 'UTF-8');?>
" title=""><?php echo $_smarty_tpl->tpl_vars['promotion']->value['name'];?>
</a></div>
                    </div>
                <?php }?>
            <?php } ?>
        </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init_with_quantity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prev_selector'=>"#owl_prev_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value),'next_selector'=>"#owl_next_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value)), 0);?>


	<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url("promotions.list"),'but_text'=>$_smarty_tpl->__("active_promotions"),'but_icon'=>"ut2-icon-right",'but_meta'=>"ty-btn__primary ut2-promotions__button"), 0);?>


<?php }
}?><?php }} ?>
