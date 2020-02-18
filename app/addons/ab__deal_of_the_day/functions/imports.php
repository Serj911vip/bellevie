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
function fn_ab__deal_of_the_day_install_demodata ($action = '')
{
$functions = array(
'promotions' => 'fn_ab__deal_of_the_day_install_promotions'
);
if (!empty($action)) {
if (empty($functions[$action])) {
fn_set_notification('E', __('error'), "No such demodata for this addon");
return false;
} else {
$functions = array($action => $functions[$action]);
}
}
$return = array();
foreach ($functions as $act => $func) {
if (is_callable($func)) {
$val = $func('A');
if ($val) {
fn_set_notification('N', __('notice'), "Demo {$act} {$val} was added successfully!");
$return[$act] = $val;
} else {
return false;
}
}
}
return $return;
}
function fn_ab__deal_of_the_day_install_promotions ()
{
$path_part = 'ab__data/ab__deal_of_the_day/demodata/promotions';
$path = Registry::get('config.dir.var') . $path_part;
$data = fn_get_contents("{$path}/data.json");
if (empty($data) ) {
return false;
}
$data = json_decode($data, true);
$company_id = fn_get_runtime_company_id();
$lang_codes = Languages::getAll();
$img_path = fn_get_files_dir_path() . $path_part;
fn_rm($img_path);
fn_mkdir($img_path);
fn_copy($path, $img_path);
$test_products_ids = db_get_fields('SELECT p.product_id FROM ?:products AS p
INNER JOIN ?:product_descriptions AS pd ON pd.product_id = p.product_id AND pd.lang_code = ?s
INNER JOIN ?:product_prices AS pp ON pp.product_id = p.product_id AND pp.lower_limit = 1 AND pp.usergroup_id = 0
LEFT JOIN ?:products_categories AS pc ON pc.product_id = p.product_id
LEFT JOIN ?:categories AS c ON c.category_id = pc.category_id AND c.status = ?s
WHERE p.amount > 0 AND pp.price > 0 AND p.status = ?s AND c.category_id IS NOT NULL LIMIT 0,20', CART_LANGUAGE, 'A', 'A');
$sets = array_chunk($test_products_ids, 5);
$test_products_ids = array();
foreach ($sets as $set) {
$test_products_ids[] = implode(',', $set);
}
$test_categories_ids = db_get_fields('SELECT c.category_id FROM ?:categories AS c
LEFT JOIN ?:categories AS sub_c ON c.category_id = sub_c.parent_id
WHERE c.status = ?s AND sub_c.category_id IS NULL LIMIT 0,4', 'A');
$test_shippings_ids = db_get_fields('SELECT shipping_id FROM ?:shippings WHERE status = ?s', 'A');
$result_ids = array();
foreach ($data as $promotion) {
$promotion['company_id'] = $company_id;
if (!empty($promotion['conditions']) && !empty($promotion['conditions']['conditions'])) {
foreach ($promotion['conditions']['conditions'] as $key => $condition) {
if ($condition['condition'] == 'products') {
if (($products_ids = next($test_products_ids)) === false) {
$products_ids = reset($test_products_ids);
}
$promotion['conditions']['conditions'][$key]['value'] = $products_ids;
} elseif ($condition['condition'] == 'categories') {
if (($category_id = next($test_categories_ids)) === false) {
$category_id = reset($test_categories_ids);
}
$promotion['conditions']['conditions'][$key]['value'] = $category_id;
}
}
}
if (!empty($promotion['bonuses'])) {
foreach ($promotion['bonuses'] as $key => $bonus) {
if ($bonus['bonus'] == 'discount_on_products') {
if (($products_ids = next($test_products_ids)) === false) {
$products_ids = reset($test_products_ids);
}
$promotion['bonuses'][$key]['value'] = $products_ids;
} elseif ($bonus['bonus'] == 'free_shipping' && !empty($test_shippings_ids)) {
$new_bonus = array();
foreach ($test_shippings_ids as $shipping_id) {
$new_bonus[] = array(
'bonus' => 'free_shipping',
'value' => $shipping_id,
);
}
$promotion['bonuses'][$key] = $new_bonus;
break;
}
}
}
if (!empty($promotion['ab__dotd_active'])) {
$promotion['to_date'] = strtotime('+2 week', TIME);
} elseif (!empty($promotion['ab__dotd_awaited'])) {
$promotion['from_date'] = strtotime('+1 week', TIME);
$promotion['to_date'] = strtotime('+1 month', TIME);
} elseif (!empty($promotion['ab__dotd_expired'])) {
$promotion['from_date'] = strtotime('-1 month', TIME);
$promotion['to_date'] = strtotime('-1 week', TIME);
}
$result_ids[] = $promotion['promotion_id'] = fn_update_promotion($promotion, 0, CART_LANGUAGE);
if (isset($lang_codes['ru'])) {
$promotion = array_merge($promotion, $promotion['ru']);
fn_update_promotion($promotion, $promotion['promotion_id'], 'ru');
}
if (!empty($promotion['images'])) {
foreach ($promotion['images'] as $var_name => $file_name) {
$img = array(
"{$var_name}_image_data" => array(
array(
'type' => ($var_name == 'promotion_main') ? 'M' : 'A',
'is_new' => true,
'object_id' => $promotion['promotion_id']
)
),
"file_{$var_name}_image_icon" => array( "{$img_path}/{$file_name}" ),
"type_{$var_name}_image_icon" => array('server')
);
$_REQUEST = array_merge($_REQUEST, $img);
fn_attach_image_pairs($var_name, 'promotion', $promotion['promotion_id']);
unset($_REQUEST["{$var_name}_image_data"], $_REQUEST["file_{$var_name}_image_icon"], $_REQUEST["type_{$var_name}_image_icon"]);
}
}
}
return empty($result_ids) ? false : implode(', ', $result_ids);
}
