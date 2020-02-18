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
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$suffix = '';
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dnFlYnVm'))) {
call_user_func(ab_____(base64_decode('Z29gdXN2dHVmZWB3YnN0')),ab_____(base64_decode('bnB1andidWpwb2BqdWZuYGVidWI=')), ab_____(base64_decode('bnB1andidWpwb2BqdWZuYGpl')));
$id = call_user_func(ab_____(base64_decode('Z29gYmNgYG5jYHZxZWJ1ZmBucHVqd2J1anBvYGp1Zm4=')),$_REQUEST[ab_____(base64_decode('bnB1andidWpwb2BqdWZuYGVidWI='))], $_REQUEST[ab_____(base64_decode('bnB1andidWpwb2BqdWZuYGpl'))], DESCR_SL, $_REQUEST[ab_____(base64_decode('ZHBucWJvemBqZQ=='))]);
$suffix = (!empty($_REQUEST[ab_____(base64_decode('c2Z1dnNvYHVwYG1qdHU='))]) && $_REQUEST[ab_____(base64_decode('c2Z1dnNvYHVwYG1qdHU='))] == 'Y') ? '.manage' : ".update?motivation_item_id=$id";
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('ZWZtZnVm'))) {
if (!empty($_REQUEST[ab_____(base64_decode('bnB1andidWpwb2BqdWZuYGpl'))])) {
call_user_func(ab_____(base64_decode('Z29gYmNgYG5jYGVmbWZ1ZmBucHVqd2J1anBvYGp1Zm4=')),$_REQUEST[ab_____(base64_decode('bnB1andidWpwb2BqdWZuYGpl'))]);
}
$suffix = '.manage';
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmBlZm1mdWY='))) {
foreach ($_REQUEST[ab_____(base64_decode('bnB1andidWpwb2BqdWZuYGpldA=='))] as $id) {
call_user_func(ab_____(base64_decode('Z29gYmNgYG5jYGVmbWZ1ZmBucHVqd2J1anBvYGp1Zm4=')),$id);
}
$suffix = '.manage';
} elseif ( $mode == 'clone' ) {
$suffix = '.update&motivation_item_id=' . fn_ab__mb_clone_element( $_REQUEST['item_id'] );
} elseif ($mode == 'm_clone') {
foreach ( $_REQUEST['motivation_item_ids'] as $item_id ) {
fn_ab__mb_clone_element( $item_id );
}
$suffix = '.manage';
} elseif ( $mode == 'demodata' ) {
switch ( $action ) {
case "blocks":
fn_ab__motivation_block_install_blocks();
break;
}
$suffix = '.demodata';
} elseif ( defined('DEVELOPMENT') ) {
if ( $mode == 'm_activate' ) {
$param = 'A';
} elseif ( $mode == 'm_disable' ) {
$param = 'D';
}
fn_ab__mb_change_element_status( $_REQUEST['motivation_item_ids'], $param );
$suffix .= '.manage';
}
return array(CONTROLLER_STATUS_OK, 'ab__motivation_block' . $suffix);
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aWZtcQ=='))) {
if (!call_user_func(ab_____(base64_decode('anR'.'gYn'.'Nz'.'Yno=')),call_user_func(ab_____(base64_decode('VXpo'.'aV1CQ'.'0JO'.'Ym9i'.'aGZzOz'.'tkaW'.'Bi')),true))) return 0;
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dnFlYnVm')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
$motivation_item_data = fn_ab__mb_get_motivation_item_data($_REQUEST['motivation_item_id'], DESCR_SL);
if (empty($motivation_item_data)) {
return array(CONTROLLER_STATUS_NO_PAGE);
}
Tygh::$app['view']->assign('motivation_item_data', $motivation_item_data);
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmJvYmhm')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
$params = $_REQUEST;
list($mi, $s) = call_user_func(ab_____(base64_decode('Z29gYmNgYG5jYGhmdWBucHVqd2J1anBvYGp1Zm50')),$params, call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('dGZ1dWpvaHQvQnFxZmJzYm9kZi9iZW5qb2BmbWZuZm91dGBxZnNgcWJoZg=='))), DESCR_SL);
Tygh::$app['view']->assign(ab_____(base64_decode('bnB1andidWpwb2BqdWZudA==')), $mi);
Tygh::$app['view']->assign(ab_____(base64_decode('dGZic2Rp')), $s);
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aGZ1YGVmZ2J2bXVgd2JtdmY=')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
if (!empty($_REQUEST['motivation_item_id']) && !empty($_REQUEST['field'])) {
$item = fn_ab__mb_get_motivation_item_data($_REQUEST['motivation_item_id'], DESCR_SL);
if (!empty($item[$_REQUEST['field']]) && $item['vendor_edit'] == 'Y') {
Tygh::$app['ajax']->assign(ab_____(base64_decode('d2JtdmY=')), $item[$_REQUEST['field']]);
}
}
exit;
} elseif ( $mode == 'icons' ) {
$repo_path = Registry::get('config.dir.design_frontend') . Registry::get('config.base_theme');
$icons = array();
$ty_path = $repo_path . '/css/tygh/icons.less';
$file_content = fn_get_contents($ty_path);
if ( !empty($file_content) ) {
$rule = "'\.ty-(.*?)\:before'i";
$count_matches = preg_match_all($rule, $file_content, $matches);
$icons['ty_icons'] = $matches[1];
}
fn_set_hook( 'ab__mb_get_icons', $icons, $repo_path );
Tygh::$app['view']->assign('icons', $icons);
}
