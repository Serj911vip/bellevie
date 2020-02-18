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
use Tygh\Registry;
use Tygh\Menu;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
define('ABT__UT2_DATA_IMP_PATH', Registry::get('config.dir.var') . 'ab__data/abt__unitheme2/');
function fn_abt__ut2_install_demodata () {
$prefix = 'fn_abt__ut2_demodata_';
$temp = array( "{$prefix}banners", "{$prefix}menu", "{$prefix}blog", "{$prefix}products" );
$answer = array();
foreach ( $temp as $func ) {
if ( function_exists( $func ) ) {
$val = $func('A');
if ( !$val ) return false;
$answer[$func] = $val;
}
}
return $answer;
}
function fn_abt__ut2_demodata_banners ( $status = 'A' ) {
$path = ABT__UT2_DATA_IMP_PATH . 'banners/';
$answer = array();
$data = fn_get_contents("{$path}/data.json");
if ( empty($data) ) {
fn_set_notification('E', __('error'), __('abt__ut2.demodata.errors.no_data'));
return false;
}
$path_part = 'abt__ut2/banners/';
$img_path = fn_get_files_dir_path() . $path_part;
fn_rm($img_path);
fn_mkdir($img_path);
fn_copy($path, $img_path);
$data = json_decode($data, true);
$languages = array_keys( fn_get_languages() );
$is_ru = in_array('ru', $languages);
$image_types = array('banners_main', 'abt__ut2_main_image', 'abt__ut2_background_image', 'abt__ut2_tablet_main_image',
'abt__ut2_tablet_background_image', 'abt__ut2_mobile_main_image', 'abt__ut2_mobile_background_image');
foreach ( $data as $banner ) {
$banner['status'] = $status;
$banner['banner'] .= " (Demo)";
$banner_id = fn_banners_update_banner( $banner, 0, DESCR_SL );
if ( $banner_id ) {
if ($is_ru) {
$banner['ru']['banner'] .= " (Демо)";
fn_banners_update_banner($banner['ru'], $banner_id, 'ru');
}
foreach ($image_types as $image_type) {
if ( isset($banner['images'][$image_type]) ) {
$image_arr = array(
$image_type . '_image_data' => array( array( 'type' => $banner['images'][$image_type]['type'], 'object_id' => $banner_id ) ),
'file_' . $image_type . '_image_icon' => array( $path_part . $banner['images'][$image_type]['img'] ),
'type_' . $image_type . '_image_icon' => array( 'server' )
);
$_REQUEST = array_merge( $_REQUEST, $image_arr );
if ( $image_type === 'banners_main' ) {
$banner_image_id = db_get_field('SELECT banner_image_id
FROM ?:banner_images
WHERE banner_id=?n AND lang_code=?s', $banner_id, DESCR_SL);
fn_attach_image_pairs('banners_main', 'promo', $banner_image_id);
} else {
/*f*/fn_attach_image_pairs($image_type, ab_____(base64_decode('YmN1YGB2dTMwY2Jvb2ZzdDA=')) . $banner['images'][$image_type]['device'], $banner_id);
}
}
}
if (fn_allowed_for('ULTIMATE')) {
fn_share_object_to_all('banners', $banner_id);
}
$banner_name = CART_LANGUAGE == 'ru' ? $banner['ru']['banner'] : $banner['banner'];
$answer[] = "<a target='_blank' href='?dispatch=banners.update&banner_id=$banner_id'>{$banner_name}</a>";
}
}
fn_set_notification( 'N', __('notice'), __( 'abt__ut2.demodata.success.banners', array( '[ids]' => implode(', ', $answer) )) );
return $answer;
}
function fn_abt__ut2_demodata_blog ( $status = 'A' ) {
$path = ABT__UT2_DATA_IMP_PATH . ab_____(base64_decode('Y21waDA='));
$data = call_user_func(ab_____(base64_decode('Z29gaGZ1YGRwb3Vmb3V0')),"{$path}data.json");
if (!empty($data)) {
$data = json_decode($data, true);
$blog_id = db_get_field("SELECT page_id FROM ?:pages WHERE page_type='B' AND status='A' AND parent_id=0");
if ( empty($blog_id) ) {
fn_set_notification('E', __('error'), __('abt__ut2.demodata.errors.no_blog_page'));
} else {
$path_part = 'abt__ut2/blog/';
$img_path = fn_get_files_dir_path() . $path_part;
fn_rm($img_path);
fn_mkdir($img_path);
fn_copy($path, $img_path);
$answer = array();
$languages = array_keys( fn_get_languages() );
$is_ru = in_array('ru', $languages);
foreach ($data as $key => $blog_post) {
$blog_post['parent_id'] = $blog_id;
$blog_post['company_id'] = fn_get_runtime_company_id();
$blog_post['lang_code'] = CART_LANGUAGE;
$blog_post['status'] = $status;
$blog_post['page'] .= " (Demo)";
$blog_post['timestamp'] = TIME;
$new_page = fn_update_page($blog_post, 0);
if ($new_page) {
if ( $is_ru ) {
$blog_post['ru']['page'] .= " (Демо)";
fn_update_page(array_merge($blog_post, $blog_post['ru']), $new_page, 'ru');
}
if (!empty($blog_post['blog_image'])) {
$image_str = 'blog_image_image';
$image = array(
"{$image_str}_data" => array(array(ab_____(base64_decode('cWJqc2BqZQ==')) => '',ab_____(base64_decode('dXpxZg==')) => ab_____(base64_decode('Tg==')), ab_____(base64_decode('cGNrZmR1YGpl')) => 0, ab_____(base64_decode('am5iaGZgYm11')) => $blog_post[ab_____(base64_decode('cWJoZg=='))])),
"file_{$image_str}_icon" => array("{$path_part}/{$blog_post['blog_image']}"),
"type_{$image_str}_icon" => array('server')
);
if ( fn_allowed_for('ULTIMATE') ) {
fn_share_object_to_all('pages', $new_page);
}
$_REQUEST = array_merge($_REQUEST, $image);
fn_attach_image_pairs('blog_image', 'blog', $new_page);
}
$answer[] = '<a href="' . fn_url('pages.update&page_id=' . $new_page . '&come_from=B') . '" target="_blank">' . (CART_LANGUAGE == 'ru' ? $blog_post['ru']['page'] : $blog_post['page']) . '</a>';
}
}
fn_set_notification('N', __('notice'), __('abt__ut2.demodata.success.blog', array( '[ids]' => implode(', ', $answer) )), 'S');
return $answer;
}
} else {
fn_set_notification('E', __('error'), __('abt__ut2.demodata.errors.no_data'));
return false;
}
}
function fn_abt__ut2_demodata_menu ( $status = 'A' ) {
$path = ABT__UT2_DATA_IMP_PATH . ab_____(base64_decode('bmZvdjA='));
$data = call_user_func(ab_____(base64_decode('Z29gaGZ1YGRwb3Vmb3V0')),"{$path}data.json");
$languages = array_keys( fn_get_languages() );
$is_ru = in_array('ru', $languages);
$is_en = in_array('en', $languages);
$answer = array();
if (!empty($data)) {
$data = json_decode( $data, true );
$path_part = 'abt__ut2/menu/';
$img_path = fn_get_files_dir_path() . $path_part;
fn_rm($img_path);
fn_mkdir($img_path);
foreach ($data as $menu_name => $menu) {
$time = substr(TIME, -3);
$menu_name .= " $time (" . __('abt__ut2.demodata') . ')';
$menu_data = array(
ab_____(base64_decode('b2JuZg==')) => $menu_name,
ab_____(base64_decode('bWJvaGBkcGVm')) => DESCR_SL,
ab_____(base64_decode('dHVidXZ0')) => $status,
ab_____(base64_decode('ZHBucWJvemBqZQ=='))=> call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9kcG5xYm96YGpl'))) ? call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9kcG5xYm96YGpl'))) : 1,
);
$menu_id = Menu::update($menu_data);
if ( !$menu_id ) {
fn_set_notification('E', __('error'), __('abt__ut2.demodata.errors.menu_wasnt_created', array( '[name]' => $menu_name )));
return false;
}
foreach( $menu as $item ) {
fn_abt__ut2_create_demodata_menu_item( $item, $menu_id, $is_ru, $is_en );
}
$answer[]= '<a target="_blank" href="' . fn_url('static_data.manage&section=A&menu_id=' . $menu_id) . '">' . $menu_name . '</a>';
}
fn_set_notification('N', __('notice'), __('abt__ut2.demodata.success.menu', array( '[menus]' => implode(', ', $answer) )), 'S');
return $answer;
} else {
fn_set_notification('E', __('error'), __('abt__ut2.demodata.errors.no_data'));
return false;
}
}
function fn_abt__ut2_demodata_products ( $status = 'D' ) {
}
function fn_abt__ut2_create_demodata_menu_item ( $item, $menu_id, $is_ru = true, $is_en = true, $parent = 0 ) {
$item['parent_id'] = $parent;
$item['param'] = isset($item['href']) ? $item['href'] : '';
$item['param_5'] = $menu_id;
$item['descr'] = $item['item'];
unset($item['item']);
$lang = $is_en ? 'en' : ( $is_ru ? 'ru' : CART_LANGUAGE );
$cat_id = db_get_field( "SELECT category_id
FROM ?:category_descriptions
WHERE category=?s AND lang_code=?s", $lang == 'ru' ? $item['ru']['descr'] : $item['descr'], $lang );
if ( !empty($cat_id) && empty($item['subitems']) ) {
$item['megabox'] = array(
'type' => array( 'param_3' => 'C' ),
'use_item' => array( 'param_3' => ( isset($item['ab__use_category_link']) && $item['ab__use_category_link'] == 'Y' ) ? 'Y' : 'N' )
);
$item['param_3'] = array( 'C' => $cat_id );
} elseif( $item['descr'] == 'Catalog') {
$item['megabox'] = array(
'type' => array( 'param_3' => 'C' ),
'use_item' => array( 'param_3' => 'N' )
);
$item['param_3'] = array( 'C' => 0 );
}
$item_id = fn_abt__ut2_update_static_data($item, 0, AREA);
if ( $is_ru ) {
fn_abt__ut2_update_static_data(array_merge($item, $item['ru']), $item_id, AREA, 'ru');
}
if ( isset($item['image']) ) {
$path = ABT__UT2_DATA_IMP_PATH . ab_____(base64_decode('bmZvdjA=')) . $item['image'];
$path_part = 'abt__ut2/menu/' . $item['image'];
$img_path = fn_get_files_dir_path() . $path_part;
fn_copy($path, $img_path);
$ico_str = 'abt__ut2_mwi__icon_image_';
$ico_obj = array(
$ico_str . 'data' => array(
$item_id => array(
'type' => 'M'
)
),
'file_' . $ico_str . 'icon' => array(
$item_id => $img_path
),
'type_' . $ico_str . 'icon' => array(
$item_id => 'server'
)
);
$_REQUEST = array_merge( $_REQUEST, $ico_obj );
fn_attach_image_pairs('abt__ut2_mwi__icon', 'abt__ut2/menu-with-icon', $item_id, $lang);
}
if ( isset($item['subitems']) ) {
foreach( $item['subitems'] as $subitem ) {
fn_abt__ut2_create_demodata_menu_item( $subitem, $menu_id, $is_ru, $is_en, $item_id );
}
}
}
function fn_abt__ut2_update_static_data($data, $param_id, $section, $lang_code = CART_LANGUAGE)
{
$current_id_path = '';
$schema = fn_get_schema('static_data', 'schema');
$section_data = $schema[$section];
if (!empty($section_data['has_localization'])) {
$data['localization'] = empty($data['localization']) ? '' : fn_implode_localizations($data['localization']);
}
if (!empty($data['megabox'])) { // parse megabox value
foreach ($data['megabox']['type'] as $p => $v) {
if (!empty($v)) {
$data[$p] = $v . ':' . intval($data[$p][$v]) . ':' . $data['megabox']['use_item'][$p];
} else {
$data[$p] = '';
}
}
}
$condition = db_quote('param_id = ?i', $param_id);
if (!empty($param_id)) {
$current_id_path = db_get_field("SELECT id_path FROM ?:static_data WHERE $condition");
db_query("UPDATE ?:static_data SET ?u WHERE param_id = ?i", $data, $param_id);
db_query('UPDATE ?:static_data_descriptions SET ?u WHERE param_id = ?i AND lang_code = ?s', $data, $param_id, $lang_code);
} else {
$data['section'] = $section;
$param_id = $data['param_id'] = db_query("INSERT INTO ?:static_data ?e", $data);
foreach (fn_get_translation_languages() as $data['lang_code'] => $_v) {
db_query('REPLACE INTO ?:static_data_descriptions ?e', $data);
}
}
if (isset($data['parent_id'])) {
if (!empty($data['parent_id'])) {
$new_id_path = db_get_field("SELECT id_path FROM ?:static_data WHERE param_id = ?i", $data['parent_id']);
$new_id_path .= '/' . $param_id;
} else {
$new_id_path = $param_id;
}
if (!empty($current_id_path) && $current_id_path != $new_id_path) {
db_query("UPDATE ?:static_data SET id_path = CONCAT(?s, SUBSTRING(id_path, ?i)) WHERE id_path LIKE ?l", "$new_id_path/", strlen($current_id_path . '/') + 1, "$current_id_path/%");
}
db_query("UPDATE ?:static_data SET id_path = ?s WHERE param_id = ?i", $new_id_path, $param_id);
}
return $param_id;
}