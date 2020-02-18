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
use Tygh\BlockManager\RenderManager;
use Tygh\BlockManager\Block;
if ($mode == 'load' and !empty($_REQUEST['result_ids'])){
$params = $_REQUEST;
foreach ( (array) explode(',', $_REQUEST['result_ids']) as $result_id){
$elements = (array) explode('_', $result_id);
$block_id = array_pop($elements);
if (!empty($block_id) and intval($block_id)){
$block = Block::instance()->getById(intval($block_id), 0, array(), DESCR_SL);
Tygh::$app['ajax']->assignHtml($result_id, RenderManager::renderBlock($block));
}
}
exit;
}