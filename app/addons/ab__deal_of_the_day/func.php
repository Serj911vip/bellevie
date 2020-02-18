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
use Tygh\Enum\ProductTracking;
use Tygh\Themes\Themes;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ( AREA == 'A' ) {
foreach (glob(Registry::get("config.dir.addons") . "/ab__deal_of_the_day/functions/*.php") as $functions) require_once $functions;
}
function fn_ab__deal_of_the_day_install ()
{
fn_ab__dotd_install_add_fields();
fn_ab__dotd_install_add_layouts();
}
function fn_ab__dotd_install_add_fields ()
{
$objects = array(
array(
"table" => "?:ab__deal_of_the_day",
"field" => "filter",
"sql" => "ALTER TABLE ?:ab__deal_of_the_day ADD filter char(1) NOT NULL DEFAULT 'N'",
"add_sql" => array(),
),
array(
"table" => "?:ab__deal_of_the_day",
"field" => "use_products_filter",
"sql" => "ALTER TABLE ?:ab__deal_of_the_day ADD use_products_filter char(1) NOT NULL DEFAULT 'Y'",
"add_sql" => array(),
),
);
if (!empty($objects) and is_array($objects)){
foreach ($objects as $object){
$fields = db_get_fields('DESCRIBE ' . $object['table']);
if (!empty($fields) and is_array($fields)){
$is_present_field = false;
foreach ($fields as $f){
if ($f == $object['field']){
$is_present_field = true;
break;
}
}
if (!$is_present_field){
db_query($object['sql']);
if (!empty($object['add_sql'])){
foreach ($object['add_sql'] as $sql) {
db_query($sql);
}
}
}
}
}
}
}
function fn_ab__dotd_install_add_layouts ($theme = '')
{
$target_themes = empty($theme) ? fn_get_installed_themes() : array($theme);
$design_dir = fn_get_theme_path('[themes]/', 'C');
$path = 'layouts/addons/ab__deal_of_the_day';
foreach ($target_themes as $theme_name) {
$repo_path = Themes::factory($theme_name)->getThemeRepoPath();
$repo_path = rtrim($repo_path, '/') . '/';
if (is_dir($repo_path . $path)) {
fn_copy($repo_path . $path, $design_dir . $theme_name . '/' . $path);
}
}
}
function fn_ab__deal_of_the_day_uninstall ()
{
$installed_themes = fn_get_installed_themes();
$design_dir = fn_get_theme_path('[themes]/', 'C');
foreach ($installed_themes as $theme_name) {
$path = $design_dir . $theme_name . '/layouts/addons/ab__deal_of_the_day';
if (is_dir($path)) {
fn_rm($path);
}
}
}
function fn_ab__dotd_get_root_categories ($ids)
{
list($categories) = fn_get_categories(array(
'item_ids' => implode(',',$ids),
'group_by_level' => false,
'simple' => false
));
$parent_ids = array();
foreach ($categories as $category) {
if (empty($category['id_path'])) {
$parent_ids[$category['category_id']] = $category['category_id'];
} else {
$id = explode('/', $category['id_path']);
$id = reset($id);
$parent_ids[$id] = $id;
}
};
return fn_get_category_name($parent_ids);
}
function fn_ab__deal_of_the_day_update_promotion_post ($promotion_id, $promotion_data, $lang_code)
{
if (!fn_check_view_permissions('ab__deal_of_the_day.manage')) {
return;
}
if (is_array($promotion_id) && is_numeric($promotion_data)) {
$data = $promotion_id;
$id = $promotion_data;
} else {
$data = $promotion_data;
$id = $promotion_id;
}
$is_exist = db_get_field('SELECT lang_code FROM ?:ab__deal_of_the_day WHERE promotion_id = ?i', $id);
if (empty($is_exist)) {
$data['promotion_id'] = $id;
foreach (Languages::getAll() as $data['lang_code'] => $_d) {
db_query("INSERT INTO ?:ab__deal_of_the_day ?e", $data);
}
} else {
db_query('UPDATE ?:ab__deal_of_the_day SET ?u WHERE promotion_id = ?i AND lang_code = ?s', $data, $id, $lang_code);
}
if (Registry::get('addons.seo.status') == 'A') {
fn_seo_update_object($data, $id, 'x', $lang_code);
}
fn_attach_image_pairs('promotion_main', 'promotion', $id, $lang_code);
fn_attach_image_pairs('promotion_list', 'promotion', $id, $lang_code);
}
function fn_ab__deal_of_the_day_get_promotions (&$params, &$fields, &$sortings, &$condition, $join)
{
if ($_REQUEST['dispatch'] == 'promotions.list') {
if (!empty($_REQUEST['page'])) {
$params['page'] = $_REQUEST['page'];
}
$params['items_per_page'] = intval(trim(Registry::get('addons.ab__deal_of_the_day.promotions_per_page')));
$setting = Registry::get('addons.ab__deal_of_the_day');
$is_active_cond = db_quote('IF(from_date, from_date <= ?i, 1) AND IF(to_date, to_date >= ?i, 1)', TIME, TIME);
$new_condition = '';
if ($setting['ab__show_awaited_promos'] != 'Y') {
$new_condition .= db_quote( ' AND IF(from_date, from_date <= ?i, 1)', TIME);
}
if ($setting['ab__show_expired_promos'] != 'Y') {
$new_condition .= db_quote( ' AND IF(to_date, to_date >= ?i, 1)', TIME);
}
$condition = str_replace(' AND ' . $is_active_cond, $new_condition, $condition);
$params['sort_by'] = 'ab__dotd_expired';
$params['sort_order'] = 'asc';
$sortings['ab__dotd_expired'] = array(db_quote('(IF(from_date > ?i, 1, 0) + IF(to_date AND to_date < ?i, 2, 0))', TIME, TIME), db_quote('ABS((IF(from_date > ?i, from_date, to_date)/-1) + ?i)', TIME, TIME));
}
if (!empty($params['expired_only'])) {
$condition .= db_quote(' AND to_date > 0 AND to_date < ?i', TIME);
}
if (!empty($params['awaited_only'])) {
$condition .= db_quote(' AND from_date > ?i', TIME);
}
$sortings['to_date'] = '?:promotions.to_date';
}
function fn_ab__deal_of_the_day_get_promotions_post ($params, $items_per_page, $lang_code, &$promotions)
{
foreach ($promotions as &$promotion) {
$promotion['ab__dotd_expired'] = (!empty($promotion['to_date']) && $promotion['to_date'] < TIME);
$promotion['ab__dotd_awaited'] = (!empty($promotion['from_date']) && $promotion['from_date'] > TIME);
$promotion['ab__dotd_active'] = (!$promotion['ab__dotd_expired'] && !$promotion['ab__dotd_awaited']);
}
}
function fn_ab__deal_of_the_day_delete_promotions_post ($promotion_ids)
{
db_query('DELETE FROM ?:ab__deal_of_the_day WHERE promotion_id IN (?n)', $promotion_ids);
foreach ($promotion_ids as $promotion_id) {
fn_delete_image_pairs($promotion_id, 'promotion');
}
}
function fn_ab__dotd_get_promotion_seo_data ($promotion_data, $lang_code = CART_LANGUAGE)
{
if (empty($promotion_data['promotion_id'])) {
return false;
}
$seo_data = db_get_row('SELECT * FROM ?:ab__deal_of_the_day WHERE promotion_id = ?i AND lang_code = ?s', $promotion_data['promotion_id'], $lang_code);
if (Registry::get('addons.seo.status') == 'A') {
$seo_data['seo_name'] = fn_seo_get_name('x', $promotion_data['promotion_id'], '', null, $lang_code);
}
$seo_data['main_pair'] = fn_get_image_pairs($promotion_data['promotion_id'], 'promotion', 'M', true, true, $lang_code);
$seo_data['list_pair'] = fn_get_image_pairs($promotion_data['promotion_id'], 'promotion', 'A', true, true, $lang_code);
$seo_data['list_pair'] = reset($seo_data['list_pair']);
$promotion_data = array_merge($promotion_data, $seo_data);
$promotion_data['ab__dotd_expired'] = (!empty($promotion_data['to_date']) && $promotion_data['to_date'] < TIME);
$promotion_data['ab__dotd_awaited'] = (!empty($promotion_data['from_date']) && $promotion_data['from_date'] > TIME);
$promotion_data['ab__dotd_active'] = (!$promotion_data['ab__dotd_expired'] && !$promotion_data['ab__dotd_awaited']);
return $promotion_data;
}
function fn_ab__dotd_get_promotion_products ($promotion, $block_settings = array())
{
if (empty($promotion)) {
return false;
}
list($where, $join) = fn_ab__dotd_build_promotion_conditions_query($promotion['conditions']);
list($products) = fn_get_products(array(
'ab__dotd_join' => implode(' ', $join),
'ab__dotd_where' => $where
), Registry::get('settings.Appearance.products_per_page'));
$params = array(
'get_icon' => true,
'get_detailed' => true,
'get_options' => true,
);
if (!empty($block_settings['ab__show_additional_product_images']) && $block_settings['ab__show_additional_product_images'] == 'Y') {
$params['get_additional'] = true;
}
fn_gather_additional_products_data($products, $params);
return $products;
}
function fn_ab__dotd_build_promotion_bonuses_query ($bonuses = array())
{
$operators = array(
'in' => 'IN',
'nin' => 'NOT IN'
);
$join = array();
$where = 0;
if (!empty($bonuses)) {
foreach ($bonuses as $bonus) {
if ($bonus['bonus'] == 'discount_on_categories') {
$where .= db_quote(' OR ?:products_categories.category_id IN (?n)', explode(',',$bonus['value']));
$join['products_categories'] = 'LEFT JOIN ?:products_categories ON ?:products_categories.product_id = ?:products.product_id';
} elseif (in_array($bonus['bonus'], array('discount_on_products', 'free_products'))) {
fn_ab__dotd_parse_products_array_to_string($bonus['value']);
$where .= db_quote(' OR ?:products.product_id IN (?p)', $bonus['value']);
} elseif ($bonus['bonus'] == 'discount_feature') {
$table_id = 'product_features_values_'.$bonus['condition_element'];
$condition_query = fn_ab__dotd_build_feature_condition($table_id, $operators[$bonus['operator']], $bonus['condition_element'], $bonus['value']);
if (!empty($condition_query)) {
$where .= db_quote(' OR ?p', $condition_query);
$join[$table_id] = db_quote("LEFT JOIN ?:product_features_values AS $table_id ON $table_id.product_id = ?:products.product_id AND $table_id.feature_id = ?i", $bonus['condition_element']);
}
}
}
}
return array($where, $join);
}
function fn_ab__dotd_build_promotion_conditions_query ($conditions)
{
$auth = Tygh::$app['session']['auth'];
$usergroup_ids = !empty($auth['usergroup_ids']) ? $auth['usergroup_ids'] : array();
$operators = array(
'1' => array(
'eq' => '=',
'neq' => '<>',
'lte' => '<=',
'gte' => '>=',
'lt' => '<',
'gt' => '>',
'in' => 'IN',
'nin' => 'NOT IN'
),
'0' => array(
'eq' => '<>',
'neq' => '=',
'lte' => '>',
'gte' => '<',
'lt' => '>=',
'gt' => '<=',
'in' => 'NOT IN',
'nin' => 'IN'
)
);
$join = array();
if (!empty($conditions['set']) && $conditions['set'] == 'all') {
$where = '1';
$and_or = 'AND';
} else {
$where = '0';
$and_or = 'OR';
}
if (!empty($conditions['conditions'])) {
foreach ($conditions['conditions'] as $condition) {
if (isset($condition['set']) && isset($condition['conditions'])) {
list($sub_where, $sub_join) = fn_ab__dotd_build_promotion_conditions_query($condition);
$where .= db_quote(' ?p (?p)', $and_or, $sub_where);
$join = array_merge($join, $sub_join);
} elseif ($condition['condition'] == 'price') {
$where .= db_quote(' ?p ab__product_prices.price ?p ?d', $and_or, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
$join['product_prices'] = db_quote('LEFT JOIN ?:product_prices AS ab__product_prices ON ab__product_prices.product_id = products.product_id AND ab__product_prices.lower_limit = 1 AND ab__product_prices.usergroup_id IN (?n)', array_merge(array(USERGROUP_ALL), $usergroup_ids));
} elseif ($condition['condition'] == 'categories') {
$where .= db_quote(' ?p ab__products_categories.category_id ?p (?n)', $and_or, $operators[$conditions['set_value']][$condition['operator']], explode(',',$condition['value']));
$join['products_categories'] = 'LEFT JOIN ?:products_categories AS ab__products_categories ON ab__products_categories.product_id = products.product_id';
} elseif ($condition['condition'] == 'products') {
fn_ab__dotd_parse_products_array_to_string($condition['value']);
$where .= db_quote(' ?p products.product_id ?p (?p)', $and_or, $operators[$conditions['set_value']][$condition['operator']], $condition['value']);
} elseif ($condition['condition'] == 'feature' && !in_array($condition['operator'], array('cont', 'ncont'))) {
$table_id = 'product_features_values_'.$condition['condition_element'];
$condition_query = fn_ab__dotd_build_feature_condition($table_id, $operators[$conditions['set_value']][$condition['operator']], $condition['condition_element'], $condition['value']);
if (!empty($condition_query)) {
$where .= db_quote(" ?p ?p", $and_or, $condition_query);
$join[$table_id] = db_quote("LEFT JOIN ?:product_features_values AS $table_id ON $table_id.product_id = products.product_id AND $table_id.feature_id = ?i", $condition['condition_element']);
}
}
fn_set_hook('ab__dotd_build_promotion_conditions_query', $conditions, $condition, $where, $join, $operators, $and_or);
}
}
if ($where == '1') {
$where = '0';
}
return array($where, $join);
}
function fn_ab__dotd_parse_products_array_to_string (&$value)
{
if (is_array($value)) {
$product_ids = '';
foreach ($value as $product) {
$product_ids .= ',' . $product['product_id'];
}
$value = substr($product_ids, 1);
}
}
function fn_ab__dotd_include_subcats_to_category_ids_string (&$value)
{
$where = '';
foreach (explode(',', $value) as $category_id) {
$where .= db_quote(" OR category_id = ?i OR id_path = ?i OR id_path LIKE ?s OR id_path LIKE ?s OR id_path LIKE ?s",
$category_id, $category_id, $category_id.'/%', '%/'.$category_id, '%/'.$category_id.'/%');
}
$value = db_get_fields('SELECT category_id FROM ?:categories WHERE status IN (?n) AND (0 ?p)', array('A', 'H'), $where);
}
function fn_ab__dotd_build_feature_condition ($table_id, $operator, $feature_id, $value)
{
$feature_type = db_get_field('SELECT feature_type FROM ?:product_features WHERE feature_id = ?i', $feature_id);
$query = false;
if (in_array($feature_type, array('E', 'S', 'M', 'N'))) {
if (in_array($operator, array('IN', 'NOT IN'))) {
$query = db_quote("$table_id.variant_id ?p (?p)", $operator, $value);
} else {
$query = db_quote("$table_id.variant_id ?p ?i", $operator, $value);
}
} elseif (in_array($feature_type, array('C', 'T'))) {
if (in_array($operator, array('IN', 'NOT IN'))) {
$query = db_quote("$table_id.value ?p (?a)", $operator, explode(',', $value));
} else {
$query = db_quote("$table_id.value ?p ?s", $operator, $value);
}
} elseif ($feature_type == 'O') {
if (in_array($operator, array('IN', 'NOT IN'))) {
$query = db_quote("$table_id.value ?p (?a)", $operator, explode(',', $value));
} else {
$query = db_quote("$table_id.value ?p ?d", $operator, $value);
};
}
return $query;
}
function fn_promotion_exists ($promotion_id, $additional_condition = null)
{
return (bool)db_get_field(
'SELECT COUNT(*) FROM ?:promotion_descriptions WHERE promotion_id = ?i ' . $additional_condition,
$promotion_id
);
}
function fn_ab__dotd_get_promotions ($params)
{
if (empty($params)) {
return false;
}
$default_params = array (
'get_hidden' => false,
'active' => true,
);
$params = array_merge($default_params, $params);
if (!empty($params['item_ids'])) {
$params['promotion_id'] = explode(',', $params['item_ids']);
}
list($promotions) = fn_get_promotions($params, $params['limit']);
if (empty($promotions)) {
return false;
}
$promotion_ids = array_keys($promotions);
$images = fn_get_image_pairs($promotion_ids, 'promotion', 'A');
if (!empty($images)) {
foreach ($images as $promotion_id => $image) {
if (empty($images[$promotion_id])) {
continue;
}
$promotions[$promotion_id]['list_pair'] = reset($images[$promotion_id]);
}
}
if (!empty($params['promotion_id'])) {
$promotions = fn_sort_by_ids($promotions, $params['promotion_id'], 'promotion_id');
}
return array($promotions);
}
function fn_ab__dotd_get_promotion_data ($params)
{
if (empty($params) || empty($params['item_ids']) || is_array($params['item_ids'])) {
return false;
}
$promotion = fn_ab__dotd_get_cached_promotion_data($params['item_ids']);
return array($promotion);
}
function fn_ab__deal_of_the_day_buy_together_get_chains ($params, $auth, $lang_code, $fields, &$conditions, $joins)
{
if (empty($params['chain_id']) && Registry::get('runtime.controller') == 'promotions') {
$conditions[] = '0';
}
}
function fn_ab__dotd_get_chains ($params = array(), $items_per_page = Null, $lang_code = CART_LANGUAGE)
{
if (Registry::get('addons.buy_together.status') != 'A') return array(false, $params);
$default_params = array (
'page' => 1,
'limit' => 0,
'items_per_page' => intval(trim(Registry::get('addons.ab__deal_of_the_day.chains_per_page'))),
'excluded_chains' => array()
);
$params = array_merge($default_params, $params);
$limit = '';
if (!empty($params['limit'])) {
$limit = db_quote(" LIMIT 0, ?i", $params['limit']);
} elseif (!empty($params['items_per_page'])) {
$limit = db_paginate($params['page'], $params['items_per_page']);
}
$time = time();
$condition = db_quote(' AND status = ?s AND display_in_promotions = ?s AND (date_from = 0 OR date_from <= ?i) AND (date_to = 0 OR date_to >= ?i)', 'A', 'Y', $time, $time);
$chains = db_get_array('SELECT chain_id, product_id, products FROM ?:buy_together WHERE status = ?s AND display_in_promotions = ?s', 'A', 'Y');
$product_ids = array();
foreach ($chains as &$chain) {
$chain['products'] = unserialize($chain['products']);
$product_ids[$chain['product_id']] = $chain['product_id'];
foreach ($chain['products'] as $product) {
$product_ids[$product['product_id']] = $product['product_id'];
}
}
$amount_condition = db_quote('p.status = ?s AND p.product_id IN (?n)', 'A', $product_ids);
if (Registry::get('settings.General.inventory_tracking') == 'Y' && Registry::get('settings.General.show_out_of_stock_products') == 'N') {
$amount_condition .= db_quote(' AND (CASE p.tracking WHEN ?s THEN inventory.amount > 0 WHEN ?s THEN p.amount > 0 ELSE 1 END)', ProductTracking::TRACK_WITH_OPTIONS, ProductTracking::TRACK_WITHOUT_OPTIONS);
}
$products = db_get_fields('SELECT p.product_id FROM ?:products AS p
LEFT JOIN ?:product_options_inventory as inventory ON inventory.product_id = p.product_id
WHERE ?p', $amount_condition);
foreach ($chains as $chain) {
if (!in_array($chain['product_id'], $products)) {
$params['excluded_chains'][] = $chain['chain_id'];
} else {
foreach ($chain['products'] as $product) {
if (!in_array($product['product_id'], $products)) {
$params['excluded_chains'][] = $chain['chain_id'];
}
}
}
}
if (!empty($params['excluded_chains'])) {
$condition .= db_quote(' AND chain_id NOT IN (?n)', $params['excluded_chains']);
}
$chain_ids = db_get_fields('SELECT SQL_CALC_FOUND_ROWS chain_id FROM ?:buy_together WHERE 1 ?p ?p', $condition, $limit);
$params['total_items'] = empty($params['items_per_page']) ? count($chain_ids) : db_get_found_rows();
$params['total_pages'] = empty($params['items_per_page']) ? 1 : ceil($params['total_items'] / $params['items_per_page']);
if (empty($chain_ids)) {
return array(false, $params);
}
$chains = array();
foreach ($chain_ids as $chain_id) {
$chain = fn_buy_together_get_chains(array(
'chain_id' => $chain_id,
'full_info' => true
));
if (!empty($chain)) {
$chains[$chain_id] = reset($chain);
}
}
$params['more'] = min($params['items_per_page'], $params['total_items'] - $params['items_per_page'] * $params['page']);
return array($chains, $params);
}
function fn_ab__deal_of_the_day_ab__as_other_objects (&$objects)
{
if (Registry::get('addons.ab__deal_of_the_day.ab__as_add_to_sitemap') == 'Y') {
$join = '';
$condition = db_quote('?:promotions.status = ?s', 'A');
fn_set_hook('ab__dotd_get_promotions_for_sitemap', $join, $condition);
$promotions_ids = db_get_fields('SELECT ?:promotions.promotion_id FROM ?:promotions ?p WHERE ?p', $join, $condition);
if (!empty($promotions_ids)) {
$objects['promotions'] = $promotions_ids;
}
}
}
function fn_ab__deal_of_the_day_sitemap_link_object (&$link, $object, $value)
{
if ($object == 'promotions') {
$link = "promotions.view?promotion_id={$value}";
}
}
function fn_ab__deal_of_the_day_get_products ($params, $fields, $sortings, &$condition, &$join, $sorting, $group_by, $lang_code, $having)
{
if (!empty($params['ab__dotd_join'])) {
$join .= ' ' . $params['ab__dotd_join'];
}
if (!empty($params['ab__dotd_where'])) {
$condition .= ' AND (' . $params['ab__dotd_where'] . ')';
}
if (!empty($params['block_data']) && !empty($params['block_data']['type']) && $params['block_data']['type'] == 'product_filters' && !empty($params['get_conditions']) && !empty($params['dispatch']) && $params['dispatch'] == 'promotions.view') {
$promotion = fn_ab__dotd_get_cached_promotion_data($_REQUEST['promotion_id']);
list($w, $j) = fn_ab__dotd_build_promotion_conditions_query($promotion['conditions']);
if (!empty($j)) {
$join .= ' ' . implode(' ', $j);
}
if (!empty($w)) {
$condition .= ' AND ' . $w;
}
}
}
function fn_ab__deal_of_the_day_get_filters_products_count_pre (&$params, &$cache_params, &$cache_tables)
{
if (!empty($params['dispatch']) && $params['dispatch'] == 'promotions.view') {
$promotion = fn_ab__dotd_get_cached_promotion_data ($_REQUEST['promotion_id']);
if (empty($promotion['use_products_filter']) || $promotion['use_products_filter'] == 'Y') {
$params['check_location'] = false;
$cache_tables[] = 'promotions';
$cache_params[] = 'promotion_id';
}
}
}
function fn_ab__dotd_get_cached_promotion_data ($promotion_id)
{
static $promotions = array();
if (empty($promotions[$promotion_id])) {
$promotions[$promotion_id] = fn_get_promotion_data($promotion_id);
$promotions[$promotion_id] = fn_ab__dotd_get_promotion_seo_data($promotions[$promotion_id]);
}
return $promotions[$promotion_id];
}
function fn_ab__promotion_main_data_get_promotion_data ()
{
if (!empty($_REQUEST['dispatch'] && $_REQUEST['dispatch'] == 'promotions.view' && !empty($_REQUEST['promotion_id']))) {
return fn_ab__dotd_get_cached_promotion_data ($_REQUEST['promotion_id']);
}
return false;
}