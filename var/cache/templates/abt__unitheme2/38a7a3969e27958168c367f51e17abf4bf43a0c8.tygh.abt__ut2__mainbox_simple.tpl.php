<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:11:40
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\blocks\wrappers\abt__ut2__mainbox_simple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10891547115e4bfeaca17e56-50456152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a7a3969e27958168c367f51e17abf4bf43a0c8' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\blocks\\wrappers\\abt__ut2__mainbox_simple.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10891547115e4bfeaca17e56-50456152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'hide_wrapper' => 0,
    'block' => 0,
    'content_alignment' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfeaca5c8c7_45905986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfeaca5c8c7_45905986')) {function content_5e4bfeaca5c8c7_45905986($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-mainbox-simple-container clearfix<?php if (isset($_smarty_tpl->tpl_vars['hide_wrapper']->value)) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['title']->value||trim(Smarty::$_smarty_vars['capture']['title'])) {?>
            <div class="ty-mainbox-simple-title">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:mainbox_simple_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                    <?php echo Smarty::$_smarty_vars['capture']['title'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <?php }?>
        <div class="ty-mainbox-simple-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </div>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/abt__ut2__mainbox_simple.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/abt__ut2__mainbox_simple.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="ty-mainbox-simple-container clearfix<?php if (isset($_smarty_tpl->tpl_vars['hide_wrapper']->value)) {?> cm-hidden-wrapper<?php }
if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> ty-float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> ty-float-left<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['title']->value||trim(Smarty::$_smarty_vars['capture']['title'])) {?>
            <div class="ty-mainbox-simple-title">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:mainbox_simple_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                    <?php echo Smarty::$_smarty_vars['capture']['title'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                <?php }?>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        <?php }?>
        <div class="ty-mainbox-simple-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
    </div>
<?php }
}?><?php }} ?>
