<?php
/* Smarty version 3.1.36, created on 2023-05-14 16:21:26
  from '/var/www/html/whmcs/8.6.1/templates/twenty-one/banned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_64610a865cc826_52898240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '769c44f0e672543d19648554dd774b5edf215490' => 
    array (
      0 => '/var/www/html/whmcs/8.6.1/templates/twenty-one/banned.tpl',
      1 => 1655199152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64610a865cc826_52898240 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-danger">
    <strong>
        <i class="fas fa-gavel"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedyourip'),$_smarty_tpl ) );?>

        <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedhasbeenbanned'),$_smarty_tpl ) );?>

    </strong>
    <ul>
        <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedbanreason'),$_smarty_tpl ) );?>
:
            <strong><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</strong>
        </li>
        <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedbanexpires'),$_smarty_tpl ) );?>
:
            <?php echo $_smarty_tpl->tpl_vars['expires']->value;?>

        </li>
    </ul>
</div>
<?php }
}
