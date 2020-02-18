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
$schema = array (
'general' => array (
'position' => 100,
'items' => array (
'brand_feature_id' => array (
'type' => 'input',
'class' => 'input-small',
'position' => 100,
'value' => 18,
'is_for_all_devices' => 'Y',
),
'blog_page_id' => array (
'type' => 'input',
'class' => 'input-small',
'position' => 150,
'value' => '',
'is_for_all_devices' => 'Y',
),
'menu_min_height' => array (
'type' => 'input',
'class' => 'input-small',
'position' => 200,
'value' => 475,
'suffix' => 'px',
'is_for_all_devices' => 'Y',
),
'enable_fixed_header_panel' => array (
'type' => 'checkbox',
'position' => 300,
'value' => 'Y',
'is_for_all_devices' => 'Y',
),
),
),
'category' => array (
'position' => 150,
'items' => array (
'show_subcategories' => array (
'type' => 'checkbox',
'position' => 100,
'value' => 'N',
'is_for_all_devices' => 'Y',
),
'description_position' => array(
'type' => 'selectbox',
'position' => 200,
'class' => 'input-large',
'value' => 'bottom',
'variants' => array (
'bottom',
'top',
'none',
),
'variants_as_language_variable' => 'Y',
'is_for_all_devices' => 'Y'
)
)
),
'features' => array(
'position' => 175,
'items' => array (
'description_position' => array(
'type' => 'selectbox',
'position' => 200,
'class' => 'input-large',
'value' => 'bottom',
'variants' => array (
'bottom',
'top',
'none',
),
'variants_as_language_variable' => 'Y',
'is_for_all_devices' => 'Y'
)
)
),
'product_list' => array (
'position' => 200,
'items' => array (
'show_gallery' => array(
'type' => 'checkbox',
'position' => 10,
'value' => 'N',
'is_for_all_devices' => 'Y',
),
'lazy_load' => array (
'type' => 'checkbox',
'position' => 20,
'value' => 'Y',
'is_for_all_devices' => 'Y',
),
'limit_product_variations' => array (
'type' => 'input',
'class' => 'input-small',
'position' => 30,
'value' => '10',
'is_for_all_devices' => 'Y',
),
'decolorate_out_of_stock_products' => array (
'type' => 'checkbox',
'position' => 40,
'value' => 'N',
'is_for_all_devices' => 'Y',
),
'show_fixed_filters_button' => array (
'type' => 'checkbox',
'position' => 50,
'value' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'Y',
),
'disabled' => array (
'desktop' => 'Y',
'tablet' => 'Y'
)
),
'products_multicolumns' => array (
'is_group' => 'Y',
'position' => 40,
'items' => array(
'grid_item_height' => array (
'type' => 'input',
'class' => 'input-small',
'position' => 100,
'value' => array(
'desktop' => '',
'tablet' => '',
'mobile' => '',
),
),
'show_sku' => array (
'type' => 'checkbox',
'position' => 110,
'value' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'N',
),
),
'show_qty' => array (
'type' => 'checkbox',
'position' => 120,
'value' => array(
'desktop' => 'Y',
'tablet' => 'N',
'mobile' => 'N',
),
),
'show_buttons' => array (
'type' => 'checkbox',
'position' => 130,
'value' => array(
'desktop' => 'Y',
'tablet' => 'N',
'mobile' => 'N',
),
),
'show_buttons_on_hover' => array (
'type' => 'checkbox',
'position' => 140,
'disabled' => array(
'desktop' => 'N',
'tablet' => 'Y',
'mobile' => 'Y',
),
'value' => array(
'desktop' => 'Y',
'tablet' => 'N',
'mobile' => 'N',
),
),
'grid_item_bottom_content' => array (
'type' => 'selectbox',
'class' => 'input-large',
'position' => 150,
'disabled' => array(
'desktop' => 'N',
'tablet' => 'Y',
'mobile' => 'Y',
),
'value' => array(
'desktop' => 'features',
'tablet' => 'none',
'mobile' => 'none',
),
'variants' => array (
'none',
'description',
'features',
),
'variants_as_language_variable' => 'Y',
),
'show_brand_logo' => array (
'type' => 'checkbox',
'position' => 160,
'value' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'N',
),
),
'show_you_save' => array (
'type' => 'checkbox',
'position' => 165,
'value' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'N',
),
),
),
),
'products_without_options' => array(
'is_group' => 'Y',
'position' => 40,
'items' => array(
'show_sku' => array(
'type' => 'checkbox',
'position' => 170,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_amount' => array (
'type' => 'checkbox',
'position' => 180,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_qty' => array (
'type' => 'checkbox',
'position' => 190,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_features' => array (
'type' => 'checkbox',
'position' => 200,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_options' => array (
'type' => 'checkbox',
'position' => 210,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_brand_logo' => array (
'type' => 'checkbox',
'position' => 220,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
),
),
'short_list' => array(
'is_group' => 'Y',
'position' => 40,
'items' => array(
'show_sku' => array (
'type' => 'checkbox',
'position' => 230,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'N',
),
),
'show_qty' => array (
'type' => 'checkbox',
'position' => 240,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_button' => array (
'type' => 'checkbox',
'position' => 250,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_button_quick_view' => array (
'type' => 'checkbox',
'position' => 260,
'value' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'N',
),
'disabled' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'Y',
),
),
'show_button_wishlist' => array (
'type' => 'checkbox',
'position' => 270,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
'is_addon_dependent' => 'Y',
),
'show_button_compare' => array (
'type' => 'checkbox',
'position' => 280,
'value' => array(
'desktop' => 'Y',
'tablet' => 'N',
'mobile' => 'N',
),
),
),
),
),
),
'products' => array (
'position' => 300,
'items' => array (
'custom_block_id' => array (
'type' => 'input',
'class' => 'input-small',
'position' => 100,
'value' => '',
'is_for_all_devices' => 'Y',
),
'view' => array(
'is_group' => 'Y',
'position' => 40,
'items' => array(
'show_qty' => array(
'type' => 'checkbox',
'position' => 100,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_sku' => array(
'type' => 'checkbox',
'position' => 200,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_features' => array(
'type' => 'checkbox',
'position' => 300,
'value' => array(
'desktop' => 'Y',
'tablet' => 'Y',
'mobile' => 'Y',
),
),
'show_short_description' => array(
'type' => 'checkbox',
'position' => 400,
'value' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'N',
),
),
'show_sticky_add_to_cart' => array (
'type' => 'checkbox',
'position' => 200,
'value' => array(
'desktop' => 'N',
'tablet' => 'N',
'mobile' => 'Y',
),
'disabled' => array(
'desktop' => 'Y',
'tablet' => 'N',
'mobile' => 'N',
),
),
),
),
'addon_buy_together' => array(
'is_group' => 'Y',
'position' => 200,
'items' => array(
'view' => array(
'type' => 'selectbox',
'class' => 'input-large',
'position' => 150,
'value' => 'as_block_above_tabs',
'variants' => array (
'as_block_above_tabs',
'as_tab_in_tabs',
),
'variants_as_language_variable' => 'Y',
'is_addon_dependent' => 'Y',
'is_for_all_devices' => 'Y',
),
),
),
'addon_required_products' => array(
'is_group' => 'Y',
'position' => 200,
'items' => array(
'list_type' => array(
'type' => 'selectbox',
'class' => 'input-large',
'position' => 150,
'disabled' => array(
'desktop' => 'N',
'tablet' => 'Y',
'mobile' => 'Y',
),
'value' => array(
'desktop' => 'grid_list',
'tablet' => 'grid_list',
'mobile' => 'grid_list',
),
'variants' => array (
'grid_list',
'compact_list',
'product_list',
),
'variants_as_language_variable' => 'Y',
'is_addon_dependent' => 'Y',
),
'item_quantity' => array(
'type' => 'input',
'class' => 'input-small',
'position' => 100,
'value' => array(
'desktop' => 4,
'tablet' => 2,
'mobile' => 2,
),
'disabled' => array(
'desktop' => 'N',
'tablet' => 'Y',
'mobile' => 'Y',
),
'is_addon_dependent' => 'Y',
),
),
),
'addon_social_buttons' => array(
'is_group' => 'Y',
'position' => 300,
'items' => array(
'view' => array(
'type' => 'checkbox',
'position' => 100,
'value' => array(
'desktop' => 'Y',
'tablet' => 'N',
'mobile' => 'N',
),
'is_addon_dependent' => 'Y',
),
),
),
),
),
'load_more' => array (
'position' => 400,
'items' => array (
'product_list' => array (
'type' => 'checkbox',
'position' => 100,
'value' => 'Y',
'is_for_all_devices' => 'Y',
),
'blog' => array (
'type' => 'checkbox',
'position' => 200,
'value' => 'Y',
'is_for_all_devices' => 'Y',
),
'mode' => array (
'type' => 'selectbox',
'class' => 'input-large',
'position' => 300,
'value' => 'on_button_click',
'variants' => array (
'auto',
'on_button_click',
),
'is_for_all_devices' => 'Y',
),
'before_end' => array (
'type' => 'input',
'class' => 'input-small',
'position' => 400,
'value' => 300,
'suffix' => 'px',
'is_for_all_devices' => 'Y',
),
),
),
'addons' => array (
'position' => 10000,
'items' => array (
'wishlist_products' => array(
'is_group' => 'Y',
'position' => 100,
'items' => array(
'item_quantity' => array(
'type' => 'input',
'class' => 'input-small',
'position' => 100,
'value' => array(
'desktop' => 4,
'tablet' => 2,
'mobile' => 2,
),
'disabled' => array(
'desktop' => 'N',
'tablet' => 'Y',
'mobile' => 'Y',
),
'is_addon_dependent' => 'Y',
),
),
),
),
),
);
return $schema;