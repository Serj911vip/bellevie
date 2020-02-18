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
$schema['abt__ut2'] = array(
'permissions' => array('GET' => 'abt__ut2.settings.view', 'POST' => 'abt__ut2.settings.manage'),
'modes' => array(
'settings' => array (
'permissions' => array(
'GET' => 'abt__ut2.settings.view',
)
),
'update_settings' => array (
'permissions' => array(
'POST' => 'abt__ut2.settings.manage',
)
),
'microdata' => array (
'permissions' => array(
'GET' => 'abt__ut2.settings.view',
)
),
'update_microdata' => array (
'permissions' => array(
'POST' => 'abt__ut2.settings.manage',
)
),
'demodata' => array (
'permissions' => array(
'GET' => 'abt__ut2.settings.view',
)
),
'update_demodata' => array (
'permissions' => array(
'POST' => 'abt__ut2.settings.manage',
)
),
'help' => array (
'permissions' => array(
'GET' => 'abt__ut2.settings.view',
)
),
),
);
$schema['abt__ut2_buy_together'] = array(
'modes' => array(
'generate' => array (
'permissions' => 'abt__ut2.buy_together_generate'
),
'manage' => array (
'permissions' => 'manage_catalog'
),
'update' => array (
'permissions' => 'manage_catalog'
),
'delete' => array (
'permissions' => 'manage_catalog'
),
'm_delete' => array (
'permissions' => 'manage_catalog'
),
),
);
return $schema;
