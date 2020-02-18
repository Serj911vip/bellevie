<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:11
         compiled from "C:\OSPanel\domains\bellevie.gift\design\themes\abt__unitheme2\templates\addons\abt__unitheme2\blocks\components\abt__ut2_banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1965178165e4bfa576a4c56-39502789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18a51d73b31a9c0ee052fa67e2a6d6706d6f7d25' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\themes\\abt__unitheme2\\templates\\addons\\abt__unitheme2\\blocks\\components\\abt__ut2_banner.tpl',
      1 => 1568717952,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1965178165e4bfa576a4c56-39502789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'b' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa5797cf30_12556163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa5797cf30_12556163')) {function content_5e4bfa5797cf30_12556163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ut2-banner ut2-settings-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_device_settings'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'], ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    <a <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>data-content="video"<?php }?>
       href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>>
        <?php }?>
        <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color']=='#ffffff'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=="Y") {?> white-bg<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'], ENT_QUOTES, 'UTF-8');?>
"
             data-style-lazy-load="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=='Y'||!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'])) {?>background:<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=='Y') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'], ENT_QUOTES, 'UTF-8');
}
if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'])) {?> url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
') no-repeat center; background-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size'], ENT_QUOTES, 'UTF-8');
}?>;<?php }?>" style="margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;">
            <div class="bg-opacity-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'], ENT_QUOTES, 'UTF-8');?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="ut2-a__content valign-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;">
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='image'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
                        <div class="ut2-a__img width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']=="Y") {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;">
	                        <img class="lazyOwl" src="." data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['alt'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['alt'], ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>
                        <div class="ut2-a__img ut2-a__video width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']=="Y") {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;" data-banner-youtube-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
" data-banner-youtube-params="<?php echo htmlspecialchars(fn_abt__ut2_build_youtube_link($_smarty_tpl->tpl_vars['b']->value,true), ENT_QUOTES, 'UTF-8');?>
&enablejsapi=1&version=3">
	                        <img data-type="youtube-img" class="lazyOwl" src="." data-src="https://img.youtube.com/vi/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
/maxresdefault.jpg" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title']), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php }?>

                    <div class="ut2-a__decription width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']=="Y") {?>-full<?php } else { ?>-half<?php }?>">
                        <div class="box" style="<?php if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'])) {?>padding:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
                            <<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_shadow']=="Y") {?>shadow<?php }?>
                            weight-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_weight'], ENT_QUOTES, 'UTF-8');?>
" style="font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_size'], ENT_QUOTES, 'UTF-8');?>

                            ;<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
                            "><?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'];?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
>
                        <div class="ut2-a__descr" style="
	                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
		                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use']=='Y') {?>background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
;
			                <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color']) {?>position: relative;left: 5px;display: inline;padding: 1px 0 3px;box-shadow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 -5px 0 0 0, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 5px 0 0 0;<?php }
}?>
					        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size']) {?>font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
						    <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'];?>

						</div>

						<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='Y'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
			                <div class="ut2-a__button">
			                    <a class="ty-btn ty-btn__primary" style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use']=='Y') {?>background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'])===null||$tmp==='' ? "button" : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
			                </div>
		                <?php }?>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    </a>
<?php }?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/abt__unitheme2/blocks/components/abt__ut2_banner.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ut2-banner ut2-settings-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_device_settings'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_class'], ENT_QUOTES, 'UTF-8');?>
">

    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    <a <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>data-content="video"<?php }?>
       href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>>
        <?php }?>
        <div class="ut2-a__bg-banner<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color']=='#ffffff'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=="Y") {?> white-bg<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_color_scheme'], ENT_QUOTES, 'UTF-8');?>
"
             data-style-lazy-load="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=='Y'||!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'])) {?>background:<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color_use']=='Y') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_color'], ENT_QUOTES, 'UTF-8');
}
if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'])) {?> url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
') no-repeat center; background-size:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_background_image_size'], ENT_QUOTES, 'UTF-8');
}?>;<?php }?>" style="margin:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['margin'], ENT_QUOTES, 'UTF-8');?>
;height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;">
            <div class="bg-opacity-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_bg'], ENT_QUOTES, 'UTF-8');?>
" data-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['banner_id'], ENT_QUOTES, 'UTF-8');?>
">
                <div class="ut2-a__content valign-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_valign'], ENT_QUOTES, 'UTF-8');?>
 align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_align'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?> internal-image<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;">
                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='image'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path']) {?>
                        <div class="ut2-a__img width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']=="Y") {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;">
	                        <img class="lazyOwl" src="." data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['image_path'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['alt'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_main_image']['icon']['alt'], ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_object']=='video'&&$_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id']) {?>
                        <div class="ut2-a__img ut2-a__video width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']=="Y") {?>-full<?php } else { ?>-half<?php }?>" style="height: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['properties']['height'], ENT_QUOTES, 'UTF-8');?>
;" data-banner-youtube-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
" data-banner-youtube-params="<?php echo htmlspecialchars(fn_abt__ut2_build_youtube_link($_smarty_tpl->tpl_vars['b']->value,true), ENT_QUOTES, 'UTF-8');?>
&enablejsapi=1&version=3">
	                        <img data-type="youtube-img" class="lazyOwl" src="." data-src="https://img.youtube.com/vi/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_youtube_id'], ENT_QUOTES, 'UTF-8');?>
/maxresdefault.jpg" alt="<?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title']), ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                    <?php }?>

                    <div class="ut2-a__decription width<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_content_full_width']=="Y") {?>-full<?php } else { ?>-half<?php }?>">
                        <div class="box" style="<?php if (!empty($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'])) {?>padding:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_padding'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
                            <<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
 class="ut2-a__title <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_shadow']=="Y") {?>shadow<?php }?>
                            weight-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_weight'], ENT_QUOTES, 'UTF-8');?>
" style="font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_font_size'], ENT_QUOTES, 'UTF-8');?>

                            ;<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
                            "><?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_title'];?>
</<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_title_tag'], ENT_QUOTES, 'UTF-8');?>
>
                        <div class="ut2-a__descr" style="
	                        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>
		                    <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color_use']=='Y') {?>background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
;
			                <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color']) {?>position: relative;left: 5px;display: inline;padding: 1px 0 3px;box-shadow: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 -5px 0 0 0, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_bg_color'], ENT_QUOTES, 'UTF-8');?>
 5px 0 0 0;<?php }
}?>
					        <?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size']) {?>font-size: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_description_font_size'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>">
						    <?php echo $_smarty_tpl->tpl_vars['b']->value['abt__ut2_description'];?>

						</div>

						<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='Y'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
			                <div class="ut2-a__button">
			                    <a class="ty-btn ty-btn__primary" style="<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color_use']=='Y') {?>color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color_use']=='Y') {?>background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_color'], ENT_QUOTES, 'UTF-8');?>
;<?php }?>" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url']), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_how_to_open']=='in_new_window') {?> target="_blank"<?php }?>><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_text'])===null||$tmp==='' ? "button" : $tmp), ENT_QUOTES, 'UTF-8');?>
</a>
			                </div>
		                <?php }?>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['b']->value['abt__ut2_button_use']=='N'&&trim($_smarty_tpl->tpl_vars['b']->value['abt__ut2_url'])) {?>
    </a>
<?php }?>
</div><?php }?><?php }} ?>
