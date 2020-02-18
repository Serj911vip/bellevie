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
$schema['abt__ut2_advanced_subcategories_menu'] = array(
'templates' => 'addons/abt__unitheme2/blocks/abt__ut2_advanced_subcategories_menu.tpl',
'content' => array(
'abt__ut2_subcategories' => array(
'type' => 'function',
'function' => array('fn_abt__ut2_get_sub_or_parent_categories')
),
),
'wrappers' => 'blocks/wrappers',
'cache' => array(
'update_handlers' => array(
'categories',
'category_descriptions'
),
'request_handlers' => array('current_category_id' => '%CATEGORY_ID%')
)
);
if (!empty($schema['banners'])){
$schema['banners']['templates']['addons/abt__unitheme2/blocks/abt__ut2_banner_carousel_combined.tpl'] = array (
'settings' => array (
'margin' => array (
'option_name' => 'abt__ut2.option.margin',
'type' => 'input',
'default_value' => '0'
),
'height' => array (
'option_name' => 'abt__ut2.option.height',
'type' => 'input',
'default_value' => '400px'
),
'navigation' => array (
'type' => 'selectbox',
'values' => array (
'N' => 'none',
'D' => 'dots',
'P' => 'pages',
'A' => 'arrows'
),
'default_value' => 'D'
),
'delay' => array (
'type' => 'input',
'default_value' => '3'
),
),
);
$schema['banners']['templates']['addons/abt__unitheme2/blocks/abt__ut2_banner_combined.tpl'] = array (
'settings' => array (
'margin' => array (
'option_name' => 'abt__ut2.option.margin',
'type' => 'input',
'default_value' => '0'
),
'height' => array (
'option_name' => 'abt__ut2.option.height',
'type' => 'input',
'default_value' => '400px'
),
),
);
$schema['banners']['cache']['callable_handlers']['date'] = array('date', array('Y-m-d'));
}
$schema['abt__ut2_light_menu'] = array (
'templates' => array(
'addons/abt__unitheme2/blocks/abt__ut2_light_menu.tpl' =>array(
'settings' => array (
'abt_menu_icon_items' => array(
'type' => 'checkbox',
'default_value' => 'N',
'tooltip' => __('abt_menu_icon_items.tooltip'),
),
'elements_per_column_third_level_view' => array(
'type' => 'input',
'default_value' => '5',
'tooltip' => __('elements_per_column_third_level_view.tooltip'),
),
"abt__ut2_show_title" => array (
'type' => 'checkbox',
'default_value' => 'N'
)
)
)
),
'content' => array (
'menu' => array(
'type' => 'enum',
'hide_label' => true,
'remove_indent' => true,
'object' => 'items',
'items_function' => 'fn_abt__ut2_get_light_menu',
'fillings' => array(
'manually' => array(
'picker' => 'addons/abt__unitheme2/pickers/menus/picker.tpl',
'picker_params' => array(
'multiple' => true,
'status' => 'A',
'positions' => true,
)
)
)
),
),
'cache' => array(
'update_handlers' => array('menus', 'menu_descriptions', 'static_data', 'static_data_descriptions')
),
'multilanguage' => true,
);
return $schema;