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
use Tygh\Languages\Languages;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
define('AB__MB_DATA_PATH', Registry::get('config.dir.var') . 'ab__data/ab__motivation_block/');
function fn_ab__mb_install () {
$repo_path = Registry::get('config.dir.design_frontend') . Registry::get('config.base_theme');;
$ty_path = $repo_path . '/css/tygh/icons.less';
$file_content = fn_get_contents($ty_path);
$ty_file_dir = Registry::get('config.dir.design_backend') . 'css/addons/ab__motivation_block/';
$ty_file_path = $ty_file_dir . 'ty_icons.less';
if ( !is_file($ty_file_path) ) {
$file_content = str_replace( '../media/fonts/', '../../../media/fonts/addons/ab__motivation_block/', $file_content );
file_put_contents($ty_file_path, $file_content);
$extensions = array('eot', 'woff', 'ttf', 'svg');
$fonts_dir = Registry::get('config.dir.design_backend') . 'media/fonts/addons/ab__motivation_block/';
fn_mkdir( $fonts_dir );
for ( $i = 0; $i < count($extensions); $i++ ) {
fn_copy($repo_path . '/media/fonts/glyphs.' . $extensions[$i], $fonts_dir . 'glyphs.' . $extensions[$i]);
}
}
}
function fn_ab__mb_update_motivation_item($motivation_item_data, $motivation_item_id, $lang_code = DESCR_SL, $company_id = 0)
{
$exists = db_get_field('SELECT motivation_item_id FROM ?:ab__mb_motivation_items WHERE motivation_item_id = ?i AND company_id = ?i', $motivation_item_id, $company_id);
if (empty($exists)) {
$motivation_item_data['company_id'] = fn_allowed_for('ULTIMATE') ? fn_get_runtime_company_id() : $company_id;
$motivation_item_data['motivation_item_id'] = $motivation_item_id = db_query('INSERT INTO ?:ab__mb_motivation_items ?e', $motivation_item_data);
foreach (fn_get_translation_languages() as $motivation_item_data['lang_code'] => $v) {
db_query('INSERT INTO ?:ab__mb_motivation_item_descriptions ?e', $motivation_item_data);
}
} else {
db_query('UPDATE ?:ab__mb_motivation_items SET ?u WHERE motivation_item_id = ?i AND company_id = ?i', $motivation_item_data, $motivation_item_id, $company_id);
db_query('UPDATE ?:ab__mb_motivation_item_descriptions SET ?u WHERE motivation_item_id = ?i AND company_id = ?i AND lang_code = ?s', $motivation_item_data, $motivation_item_id, $company_id, $lang_code);
}
if (fn_allowed_for('ULTIMATE') || $company_id == 0) {
fn_attach_image_pairs('ab__mb_img', 'motivation_item', $motivation_item_id);
}
return $motivation_item_id;
}
function fn_ab__mb_delete_motivation_item($motivation_item_id)
{
if (!empty($motivation_item_id)) {
db_query('DELETE FROM ?:ab__mb_motivation_items WHERE motivation_item_id = ?i', $motivation_item_id);
db_query('DELETE FROM ?:ab__mb_motivation_item_descriptions WHERE motivation_item_id = ?i', $motivation_item_id);
return true;
}
return false;
}
function fn_ab__mb_get_motivation_items($params = array(), $items_per_page = 0, $lang_code = CART_LANGUAGE)
{
$default_params = array(
'page' => 1,
'items_per_page' => $items_per_page,
);
$params = array_merge($default_params, $params);
$sortings = array(
'name' => '?:ab__mb_motivation_item_descriptions.name',
'status' => '?:ab__mb_motivation_items.status',
'position' => '?:ab__mb_motivation_items.position',
);
$sorting = db_sort($params, $sortings, 'position', 'asc');
$fields = array (
'?:ab__mb_motivation_items.motivation_item_id',
'?:ab__mb_motivation_items.position',
'?:ab__mb_motivation_items.company_id',
'?:ab__mb_motivation_items.expanded',
'?:ab__mb_motivation_items.vendor_edit',
'?:ab__mb_motivation_items.status',
'?:ab__mb_motivation_items.icon_type',
'?:ab__mb_motivation_items.icon_class',
'?:ab__mb_motivation_items.icon_color',
'?:ab__mb_motivation_item_descriptions.name',
'?:ab__mb_motivation_item_descriptions.description',
'?:ab__mb_motivation_item_descriptions.lang_code',
);
$condition = $limit = $join = '';
if (AREA == 'C') {
$condition .= db_quote(' AND ?:ab__mb_motivation_items.status = ?s', 'A');
}
if (!empty($params['item_ids'])) {
$condition .= db_quote(' AND ?:ab__mb_motivation_items.motivation_item_id IN (?n)', explode(',', $params['item_ids']));
}
if (!empty($params['vendor_edit'])) {
$condition .= db_quote(' AND ?:ab__mb_motivation_items.vendor_edit = ?s', 'Y');
}
if (fn_allowed_for('ULTIMATE')) {
$condition .= fn_get_company_condition('?:ab__mb_motivation_items.company_id');
} elseif (!empty($params['company_id'])) {
$fields[] = 'vd.description AS vendor_description';
$join .= db_quote(' LEFT JOIN ?:ab__mb_vendors_descriptions AS vd ON vd.motivation_item_id = ?:ab__mb_motivation_items.motivation_item_id AND vd.company_id = ?i AND vd.lang_code = ?s', $params['company_id'], $lang_code);
}
$join .= db_quote(' INNER JOIN ?:ab__mb_motivation_item_descriptions ON ?:ab__mb_motivation_item_descriptions.motivation_item_id = ?:ab__mb_motivation_items.motivation_item_id AND ?:ab__mb_motivation_item_descriptions.company_id = ?:ab__mb_motivation_items.company_id AND ?:ab__mb_motivation_item_descriptions.lang_code = ?s', $lang_code);
if (!empty($params['items_per_page'])) {
$params['total_items'] = db_get_field('SELECT COUNT(DISTINCT(?:ab__mb_motivation_items.motivation_item_id)) FROM ?:ab__mb_motivation_items ?p WHERE 1 ?p', $join, $condition);
$limit = db_paginate($params['page'], $params['items_per_page'], $params['total_items']);
}
$motivation_items = db_get_hash_array('SELECT ?p FROM ?:ab__mb_motivation_items ?p WHERE 1 ?p ?p ?p', 'motivation_item_id', implode(", ", $fields), $join, $condition, $sorting, $limit);
$image_pairs = fn_get_image_pairs(array_keys($motivation_items), 'motivation_item', 'M');
foreach($image_pairs as $key => $image) {
$motivation_items[$key]['main_pair'] = reset($image);
}
if (fn_allowed_for('MULTIVENDOR')) {
foreach ($motivation_items as &$item) {
if (!empty($item['vendor_description'])) {
$item['description'] = $item['vendor_description'];
}
}
}
return array($motivation_items, $params);
}
function fn_ab__mb_get_motivation_item_data($motivation_item_id, $lang_code = CART_LANGUAGE)
{
$fields = array (
'?:ab__mb_motivation_items.motivation_item_id',
'?:ab__mb_motivation_items.position',
'?:ab__mb_motivation_items.expanded',
'?:ab__mb_motivation_items.vendor_edit',
'?:ab__mb_motivation_items.status',
'?:ab__mb_motivation_items.icon_type',
'?:ab__mb_motivation_items.icon_class',
'?:ab__mb_motivation_items.icon_color',
'?:ab__mb_motivation_item_descriptions.name',
'?:ab__mb_motivation_item_descriptions.description',
);
$join = db_quote('LEFT JOIN ?:ab__mb_motivation_item_descriptions ON ?:ab__mb_motivation_item_descriptions.motivation_item_id = ?:ab__mb_motivation_items.motivation_item_id AND ?:ab__mb_motivation_item_descriptions.lang_code = ?s', $lang_code);
$condition = db_quote('?:ab__mb_motivation_items.motivation_item_id = ?i', $motivation_item_id);
if (fn_allowed_for('ULTIMATE')) {
$condition .= fn_get_company_condition('?:ab__mb_motivation_items.company_id');
} else {
$condition .= db_quote(' AND ?:ab__mb_motivation_items.company_id = ?i', 0);
}
$motivation_item = db_get_row('SELECT ?p FROM ?:ab__mb_motivation_items ?p WHERE ?p', implode(",", $fields), $join, $condition);
if (empty($motivation_item)) {
return false;
}
$motivation_item['main_pair'] = fn_get_image_pairs($motivation_item['motivation_item_id'], 'motivation_item', 'M');
return $motivation_item;
}
function fn_ab__mb_update_by_vendor($motivation_item_data, $motivation_item_id, $lang_code, $company_id)
{
if (empty($motivation_item_data) || empty($motivation_item_data['description'])) {
return false;
}
db_replace_into('ab__mb_vendors_descriptions', array(
'motivation_item_id' => $motivation_item_id,
'company_id' => $company_id,
'lang_code' => $lang_code,
'description' => $motivation_item_data['description']
));
}
function fn_ab__motivation_block_install_demodata () {
$answ = array();
foreach ( array( 'fn_ab__motivation_block_install_blocks' ) as $func ) {
$answ[$func] = $func('A');
}
return $answ;
}
function fn_ab__motivation_block_install_blocks ( $status = 'A' ) {
$path = AB__MB_DATA_PATH . 'blocks/';
$data = json_decode( fn_get_contents( $path . 'data.json' ), true );
if ( !empty($data) ) {
$company = fn_get_runtime_company_id();
$langs = Languages::getAll();
$inj = array();
$is_ru = in_array('ru', array_keys($langs));
foreach ( $data as $block ) {
$block['status'] = $status;
$block_id = fn_ab__mb_update_motivation_item($block, 0, CART_LANGUAGE, $company);
if ( $is_ru ) {
fn_ab__mb_update_motivation_item($block['ru'], $block_id,'ru', $company );
}
$inj[] = '<a href="' . fn_url('ab__motivation_block.update&motivation_item_id=' . $block_id) . '">' . (CART_LANGUAGE == 'ru' ? $block['ru']['name'] : $block['name']) . '</a>';
}
fn_set_notification( 'N', __('notice'), __( 'ab__mb.demodata.successes.blocks', array( '[blocks]' => implode(', ', $inj )) ) );
return $inj;
} else {
fn_set_notification('E', __('error'), __('ab__mb.demodata.errors.no_data'));
return false;
}
}
function fn_ab__motivation_block_prepare_block_to_cloning ( $block = array() ) {
unset($block['motivation_item_id']);
$block['status'] = 'D';
$block['name'] .= ' [CLONE]';
return $block;
}
function fn_ab__mb_clone_element ( $item_id ) {
$new_id = $item_id;
$old_data = fn_ab__mb_get_motivation_item_data( $item_id );
if ( !empty( $old_data ) ) {
$company = fn_get_runtime_company_id();
$old_data = fn_ab__motivation_block_prepare_block_to_cloning($old_data);
$new_id = fn_ab__mb_update_motivation_item( $old_data, 0, CART_LANGUAGE, $company );
foreach ( array_keys(Languages::getAll()) as $lang ) {
if ( $lang != CART_LANGUAGE ) {
$temp = fn_ab__motivation_block_prepare_block_to_cloning(fn_ab__mb_get_motivation_item_data($item_id, $lang));
fn_ab__mb_update_motivation_item( $temp, $new_id, $lang, $company);
}
}
}
return $new_id;
}
function fn_ab__mb_change_element_status ( $elements, $status ) {
$elem = is_array($elements) ? implode(',', $elements) : $elements;
db_query('UPDATE ?:ab__mb_motivation_items
SET status=?s
WHERE motivation_item_id in (?p)', $status, $elem);
}