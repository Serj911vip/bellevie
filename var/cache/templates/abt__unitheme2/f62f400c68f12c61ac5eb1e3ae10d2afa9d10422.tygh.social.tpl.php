<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:19
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\blocks\static_templates\social.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15685834005e4bfa5fb03034-39650238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f62f400c68f12c61ac5eb1e3ae10d2afa9d10422' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\blocks\\static_templates\\social.tpl',
      1 => 1568725516,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15685834005e4bfa5fb03034-39650238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5fb0e3e8_69659712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5fb0e3e8_69659712')) {function content_5e4bfa5fb0e3e8_69659712($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><a class="social-link">
    <span>Обратиться к нам</span>
</a>
<div class="social-box">
    <p> Возникли вопросы?Напишите нам в форму обратной связи или в мессенджер (звонки не поддерживаются) </p>
    
    <div class="social-items">
        <div class="social-items__item"><i class="ut2-icon-viber"></i> <span>Viber</span> <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</a></div>
        <div class="social-items__item"><i class="ut2-icon-instagram"></i> <span>Insta</span> <a href="https://www.instagram.com/bellevie.gift/" target="_blank"> <span>Подписаться</spam></a></div>
        <div class="social-items__item"><i class="ut2-icon-facebook"></i> <span>Facebook</span> <a href="https://www.facebook.com/bellevie.gift/" target="_blank"> <span>Написать сообщение</spam></a></div>
        <div class="social-items__item"><i class="ut2-icon-vk"></i> <span>VK</span></span> <a href="https://vk.com/bellevie.gift" target="_blank"> <span>Написать сообщение</spam></a></div>
    </div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/social.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/social.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><a class="social-link">
    <span>Обратиться к нам</span>
</a>
<div class="social-box">
    <p> Возникли вопросы?Напишите нам в форму обратной связи или в мессенджер (звонки не поддерживаются) </p>
    
    <div class="social-items">
        <div class="social-items__item"><i class="ut2-icon-viber"></i> <span>Viber</span> <a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</a></div>
        <div class="social-items__item"><i class="ut2-icon-instagram"></i> <span>Insta</span> <a href="https://www.instagram.com/bellevie.gift/" target="_blank"> <span>Подписаться</spam></a></div>
        <div class="social-items__item"><i class="ut2-icon-facebook"></i> <span>Facebook</span> <a href="https://www.facebook.com/bellevie.gift/" target="_blank"> <span>Написать сообщение</spam></a></div>
        <div class="social-items__item"><i class="ut2-icon-vk"></i> <span>VK</span></span> <a href="https://vk.com/bellevie.gift" target="_blank"> <span>Написать сообщение</spam></a></div>
    </div>
</div>
<?php }?><?php }} ?>
