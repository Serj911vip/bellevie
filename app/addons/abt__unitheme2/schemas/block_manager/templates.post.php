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
$schema['blocks/menu/abt__ut2_dropdown_horizontal_mwi.tpl'] = array (
'settings' => array (
'abt_menu_long_names' => array(
'type' => 'checkbox',
'default_value' => 'N',
'tooltip' => __('abt_menu_long_names.tooltip'),
),
'abt_menu_long_names_max_width' => array (
'type' => 'input',
'default_value' => '100',
'tooltip' => __('abt_menu_long_names_max_width.tooltip'),
),
'abt_menu_icon_items' => array(
'type' => 'checkbox',
'default_value' => 'N',
'tooltip' => __('abt_menu_icon_items.tooltip'),
),
'dropdown_second_level_elements' => array (
'type' => 'input',
'default_value' => '12'
),
'dropdown_third_level_elements' => array (
'type' => 'input',
'default_value' => '5'
),
),
);
$schema['blocks/menu/abt__ut2_dropdown_vertical_mwi.tpl'] = array (
'settings' => array (
'abt_menu_icon_items' => array(
'type' => 'checkbox',
'default_value' => 'N',
'tooltip' => __('abt_menu_icon_items.tooltip'),
),
'no_hidden_elements_second_level_view' => array(
'type' => 'input',
'default_value' => '5',
'tooltip' => __('no_hidden_elements_second_level_view.tooltip'),
),
'elements_per_column_third_level_view' => array(
'type' => 'input',
'default_value' => '10',
'tooltip' => __('elements_per_column_third_level_view.tooltip'),
),
'dropdown_second_level_elements' => array (
'type' => 'input',
'default_value' => '12'
),
'dropdown_third_level_elements' => array (
'type' => 'input',
'default_value' => '6'
),
'abt_menu_ajax_load' => array(
'type' => 'checkbox',
'default_value' => 'N',
'tooltip' => __('abt_menu_ajax_load.tooltip'),
),
),
);
$tmpls = array(
'blocks/products/products_multicolumns.tpl',
'blocks/products/products_without_options.tpl',
);
if (!empty($tmpls)){
foreach ($tmpls as $tmpl) {
$schema[$tmpl]['bulk_modifier']['fn_abt__ut2_add_products_features_list'] = array('products' => '#this',);
}
}
$schema['blocks/products/products_scroller_advanced.tpl'] = array (
'settings' => array(
'show_price' => array (
'type' => 'checkbox',
'default_value' => 'Y'
),
'enable_quick_view' => array (
'type' => 'checkbox',
'default_value' => 'N'
),
'not_scroll_automatically' => array (
'type' => 'checkbox',
'default_value' => 'N'
),
'scroll_per_page' => array (
'type' => 'checkbox',
'default_value' => 'N'
),
'thumbnail_width' => array (
'type' => 'input',
'default_value' => Registry::get('settings.Thumbnails.product_lists_thumbnail_width')
),
'abt__ut2_thumbnail_height' => array (
'type' => 'input',
'default_value' => Registry::get('settings.Thumbnails.product_lists_thumbnail_height')
),
'speed' => array (
'type' => 'input',
'default_value' => 400
),
'pause_delay' => array (
'type' => 'input',
'default_value' => 3
),
'item_quantity' => array (
'type' => 'input',
'default_value' => 5
),
'outside_navigation' => array (
'type' => 'checkbox',
'default_value' => 'Y'
),
),
'bulk_modifier' => array (
'fn_gather_additional_products_data' => array (
'products' => '#this',
'params' => array (
'get_icon' => true,
'get_detailed' => true,
'get_options' => true,
'get_additional' => true,
),
),
),
);
return $schema;