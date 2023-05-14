<?php
/* Smarty version 3.1.36, created on 2023-05-14 16:21:26
  from '/var/www/html/whmcs/8.6.1/templates/twenty-one/includes/social-accounts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_64610a865c3e33_39720381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '243ee9ba2e31fccb9244c0ca6c8beed513e4324c' => 
    array (
      0 => '/var/www/html/whmcs/8.6.1/templates/twenty-one/includes/social-accounts.tpl',
      1 => 1655199152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64610a865c3e33_39720381 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['socialAccounts']->value, 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
?>
    <li class="list-inline-item">
        <a class="btn btn-icon mb-1" href="<?php echo $_smarty_tpl->tpl_vars['account']->value->getUrl();?>
" target="_blank">
            <i class="<?php echo $_smarty_tpl->tpl_vars['account']->value->getFontAwesomeIcon();?>
"></i>
        </a>
    </li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
