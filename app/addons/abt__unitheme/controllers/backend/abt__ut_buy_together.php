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
if (!defined('BOOTSTRAP')) {die('Access denied');}
use Tygh\Registry;
if ($_SERVER[ab_____(base64_decode('U0ZSVkZUVWBORlVJUEU='))] == ab_____(base64_decode('UVBUVQ=='))) {
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aGZvZnNidWY=')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
fn_trusted_vars('item_data');
if (!empty($_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))]) && !empty($_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))][ab_____(base64_decode('Y2J0ZmBxc3BldmR1dA=='))]) && !empty($_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))][ab_____(base64_decode('cXNwZXZkdXQ='))])) {
$item_data = $_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))];
unset($item_data[ab_____(base64_decode('Y2J0ZmBxc3BldmR1dA=='))]);
$count = 0;
foreach ($_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))][ab_____(base64_decode('Y2J0ZmBxc3BldmR1dA=='))] as $key => $product) {
if (empty($product[ab_____(base64_decode('cXNwZXZkdWBqZQ=='))]) || empty($product[ab_____(base64_decode('bnBlamdqZnNgdXpxZg=='))])) {
continue;
}
$product_name =call_user_func(ab_____(base64_decode('Z29gaGZ1YHFzcGV2ZHVgb2JuZg==')),$product[ab_____(base64_decode('cXNwZXZkdWBqZQ=='))], DESCR_SL);
$item_data[ab_____(base64_decode('b2JuZg=='))] = call_user_func(ab_____(base64_decode('dHVzYHNmcW1iZGY=')),ab_____(base64_decode('JnFzcGV2ZHUm')), $product_name, $_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))][ab_____(base64_decode('b2JuZg=='))]);
$item_data[ab_____(base64_decode('ZWZ0ZHNqcXVqcG8='))] = call_user_func(ab_____(base64_decode('dHVzYHNmcW1iZGY=')),ab_____(base64_decode('JnFzcGV2ZHUm')), $product_name, $_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))][ab_____(base64_decode('ZWZ0ZHNqcXVqcG8='))]);
$item_data[ab_____(base64_decode('bnBlamdqZnNgdXpxZg=='))] = $product[ab_____(base64_decode('bnBlamdqZnNgdXpxZg=='))];
$item_data[ab_____(base64_decode('bnBlamdqZnM='))] = empty($product[ab_____(base64_decode('bnBlamdqZnM='))]) ? 0 : $product[ab_____(base64_decode('bnBlamdqZnM='))];
$res =call_user_func(ab_____(base64_decode('Z29gY3Z6YHVwaGZ1aWZzYHZxZWJ1ZmBkaWJqbw==')),0, $product[ab_____(base64_decode('cXNwZXZkdWBqZQ=='))], $item_data, $auth, DESCR_SL);
if ($res) {
$count++;
}
}
call_user_func(ab_____(base64_decode('Z29gdGZ1YG9wdWpnamRidWpwbw==')),ab_____(base64_decode('Tw==')), call_user_func(ab_____(base64_decode('YGA=')),ab_____(base64_decode('b3B1amRm'))), __(ab_____(base64_decode('YmN1YGB2dWBjdS9kcG5jam9idWpwb3RgaGZvZnNidWZl')), array('[n]' => $count)));
} else {
call_user_func(ab_____(base64_decode('Z29gdGZ1YG9wdWpnamRidWpwbw==')),ab_____(base64_decode('Rg==')), call_user_func(ab_____(base64_decode('YGA=')),ab_____(base64_decode('ZnNzcHM='))), __(ab_____(base64_decode('YmN1YGB2dWBjdS9mbnF1emBlYnVi'))));
}
return array(CONTROLLER_STATUS_OK, ab_____(base64_decode('YmN1YGB2dWBjdnpgdXBoZnVpZnMvaGZvZnNidWY=')));
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('dnFlYnVm')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
if (!empty($_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))])) {
call_user_func(ab_____(base64_decode('Z29gY3Z6YHVwaGZ1aWZzYHZxZWJ1ZmBkaWJqbw==')),$_REQUEST[ab_____(base64_decode('anVmbmBqZQ=='))], $_REQUEST[ab_____(base64_decode('cXNwZXZkdWBqZQ=='))], $_REQUEST[ab_____(base64_decode('anVmbmBlYnVi'))], $auth, DESCR_SL);
return array(CONTROLLER_STATUS_OK, ab_____(base64_decode('YmN1YGB2dWBjdnpgdXBoZnVpZnMvbmJvYmhm')));
}
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('ZWZtZnVm')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
if (!empty($_REQUEST[ab_____(base64_decode('ZGliam9gamU='))])) {
call_user_func(ab_____(base64_decode('Z29gY3Z6YHVwaGZ1aWZzYGVmbWZ1ZmBkaWJqbw==')),$_REQUEST[ab_____(base64_decode('ZGliam9gamU='))]);
return array(CONTROLLER_STATUS_OK, ab_____(base64_decode('YmN1YGB2dWBjdnpgdXBoZnVpZnMvbmJvYmhm')));
}
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmBlZm1mdWY=')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
if (!empty($_REQUEST[ab_____(base64_decode('ZGliam9gamV0'))])) {
foreach ($_REQUEST[ab_____(base64_decode('ZGliam9gamV0'))] as $k => $v) {
call_user_func(ab_____(base64_decode('Z29gY3Z6YHVwaGZ1aWZzYGVmbWZ1ZmBkaWJqbw==')),$v);
}
return array(CONTROLLER_STATUS_OK, ab_____(base64_decode('YmN1YGB2dWBjdnpgdXBoZnVpZnMvbmJvYmhm')));
}
}
return;
}
if (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('aGZvZnNidWY=')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
} elseif (call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('c3ZvdWpuZi9ucGVm'))) == ab_____(base64_decode('bmJvYmhm')) and call_user_func(ab_____(base64_decode('anRgY'.'nN'.'zYn'.'o=')),call_user_func(ab_____(base64_decode('VXp'.'oaV'.'1CQ0J'.'OYm9ia'.'GZ'.'zOztk'.'aWBi')),true)) ) {
$params = $_REQUEST;
list($chains, $search) =call_user_func(ab_____(base64_decode('Z29gYmN1YGB2dWBjdWBoZnVgZGliam90')),$params, call_user_func(ab_____(base64_decode('VXpoaV1TZmhqdHVzejs7aGZ1')),ab_____(base64_decode('dGZ1dWpvaHQvQnFxZmJzYm9kZi9iZW5qb2BmbWZuZm91dGBxZnNgcWJoZg=='))),DESCR_SL);
Tygh::$app['view']->assign(ab_____(base64_decode('ZGliam90')), $chains);
Tygh::$app['view']->assign(ab_____(base64_decode('dGZic2Rp')), $search);
}