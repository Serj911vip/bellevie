<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2019   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and  accept   *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
if (!defined('BOOTSTRAP')) {die('Access denied');}
use Tygh\Registry;
use Tygh\ABTUT2;
use Tygh\Menu;
use Tygh\Addons\SchemesManager;
use Tygh\Languages\Languages;
use Tygh\BlockManager\Layout;
if ($_SERVER[ab_____(base64_decode('U0ZSVkZUVWBORlVJUEU='))] == ab_____(base64_decode('UVBUVQ=='))) {
if ($mode == ab_____(base64_decode('dnFlYnVmYHRmdXVqb2h0'))) {
call_user_func(ab_____(base64_decode('Z29gdXN2dHVmZWB3YnN0')),ab_____(base64_decode('YmN1YGB2b2p1aWZuZjNgZWJ1Yg==')));
call_user_func(ab_____(base64_decode('Z29gdnFlYnVmYGJjdWBgdnUzYHRmdXVqb2h0')),$_REQUEST[ab_____(base64_decode('YmN1YGB2b2p1aWZuZjNgZWJ1Yg=='))], $_REQUEST[ab_____(base64_decode('YmN1YGB2dTNgdXpxZg=='))], !empty($_REQUEST[ab_____(base64_decode('YmN1YGB2dTNgdHV6bWY='))]) ? $_REQUEST[ab_____(base64_decode('YmN1YGB2dTNgdHV6bWY='))] : '' );
$return = ab_____(base64_decode('YmN1YGB2dTMvdGZ1dWpvaHQ='));
if ($_REQUEST[ab_____(base64_decode('YmN1YGB2dTNgdXpxZg=='))] == ab_____(base64_decode('bWZ0dA=='))){
$return = ab_____(base64_decode('YmN1YGB2dTMvbWZ0dGB0ZnV1am9odEB0dXptZj4=')) . $_REQUEST[ab_____(base64_decode('YmN1YGB2dTNgdHV6bWY='))];
}
return array(CONTROLLER_STATUS_OK, $return);
} elseif ($mode == ab_____(base64_decode('dnFlYnVmYG5qZHNwZWJ1Yg=='))) {
if (!empty($_REQUEST[ab_____(base64_decode('bmpkc3BlYnVi'))])) {
$ids = array();
foreach ($_REQUEST[ab_____(base64_decode('bmpkc3BlYnVi'))] as $microdata) {
if ($id = call_user_func(ab_____(base64_decode('VXpoaV1CQ1VWVTM7O2dvYHZxZWJ1ZmBuamRzcGVidWI=')),$microdata)) {
$ids[] = $id;
}
}
call_user_func(ab_____(base64_decode('VXpoaV1CQ1VWVTM7O2dvYGVmbWZ1ZmBuamRzcGVidWI=')),$ids, true);
}
return array(CONTROLLER_STATUS_OK, ab_____(base64_decode('YmN1YGB2dTMvbmpkc3BlYnVi')));
} elseif ( $mode == ab_____(base64_decode('ZWZucGVidWI=')) ) {
switch ( $action ) {
case ab_____(base64_decode('Y2Jvb2ZzdA==')):
call_user_func(ab_____(base64_decode('Z29gYmN1YGB2dTNgZWZucGVidWJgY2Jvb2ZzdA==')));
break;
case ab_____(base64_decode('bmZvdg==')):
call_user_func(ab_____(base64_decode('Z29gYmN1YGB2dTNgZWZucGVidWJgbmZvdg==')));
break;
case ab_____(base64_decode('Y21waA==')):
call_user_func(ab_____(base64_decode('Z29gYmN1YGB2dTNgZWZucGVidWJgY21waA==')));
break;
case ab_____(base64_decode('cXNwZXZkdXQ=')):
call_user_func(ab_____(base64_decode('Z29gYmN1YGB2dTNgZWZucGVidWJgcXNwZXZkdXQ=')));
break;
case ab_____(base64_decode('Ym1t')):
call_user_func(ab_____(base64_decode('Z29gYmN1YGB2dTNgZWZucGVidWJgam90dWJtbQ==')));
break;
default:
fn_print_die(__('abt__ut2.demodata.errors.no_such_type'));
}
} elseif ( $mode == ab_____(base64_decode('ZnlxcHN1')) ) {
switch ( $action ) {
case 'banners':
fn_abt__ut2_export_banners( $dispatch_extra );
break;
case 'menu':
fn_abt__ut2_export_menu( $dispatch_extra );
break;
case 'blog':
fn_abt__ut2_export_blog();
break;
case 'products':
fn_abt__ut2_export_products( $dispatch_extra );
break;
default:
fn_print_die(__('abt__ut2.export.errors.no_such_type'));
}
} elseif ( $mode == ab_____(base64_decode('bmpoYnNqdWpwb3RgZ3NwbmB2b2p1aWZuZjI=')) ) {
if ( $action == 'update_po' && fn_abt__ut2_mfu1_update_ut1_deleted_lang_vars() ) {
fn_set_notification('N', __('notice'), __('abt__ut2.migaritions_from_unitheme1.update_po.success'));
}
return array(CONTROLLER_STATUS_OK, ab_____(base64_decode('YmN1YGB2dTMvbmpoYnNqdWpwb3RgZ3NwbmB2b2p1aWZuZjIvJWJkdWpwbw==')));
}
return;
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aWZtcQ=='))) {
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmpkc3BlYnVi'))) {
$microdata = call_user_func(ab_____(base64_decode('VXpoaV1CQ1VWVTM7O2dvYGhmdWBuamRzcGVidWI=')),DESCR_SL);
Tygh::$app['view']->assign(ab_____(base64_decode('bmpkc3BlYnVi')), $microdata);
$schema =call_user_func(ab_____(base64_decode('Z29gaGZ1YHRkaWZuYg==')),ab_____(base64_decode('YmN1YGB2dTNgbmpkc3BlYnVi')), ab_____(base64_decode('anVmbnQ=')));
Tygh::$app['view']->assign(ab_____(base64_decode('dGRpZm5i')), $schema);
} elseif (Registry::get(ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dGZ1dWpvaHQ=')) or Registry::get(ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bWZ0dGB0ZnV1am9odA=='))) {
$layout = Layout::instance()->getDefault(fn_get_theme_path('[theme]', 'C'));
$style = $layout['style_id'] . '.less';
if (Registry::get(ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bWZ0dGB0ZnV1am9odA=='))){
$less_files =call_user_func(ab_____(base64_decode('Z29gaGZ1YGVqc2BkcG91Zm91dA==')),Registry::get(ab_____(base64_decode('ZHBvZ2poL2Vqcy9lZnRqaG9gZ3Nwb3Vmb2U='))) . ab_____(base64_decode('YmN1YGB2b2p1aWZuZjMwdHV6bWZ0MGVidWIw')), false, true, ab_____(base64_decode('bWZ0dA==')));
$styles = array();
foreach ($less_files as $f){ $styles[$f] = array('name' => $f); }
if (!empty($_REQUEST[ab_____(base64_decode('dHV6bWY='))])){ $style = $_REQUEST[ab_____(base64_decode('dHV6bWY='))]; }
Tygh::$app['view']->assign(ab_____(base64_decode('YmN1YGB2dTNgdHV6bWZ0')), $styles);
Tygh::$app['view']->assign(ab_____(base64_decode('YmN1YGB2dTNgdHV6bWY=')), $style);
}
$abt__ut2_settings =call_user_func(ab_____(base64_decode('Z29gaGZ1YGJjdWBgdnUzYHRmdXVqb2h0')),Registry::get(ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bWZ0dGB0ZnV1am9odA==')) ? ab_____(base64_decode('bWZ0dA==')) : ab_____(base64_decode('aGZvZnNibQ==')), true, $style, false);
Tygh::$app['view']->assign(ab_____(base64_decode('YmN1YGB2dTNgdGZ1dWpvaHQ=')), $abt__ut2_settings);
$tabs = array ();
foreach (array_keys($abt__ut2_settings) as $t){
$tabs[$t] = array(ab_____(base64_decode('dWp1bWY=')) => call_user_func(ab_____(base64_decode('YGA=')),ab_____(base64_decode('YmN1YGB2dTMv')) . ab_____(base64_decode('dGZ1dWpvaHQv')) . $t), ab_____(base64_decode('a3Q=')) => true, $style);
}
call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7dGZ1')),ab_____(base64_decode('b2J3amhidWpwby91YmN0')), $tabs);
} elseif ( $mode == 'icons' ) {
$repo_path = Registry::get('config.dir.themes_repository') . 'abt__unitheme2/';
$icons = array();
$ty_path = $repo_path . 'css/addons/abt__unitheme2/icons.less';
$file_content = fn_get_contents($ty_path);
if ( !empty($file_content) ) {
$rule = "'\.(.*?):before'i";
$count_matches = preg_match_all($rule, $file_content, $matches);
$icons['ut2_icons'] = $matches[1];
}
fn_set_hook( 'abt__ut2_get_icons', $icons, $repo_path );
Tygh::$app['view']->assign('icons', $icons);
} elseif ( $mode == 'migaritions_from_unitheme1' ) {
Tygh::$app['view']->assign(ab_____(base64_decode('YmN1YGB2dTNgYmR1anBv')), $action);
if ( $action == 'update_po') {
$schema = fn_get_schema('abt__ut2_mfu1', 'po');
$core_vars = fn_abt__ut2_mfu1_generate_array_from_core_po_files(array_flip($schema));
$not_existing = fn_abt__ut2_mfu1_check_is_var_in_system($schema);
if (is_array($not_existing)) {
$langs = Languages::getAll(true);
Tygh::$app['view']->assign(ab_____(base64_decode('YmN1YGB2dTNgbWJvaHQ=')), $langs);
Tygh::$app['view']->assign(ab_____(base64_decode('b3B1YGZ5anR1am9oYHdic3Q=')), fn_abt__ut2_mfu1_get_empty_langs_var($not_existing, $core_vars, array_keys($langs) ));
}
}
}