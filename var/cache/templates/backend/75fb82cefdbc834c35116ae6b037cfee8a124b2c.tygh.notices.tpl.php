<?php /* Smarty version Smarty-3.1.21, created on 2020-02-18 17:53:23
         compiled from "C:\OSPanel\domains\bellevie.gift\design\backend\templates\views\upgrade_center\components\notices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1038511155e4bfa6391fb62-47768357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fb82cefdbc834c35116ae6b037cfee8a124b2c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\bellevie.gift\\design\\backend\\templates\\views\\upgrade_center\\components\\notices.tpl',
      1 => 1564032886,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1038511155e4bfa6391fb62-47768357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'validation_result' => 0,
    'validation_data' => 0,
    'type' => 0,
    'validator_name' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5e4bfa63938894_82893129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5e4bfa63938894_82893129')) {function content_5e4bfa63938894_82893129($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/OSPanel/domains/bellevie.gift/app/functions/smarty_plugins\\block.hook.php';
?><div id="install_notices_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if (!$_smarty_tpl->tpl_vars['validation_result']->value&&$_smarty_tpl->tpl_vars['validation_data']->value) {?>
        <div class="upgrade-center_adv-content" >
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"upgrade_center:validators")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"upgrade_center:validators"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php if ($_smarty_tpl->tpl_vars['validation_data']->value['permissions']||$_smarty_tpl->tpl_vars['validation_data']->value['restore']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/upgrade_center/components/permissions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data'=>(($tmp = @$_smarty_tpl->tpl_vars['validation_data']->value['permissions'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['validation_data']->value['restore'] : $tmp),'id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0);?>


                <?php } elseif ($_smarty_tpl->tpl_vars['validation_data']->value['collisions']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/upgrade_center/components/collisions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data'=>$_smarty_tpl->tpl_vars['validation_data']->value['collisions'],'id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0);?>

                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['validator_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['validation_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['validator_name']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/upgrade_center/components/general.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('validator_name'=>$_smarty_tpl->tpl_vars['validator_name']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value,'type'=>$_smarty_tpl->tpl_vars['type']->value), 0);?>

                    <?php } ?>
                <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"upgrade_center:validators"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </div>
    <?php }?>
<!--install_notices_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
