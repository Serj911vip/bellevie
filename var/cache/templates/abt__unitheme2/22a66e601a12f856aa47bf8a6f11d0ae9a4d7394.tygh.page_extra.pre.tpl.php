<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 18:01:55
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\blog\hooks\pages\page_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20334112715e4bfc63ab3586-64188492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22a66e601a12f856aa47bf8a6f11d0ae9a4d7394' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\blog\\hooks\\pages\\page_extra.pre.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20334112715e4bfc63ab3586-64188492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page' => 0,
    'subpages' => 0,
    'settings' => 0,
    'ut2_load_more' => 0,
    'subpage' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfc63b0cbe6_89347381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfc63b0cbe6_89347381')) {function content_5e4bfc63b0cbe6_89347381($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_live_edit')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('blog.read_more','blog.read_more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_BLOG')) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="ut2-blog">
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php $_smarty_tpl->tpl_vars['ut2_load_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['blog']=='Y', null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp1,'position'=>"top",'object'=>"pages"), 0);
}?>
        <?php  $_smarty_tpl->tpl_vars["subpage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subpage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["subpage"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["subpage"]->key => $_smarty_tpl->tpl_vars["subpage"]->value) {
$_smarty_tpl->tpl_vars["subpage"]->_loop = true;
 $_smarty_tpl->tpl_vars["subpage"]->index++;
 $_smarty_tpl->tpl_vars["subpage"]->first = $_smarty_tpl->tpl_vars["subpage"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["subpages"]['first'] = $_smarty_tpl->tpl_vars["subpage"]->first;
?>
            <div class="ut2-blog__item"<?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['subpages']['first']) {?> data-ut2-load-more="first-item"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['subpage']->value['main_pair']) {?>
	                <div class="ut2-blog__img-block">
		                <div class="ut2-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
	                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['subpage']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['subpage']->value['main_pair'],'image_width'=>380), 0);?>

	                </div>
                <?php }?>
                <div class="ut2-blog__description">
	                <div class="ut2-blog__title-block">
		                <h2 class="ut2-blog__post-title">
		                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'UTF-8');?>

		                </h2>
		            </div>
                    <div class="ty-wysiwyg-content">
                        <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subpage']->value['spoiler']),360,"...");?>
</p>
                    </div>
                    <div class="ut2-blog__read-more">
                        <a class="ty-btn ty-btn__primary" href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("blog.read_more");?>
</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp2,'position'=>"bottom",'object'=>"pages"), 0);
}?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ut2-blog__post-title" <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/hooks/pages/page_extra.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/hooks/pages/page_extra.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['page']->value['page_type']==@constant('PAGE_TYPE_BLOG')) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start();
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="ut2-blog">
        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php $_smarty_tpl->tpl_vars['ut2_load_more'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['abt__ut2']['load_more']['blog']=='Y', null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp3,'position'=>"top",'object'=>"pages"), 0);
}?>
        <?php  $_smarty_tpl->tpl_vars["subpage"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subpage"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subpages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["subpage"]->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars["subpage"]->key => $_smarty_tpl->tpl_vars["subpage"]->value) {
$_smarty_tpl->tpl_vars["subpage"]->_loop = true;
 $_smarty_tpl->tpl_vars["subpage"]->index++;
 $_smarty_tpl->tpl_vars["subpage"]->first = $_smarty_tpl->tpl_vars["subpage"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["subpages"]['first'] = $_smarty_tpl->tpl_vars["subpage"]->first;
?>
            <div class="ut2-blog__item"<?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value&&$_smarty_tpl->getVariable('smarty')->value['foreach']['subpages']['first']) {?> data-ut2-load-more="first-item"<?php }?>>
                <?php if ($_smarty_tpl->tpl_vars['subpage']->value['main_pair']) {?>
	                <div class="ut2-blog__img-block">
		                <div class="ut2-blog__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
	                    <?php echo $_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('obj_id'=>$_smarty_tpl->tpl_vars['subpage']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['subpage']->value['main_pair'],'image_width'=>380), 0);?>

	                </div>
                <?php }?>
                <div class="ut2-blog__description">
	                <div class="ut2-blog__title-block">
		                <h2 class="ut2-blog__post-title">
		                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'UTF-8');?>

		                </h2>
		            </div>
                    <div class="ty-wysiwyg-content">
                        <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['subpage']->value['spoiler']),360,"...");?>
</p>
                    </div>
                    <div class="ut2-blog__read-more">
                        <a class="ty-btn ty-btn__primary" href="<?php echo htmlspecialchars(fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("blog.read_more");?>
</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if ($_smarty_tpl->tpl_vars['ut2_load_more']->value) {
ob_start();
echo htmlspecialchars(((string)$_smarty_tpl->tpl_vars['runtime']->value['controller'])."_".((string)$_smarty_tpl->tpl_vars['runtime']->value['mode']), ENT_QUOTES, 'UTF-8');
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/abt__ut2_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('type'=>$_tmp4,'position'=>"bottom",'object'=>"pages"), 0);
}?>

        <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ut2-blog__post-title" <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php }
}?><?php }} ?>
