<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2018   *
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
if (!defined('BOOTSTRAP')) { die('Access denied'); }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (defined('AJAX_REQUEST') and $mode == 'get_products'){
if (intval($_REQUEST['category_id']) > 0){
Registry::get('ajax')->assign("result", "N");
$_statuses = array('A', 'H');
$_condition = fn_get_localizations_condition('localization', true);
$preview = fn_is_preview_action($auth, $_REQUEST);
if (!$preview) {
$_condition .= ' AND (' . fn_find_array_in_set($auth['usergroup_ids'], 'usergroup_ids', true) . ')';
$_condition .= db_quote(' AND status IN (?a)', $_statuses);
}
if (fn_allowed_for('ULTIMATE')) {
$_condition .= fn_get_company_condition('?:categories.company_id');
}
$category_exists = db_get_field(
"SELECT category_id FROM ?:categories WHERE category_id = ?i ?p",
$_REQUEST['category_id'],
$_condition
);
if (!empty($category_exists)) {
$_SESSION['continue_url'] = "categories.view?category_id=$_REQUEST[category_id]";
$_SESSION['current_category_id'] = $_SESSION['breadcrumb_category_id'] = $_REQUEST['category_id'];
$category_data = fn_get_category_data($_REQUEST['category_id'], CART_LANGUAGE, '*', true, false, $preview);
$category_parent_ids = fn_explode('/', $category_data['id_path']);
array_pop($category_parent_ids);
$params = $_REQUEST;
if ($items_per_page = fn_change_session_param($_SESSION, $_REQUEST, 'items_per_page')) {
$params['items_per_page'] = $items_per_page;
}
if ($sort_by = fn_change_session_param($_SESSION, $_REQUEST, 'sort_by')) {
$params['sort_by'] = $sort_by;
}
if ($sort_order = fn_change_session_param($_SESSION, $_REQUEST, 'sort_order')) {
$params['sort_order'] = $sort_order;
}
$params['cid'] = $_REQUEST['category_id'];
$params['extend'] = array('categories', 'description');
$params['subcats'] = '';
if (Registry::get('settings.General.show_products_from_subcategories') == 'Y') {
$params['subcats'] = 'Y';
}
list($products, $search) = fn_get_products($params, Registry::get('settings.Appearance.products_per_page'), CART_LANGUAGE);
if (count($products) > 0){
fn_gather_additional_products_data($products, array(
'get_icon' => true,
'get_detailed' => true,
'get_additional' => true,
'get_options' => true,
'get_discounts' => true,
'get_features' => false
));
$selected_layout = fn_get_products_layout($_REQUEST);
Registry::get('view')->assign('show_qty', true);
Registry::get('view')->assign('products', $products);
Registry::get('view')->assign('search', $search);
Registry::get('view')->assign('selected_layout', $selected_layout);
Registry::get('view')->assign('category_data', $category_data);
Registry::get('view')->assign('no_pagination', true);
Registry::get('view')->assign('no_sorting', true);
Registry::get('view')->assign('redirect_url', fn_url("categories.view?category_id=" . $_REQUEST['category_id']));
$layouts = fn_get_products_views("", false);
$product_columns = Registry::get('settings.Appearance.columns_in_products_list');
if (isset($category_data['product_columns']) and intval($category_data['product_columns']) > 0){
$product_columns = intval($category_data['product_columns']);
}
Registry::get('view')->assign('columns', $product_columns);
if (isset($layouts[$selected_layout]['template'])){
$html_products = Registry::get('view')->fetch($layouts[$selected_layout]['template']);
}
Registry::get('ajax')->assign("products", Registry::get('view')->fetch($layouts[$selected_layout]['template']));
Registry::get('ajax')->assign("result", "Y");
Registry::get('ajax')->assign("addon_name", "ab__auto_loading_products");
}
}
}
exit;
}
return;
}
